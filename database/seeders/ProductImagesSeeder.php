<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('products/images');
        Storage::makeDirectory('products/images');

        $products = Product::all();

        foreach ($products as $product){

            ProductImages::factory(2)->create(['product_id' => $product->id]);

        }
    }
}
