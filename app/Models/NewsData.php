<?php

namespace App\Models;

use App\Models\Traits\DuplicateRows;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsData extends Model
{
    use HasFactory, DuplicateRows;

    protected $table = 'news_data';

    protected $guarded = [];

    public function news()
    {
        return $this->belongsTo(News::class);
    }

    public function language()
    {
        return $this->hasOne(Language::class, 'id', 'lang');
    }
}
