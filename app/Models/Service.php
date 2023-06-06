<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $guarded = [];

    public function items()
    {
        return $this->hasMany(ServiceData::class, 'service_id', 'id');
    }

    public function item()
    {
        return $this->hasOne(ServiceData::class, 'service_id', 'id');
    }

}
