<?php

namespace App\Models;

use App\Models\Traits\DuplicateRows;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductData extends Model
{
    use HasFactory, DuplicateRows;

    protected $table = 'product_data';

    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function language()
    {
        return $this->hasOne(Language::class, 'id', 'lang');
    }
}
