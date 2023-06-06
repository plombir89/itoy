<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $guarded = [];

    public function item()
    {
        return $this->hasOne(NewsData::class, 'news_id', 'id');
    }

    public function items()
    {
        return $this->hasMany(NewsData::class, 'news_id', 'id');
    }

    public function category(){
        return $this->belongsTo(NewsCategoryData::class, 'category_id', 'category_id');
    }

    public function categoryTitle(){
        return $this->belongsTo(NewsCategoryData::class, 'category_id', 'category_id')->where('lang', session('lang'));
    }

    protected $casts = [
        'start_date' => 'date'
    ];

    public function getStartDateAttribute()
    {
        return $this->start_date = Carbon::create($this->attributes['start_date'])->format('d.m.Y');
    }
}
