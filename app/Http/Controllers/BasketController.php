<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Mail\OrderCreated;
use App\Models\Language;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Services\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use function Symfony\Component\HttpKernel\DataCollector\getMessage;

class BasketController extends Controller
{
    public function basket()
    {
        $categories = ProductCategory::whereNull('parent_id')->whereHas('products',function($query){
            $query->where('published', 1);
        })->withCount('products')->with(['item' => function($query){
            $query->select(['title', 'category_id'])->where(['lang' => session('lang')]);
        }])->with('childs')->get();

        $changeLang = [];

        foreach (Language::siteLangs() as $index => $langs){
            $changeLang[$index]['id'] = $langs->id;
            $changeLang[$index]['link'] = route('change.lang', $langs->prefix);
            $changeLang[$index]['name'] = $langs->prefix;
            $changeLang[$index]['icon'] = $langs->icon;
            $changeLang[$index]['title'] = $langs->title;
        }

        $order = (new Basket())->getOrder();

        return view('front.cart', compact('order','changeLang', 'categories'));
    }

    public function basketPlace()
    {
        $basket = new Basket();

        $order = $basket->getOrder();

        return view('main.basketplace', compact('order'));
    }

    public function add(Request $request, Product $product)
    {

//        if(is_null(session('orderId'))){
//            $orderId = Order::create();
//            session(['orderId' => $orderId->id]);
//        }

        if(!$product->isAvailable()){

            $response = [
                'warning' => trans('translates.product_out_of_stock', ['product' => '<a href="'.route('product.show', [app()->getLocale(), $product->item->slug]).'">'.$product->item->title.'</a>']),
            ];

            if ($request->isMethod('GET')) {
                return redirect()->back()->with('warning', $response);
            }

            return response()->json($response);

            //return redirect()->back()->with('warning', 'Product '.$product->title.', Only '.$product->stock.' items is available');
        }

        $basket = new Basket();

        try {
            $basket->addProduct($product);
        }catch (\Exception $e){

            $response = [
                'warning' => trans('translates.product_items_is_available', ['product' => '<a href="'.route('product.show', [app()->getLocale(), $product->item->slug]).'">'.$product->item->title.'</a>','count' => $product->stock]),
            ];

            if ($request->isMethod('GET')) {
                return redirect()->back()->with('warning', $response['warning']);
            }

            return response()->json($response);
        }

        $order = (new Basket())->getOrder();

        $response = [
            'success' => trans('translates.product_added', ['product' => '<a href="'.route('product.show', [app()->getLocale(), $product->item->slug]).'">'.$product->item->title.'</a>', 'cart' => route('basket')], session('lang_prefix')),
            'total' => 'item',
            'text_items_small' => $order->products->count()
        ];

        if ($request->isMethod('GET')) {
            return redirect()->back()->with('product_added', $response);
        }

        return response()->json($response);
    }

    public function remove(Product $product){

        $basket = new Basket();

        $basket->removeProduct($product);

        return redirect()->route('basket');
    }

    public function delete(Product $product){

        $basket = new Basket();

        $basket->deleteProduct($product);

        $order = $basket->getOrder();

        $response = [
            'success' => trans('translates.success_modified_shopping_cart'),
            'total' => 'item',
            'text_items_small' => $order->products->count()
        ];

        return response()->json($response);
    }

    public function confirm(CheckoutRequest $request)
    {

        $basket = new Basket();

        $total = $basket->getOrder()->getFullPrice();

        $order = $basket->getOrder();

        $data = $request->validated();

        $basket->confirmOrder($data);

        Mail::to(Auth::user()->email ?? $data['email'])->send(new OrderCreated($total, $order));

        return redirect()->route('home');
    }

    public function cartInfo(){

        $order = (new Basket())->getOrder();

        return view('front.cart-info', compact('order'));
    }
}
