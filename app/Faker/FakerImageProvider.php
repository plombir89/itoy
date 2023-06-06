<?php


namespace App\Faker;


use Faker\Provider\Base;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

final class FakerImageProvider extends Base
{
    public function loremflickr(string $dir = '', int $width = 500, int $height = 500)
    {
        $name = $dir. '/' . md5(uniqid(empty($_SERVER['SERVER_ADDR']) ? '' : $_SERVER['SERVER_ADDR'], true)). '.jpg';

        Storage::put($name, file_get_contents("https://loremflickr.com/$width/$height"));

        return $name;
    }
}
