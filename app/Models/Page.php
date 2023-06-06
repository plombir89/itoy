<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    protected $guarded = [];

    public function item()
    {
        return $this->hasOne(PageData::class, 'page_id', 'id');
    }

    public function items()
    {
        return $this->hasMany(PageData::class, 'page_id', 'id');
    }
}
