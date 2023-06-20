<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use App\Models\Language;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Delivery::where('user_id', auth()->id())->get();

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('account.address');
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.account.address.index', compact('changeLang', 'addresses'));
    }

    public function add()
    {
        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('account.address.add');
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.account.address.add', compact('changeLang'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'city' => 'required|string|min:3|max:255',
            'region' => 'required|string|min:3|max:255',
            'postal_code' => 'required|string|min:3|max:255',
            'address' => 'required|string|min:3|max:255',
            'default' => 'boolean'
        ]);

        $data['user_id'] = auth()->id();

        DB::transaction(function () use ($data){

            if($data['default']){
                $d = Delivery::where(['user_id' => auth()->id(), 'default' => true])->first();
                if($d){
                    $d->default = false;
                    $d->save();
                }
            }

            Delivery::create($data);
        });

        return redirect()->route('account.address')->with('message', 'Your address has been successfully updated');
    }

    public function edit(Request $request, Delivery $delivery)
    {
        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('account.address.edit', $delivery);
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.account.address.edit', compact('changeLang', 'delivery'));
    }

    public function update(Request $request, Delivery $delivery)
    {
        $data = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'city' => 'required|string|min:3|max:255',
            'region' => 'required|string|min:3|max:255',
            'postal_code' => 'required|string|min:3|max:255',
            'address' => 'required|string|min:3|max:255',
            'default' => 'boolean'
        ]);

        DB::transaction(function () use ($delivery, $data){
            if($data['default']){
                $d = Delivery::where(['user_id' => auth()->id(), 'default' => true])->first();
                if($d){
                    $d->default = false;
                    $d->save();
                }
            }

            $delivery->update($data);
        });



        return redirect()->route('account.address')->with('message', 'Your address has been successfully updated');
    }

    public function delete(Request $request, Delivery $delivery)
    {
        $delivery->delete();

        return redirect()->route('account.address')->with('message', 'Your address has been successfully updated');
    }
}
