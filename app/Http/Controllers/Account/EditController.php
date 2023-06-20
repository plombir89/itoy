<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class EditController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('account.edit');
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.account.edit', compact('changeLang','user'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => Rule::unique('users')->ignore(\auth()->id()),
            'phone' => 'required|numeric|min:8'
        ]);

        auth()->user()->update($data);

        return redirect()->route('account.index')->with('message', 'Success: Your account has been successfully updated.');
    }
}
