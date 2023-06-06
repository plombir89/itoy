<?php


namespace App\Services;


use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

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
                $pivotRow->update();
            }else{
                return redirect()->route('basket')->with('warning', 'Product '.$product->title.', Only '.$product->stock.' items is available');
            }

        }else{
            $this->order->products()->attach($product);
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
        $data['status'] = 1;

        $this->order->update($data);

        foreach ($this->order->products as $orderProduct){
            $orderProduct->stock -= $this->getPivotRow($orderProduct)->count;
        }

        $this->order->products->map->save();

        session()->forget('orderId');
    }

    protected function getPivotRow($product)
    {
        return $this->order->products()->where('product_id', $product->id)->first()->pivot;
    }
}
