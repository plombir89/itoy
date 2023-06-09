<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WhishlistController extends Controller
{
    public function index(User $user)
    {
        $products = $user->with('wishlist')->first();

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('change.lang', $langs->prefix);
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        return view('front.account.wishlist', compact('changeLang', 'products'));
    }

    public function add(Request $request, Product $product)
    {
        if(!Auth::check()){
            $response = [
                'message' => trans('translates.wishlist_must_login', ['login' => route('login'),'register' => route('register'), 'wishlist' => route('account.wishlist')]),
            ];

            return response()->json($response, 401);
        }

        $user = Auth::user();

        if($user->wishlist->contains($product->id)){
            $response = [
                'success' => trans('translates.wishlist_added', ['produs' => '<a href="'.route('product.show', [app()->getLocale(), $product->item->slug]).'">'.$product->item->title.'</a>', 'wishlist' => route('account.wishlist')]),
                'total' => 'Wishlist ('.$user->wishlist->count().')'
            ];

        }else{
            $user->wishlist()->attach($product->id);

            $response = [
                'success' => trans('translates.wishlist_added', ['produs' => '<a href="'.route('product.show', [app()->getLocale(), $product->item->slug]).'">'.$product->item->title.'</a>', 'wishlist' => route('account.wishlist')]),
                'total' => 'Wishlist ('.$user->wishlist->count().')'
            ];
        }


        return response()->json($response);
    }

    public function remove(Product $product)
    {
        $user = Auth::user();
        $user->wishlist()->detach($product->id);

        return back()->with('message', 'Success: You have modified your wish list!');
    }
}
