<?php

namespace App\Models;

use App\Models\Traits\DuplicateRows;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageData extends Model
{
    protected $table = 'page_data';

    protected $guarded = [];

    use HasFactory, DuplicateRows;

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function language()
    {
        return $this->hasOne(Language::class, 'id', 'lang');
    }
}
