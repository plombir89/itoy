<?php

namespace App\Providers;

use App\Faker\FakerImageProvider;
use App\Models\Contacts;
use App\Models\ContactsData;
use App\Models\Copyright;
use App\Models\HomePageSeoData;
use App\Models\Language;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Scripts;
use App\Models\Social;
use App\Models\Support;
use App\Services\Basket;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Generator::class, function(){
            $faker = Factory::create();
            $faker->addProvider(new FakerImageProvider($faker));
            return $faker;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.*', function () {
            View::share('adminlanguages', Language::getAdminLangs());
        });

        view()->composer('front.blocks.new-products', function (){

            View::share('newProducts', Product::with(['item' => function($query){
                    $query->where('lang', session('lang'));
                }])->where('published', 1)->take(3)->latest()->get()
            );
        });

        view()->composer('front.layouts.main', function ()
        {
            View::share('categories',  ProductCategory::whereNull('parent_id')->whereHas('products',function($query){
                    $query->where('published', 1);
                })->withCount('products')->with(['item' => function($query){
                    $query->select(['title', 'category_id'])->where(['lang' => session('lang')]);
                }])->with('childs')->get()
            );

            View::share('order', (new Basket())->getOrder());

            View::share('header_scripts', Scripts::first()->head_scripts);
            View::share('footer_scripts', Scripts::first()->footer_scripts);

            View::share('favicon', Support::first()->favicon);

            View::share('phone', Contacts::first()->phone);

            View::share('email', Contacts::first()->email);

            View::share('menu', Menu::with(['item' => function($query){
                $query->where('lang', session('lang'));
            }])->where('published', 1)->orderBy('order', 'ASC')->get());

            View::share('homeSeo', HomePageSeoData::where('lang', session('lang'))->first());

            View::share('socials', Social::where('published', 1)->get());

            View::share('copyright', Copyright::first());

            View::share('address', ContactsData::select('address')->where('lang', session('lang') ?? Language::defaultLang()->id)->first()->address);

            View::share('footer_links_1', Page::where('bottom', 1)->where('column', 1)->with(['item' => function($query){
                $query->where('lang', session('lang'));
            }])->orderBy('order', 'ASC')->get());

            View::share('footer_links_2', Page::where('bottom', 1)->where('column', 2)->with(['item' => function($query){
                $query->where('lang', session('lang'));
            }])->orderBy('order', 'ASC')->get());

            View::share('footer_links_3', Page::where('bottom', 1)->where('column', 3)->with(['item' => function($query){
                $query->where('lang', session('lang'));
            }])->orderBy('order', 'ASC')->get());

            View::share('footer_links_4', Page::where('bottom', 1)->where('column', 4)->with(['item' => function($query){
                $query->where('lang', session('lang'));
            }])->orderBy('order', 'ASC')->get());


        });

        Paginator::useBootstrapFive();
    }
}
