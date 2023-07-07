<?php


namespace App\Services;


use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Basket
{

    protected $order;

    /**
     * Basket constructor.
     */
    public function __construct()
    {

        if(is_null(session('orderId')) || !Order::find(session('orderId'))){
            $orderId = Order::create();
            session(['orderId' => $orderId->id]);
        }

        $orderId = session('orderId');
        $this->order = Order::find($orderId);
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    public function addProduct(Product $product)
    {
        if($this->order->products->contains($product)){

            $pivotRow = $this->getPivotRow($product);

            if($pivotRow->count < $product->stock){
                $pivotRow->count++;
                $pivotRow->price = $product->price;
                $pivotRow->update();
            }else{
                throw new \Exception('out_of_stock');
                //return redirect()->route('basket')->with('warning', 'Product '.$product->title.', Only '.$product->stock.' items is available');
            }

        }else{
            $this->order->products()->attach($product, ['price' => $product->price]);
        }

        if(Auth::check()){
            $this->order->user_id = Auth::id();
            $this->order->save();
        }
    }

    public function removeProduct(Product $product)
    {
        if($this->order->products->contains($product)){
            $pivotRow = $this->getPivotRow($product);

            if($pivotRow->count < 2){
                $this->order->products()->detach($product);
            }else{
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
    }

    public function deleteProduct($product){
        $this->order->products()->detach($product);
    }

    public function confirmOrder($data)
    {
        $data['status'] = Order::ORDER_PENDING;
        $data['date_added'] = Carbon::now()->toDateTimeString();

        $this->order->update($data);

        foreach ($this->order->products as $orderProduct){
            $orderProduct->stock -= $this->getPivotRow($orderProduct)->count;
        }

        $this->order->products->map->save();

        $data['products'] = $this->order->products->map(function($product){
            return [
                'title' => $product->item->title,
                'url' => route('product.show', [app()->getLocale(), $product->item->slug]),
                'image' => asset('storage/'. $product->img),
                'price' => $product->price,
                'code' => $product->code,
                'count' => $product->pivot->count,
                'total' => $product->getPriceFrom()
            ];
        });

        $data['total'] = $this->order->getFullPrice();

        Mail::send(new \App\Mail\CheckoutForm($data));

        session()->forget('orderId');
    }

    protected function getPivotRow($product)
    {
        return $this->order->products()->where('product_id', $product->id)->first()->pivot;
    }
}
