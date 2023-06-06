<?php

namespace App\Models;

use App\Models\Traits\DuplicateRows;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsLocationsData extends Model
{
    use HasFactory, DuplicateRows;

    protected $table = 'contacts_locations_data';

    protected $guarded = [];

    public function language()
    {
        return $this->hasOne(Language::class, 'id', 'lang');
    }
}
