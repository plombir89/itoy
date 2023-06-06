<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $guarded = [];

    public function item()
    {
        return $this->hasOne(ContactsData::class, 'contact_id', 'id');
    }

    public function items()
    {
        return $this->hasMany(ContactsData::class, 'contact_id', 'id');
    }
}
