<?php

namespace App\Models;

use App\Models\Traits\DuplicateRows;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategoryData extends Model
{
    use HasFactory, DuplicateRows;

    protected $table = 'product_category_data';

    protected $guarded = [];

    public function language()
    {
        return $this->hasOne(Language::class, 'id', 'lang');
    }

    public function parent()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }

    public function product()
    {
        return $this->hasManyThrough(Product::class, ProductCategory::class, 'id', 'category_id', 'category_id', 'id');
    }
}
