<?php

namespace App\Models;

use App\Models\Traits\DuplicateRows;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsData extends Model
{
    use HasFactory, DuplicateRows;

    protected $table = 'contacts_data';

    protected $guarded = [];

    public function language()
    {
        return $this->hasOne(Language::class, 'id', 'lang');
    }


}
