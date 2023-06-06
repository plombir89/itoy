<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsLocations extends Model
{
    use HasFactory;

    protected $table = 'contacts_locations';

    protected $guarded = [];

    public function item()
    {
        return $this->hasOne(ContactsLocationsData::class, 'location_id', 'id');
    }

    public function items()
    {
        return $this->hasMany(ContactsLocationsData::class, 'location_id', 'id');
    }
}
