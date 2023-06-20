<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const ORDER_PENDING = 1;
    const ORDER_CANCELED = 2;
    const ORDER_COMPLETED = 3;

    protected $fillable = ['name', 'phone', 'email', 'city', 'address', 'postal_code', 'status', 'date_added'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function getFullPrice()
    {
        $sum = 0;
        foreach ($this->products as $product){
            $sum += $product->getPriceFrom();
        }
        return $sum;
    }

    public function getSubPrice()
    {
        $sum = 0;
        foreach ($this->products as $product){
            $sum += $product->getUnitPrice();
        }
        return $sum;
    }
}
