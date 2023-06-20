<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    protected $guarded = [];

    public function items()
    {
        return $this->hasMany(ProductCategoryData::class, 'category_id', 'id')->whereNull('parent_id');
    }

    public function admin_items()
    {
        return $this->hasMany(ProductCategoryData::class, 'category_id', 'id');
    }

    public function admin_childs() {
        return $this->hasMany(ProductCategory::class,'parent_id','id');
    }

    public function childs() {
        return $this->hasMany(ProductCategory::class,'parent_id','id')->whereHas('products',function($query){
            $query->where('published', 1);
        })->withCount('products');
    }

    public function item()
    {
        return $this->hasOne(ProductCategoryData::class, 'category_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_categories', 'category_id','product_id', 'id', 'id');
        //return $this->hasManyThrough(Product::class, ProductsCategories::class);
    }
}
