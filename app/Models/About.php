<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';

    protected $guarded = [];

    public function item()
    {
        return $this->hasOne(AboutData::class, 'about_id', 'id');
    }

    public function items()
    {
        return $this->hasMany(AboutData::class, 'about_id', 'id');
    }
}
