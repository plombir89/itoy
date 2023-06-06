<?php


namespace App\Services;


use App\Models\Currency;

class CurrencyConversion
{

    protected static $container;

    public static function loadContainer()
    {
        if(is_null(self::$container)){
            $currencies = Currency::get();

            foreach ($currencies as $curency){
                self::$container[$curency->code] = $curency;
            }
        }
    }

    public static function convert($sum, $originCurrencyCode, $targetCurrencyCode)
    {
        self::loadContainer();

        $originCurrencyCode = self::$container[$originCurrencyCode];
        $targetCurrencyCode = self::$container[$targetCurrencyCode];

        return $sum * $originCurrencyCode->rate / $targetCurrencyCode->rate;

    }
}
