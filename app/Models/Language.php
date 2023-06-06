<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = false;

    public function scopeDefaultLang($query){
        return $query->where('default', 1)->first();
    }

    public function scopeSiteLangs($query){
        return $query->where('active', 1)->get();
    }

    public function scopeAddLangs($query){
        return $query->where('active', 0)->get();
    }

    public function scopeGetAdminLangs($query){
        return $query->where('active', '!=' , 0)->get();
    }
}
