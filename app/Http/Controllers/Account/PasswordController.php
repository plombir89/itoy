<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function Spatie\LaravelIgnition\ContextProviders\getLivewireInformation;

class PasswordController extends Controller
{
    public function index()
    {
        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('change.lang', $langs->prefix);
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.account.password', compact('changeLang'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if(!Hash::check($request->password, auth()->user()->password)){
            return back()->with("error", trans('translates.password_not_match'));
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("message", trans('translates.password_changed'));
    }
}
