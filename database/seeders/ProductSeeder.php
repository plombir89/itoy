<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCategoryData;
use App\Models\ProductData;
use App\Models\ProductsCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Storage::deleteDirectory('products');
        Storage::makeDirectory('products');

        ProductCategory::factory(2)->create()->each(function ($productcategory){
            foreach (Language::getAdminLangs() as $lang){
                ProductCategoryData::factory()->create([
                    'category_id' => $productcategory->id,
                    'lang' => $lang->id,
                ]);
            }

            Product::factory(3)->create()->each(function($product) use ($productcategory){

                ProductsCategories::create(['product_id' => $product->id, 'category_id' => $productcategory->id]);

                foreach (Language::getAdminLangs() as $lang){
                    ProductData::factory()->create([
                        'product_id' => $product->id,
                        'lang' => $lang->id,
                    ]);
                }
            });
        });
    }
}
