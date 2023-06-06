<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $table = 'supports';

    protected $guarded = [];

    protected $casts = [
        'start_date' => 'date'
    ];

    public function get($model, $key, $value, $attributes)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d', $this->attributes['start_date'])->format('d.m.Y');

    }

    public function set($model, $key, $value, $attributes)
    {
        $this->attributes['start_date'] =  \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format('d.m.Y');

    }


}
