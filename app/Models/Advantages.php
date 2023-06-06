<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advantages extends Model
{
    use HasFactory;

    protected $table = 'advantages';

    protected $guarded = [];

    public function item()
    {
        return $this->hasOne(AdvantagesData::class, 'advantage_id', 'id');
    }

    public function items()
    {
        return $this->hasMany(AdvantagesData::class, 'advantage_id', 'id');
    }
}
