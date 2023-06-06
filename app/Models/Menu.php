<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    protected $guarded = [];

    public function item()
    {
        return $this->hasOne(MenuItem::class, 'menu_id', 'id');
    }

    public function items()
    {
        return $this->hasMany(MenuItem::class, 'menu_id', 'id');
    }

    public function child(){
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }
}
