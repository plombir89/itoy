<?php

namespace App\Models;

use App\Models\Traits\DuplicateRows;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory, DuplicateRows;

    protected $table = 'menu_items';

    protected $guarded = [];

    public function language()
    {
        return $this->hasOne(Language::class, 'id', 'lang');
    }
}
