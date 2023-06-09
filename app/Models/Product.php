<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';

    protected $guarded = [];

    public function items()
    {
        return $this->hasMany(ProductData::class, 'product_id', 'id');
    }

    public function item()
    {
        return $this->hasOne(ProductData::class, 'product_id', 'id');
    }

    public function category(){
        return $this->belongsToMany(ProductCategory::class, 'products_categories', 'product_id','category_id', 'id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImages::class, 'product_id', 'id');
    }

//    public function price(): Attribute
//    {
//        return Attribute::make(
//            get: fn (string $value, array $attributes) => $attributes['discount'] > 0 ? $attributes['discount'] : $value
//        );
//    }
//    public function discount(): Attribute
//    {
//        return Attribute::make(
//            get: fn (string $value, array $attributes) => $value == 0 ? $value : $attributes['price']
//        );
//    }
    public function getPriceAttribute($value)
    {
        return $this->attributes['discount'] > 0 ? $this->attributes['discount'] : $value;
    }

    public function getDiscountAttribute($value)
    {
        return $value == 0 ? $value : $this->attributes['price'];
    }


    public function getPriceFrom()
    {
        if (!is_null($this->pivot->count)) {
            return $this->pivot->count * $this->price;
        }

        return $this->price;
    }

    public function getUnitPrice()
    {
        return $this->price;
    }

    public function isAvailable(){
        return $this->stock > 0;
    }

    public function scopeFeatured(Builder $query): void
    {
        $query->where(['featured' => 1, 'published' => 1]);
    }

    public function scopeSpecial(Builder $query): void
    {
        $query->where(['special' => 1, 'published' => 1]);
    }
}
