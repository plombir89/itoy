<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $table = 'slides';

    protected $guarded = [];

    public function link()
    {
        return $this->hasOne(SlideLinks::class, 'slide_id', 'id');
    }

    public function links()
    {
        return $this->hasMany(SlideLinks::class, 'slide_id', 'id');
    }
}
