<?php


namespace App\Models\Traits;


use App\Models\Language;

trait DuplicateRows
{
    public static function duplicateRow($lang)
    {
        $default = Language::defaultLang()->id;

        $new = static::where('lang', $default)->get();

        foreach ($new as $item){
            $newItem = $item->replicate();

            $newItem->lang = $lang;

            $newItem->save();
        }
    }

    public static function rowRemove($lang)
    {
        static::where('lang', $lang)->delete();
    }
}
