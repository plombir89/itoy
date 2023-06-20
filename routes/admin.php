<?php

use App\Models\News;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['auth','isAdmin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('user', [\App\Http\Controllers\Admin\User\UserController::class, 'index'])->name('user');

    Route::post('uploadimage/{store_path}', [\App\Http\Controllers\Admin\SummernoteUploadImageController::class, 'upload']);

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('index');

    Route::group(['prefix' => 'information', 'as' => 'information.'], function(){

        Route::get('seo', [\App\Http\Controllers\Admin\Information\SeoController::class, 'index'])->name('seo');

        Route::get('activity', function () {
            return view('admin.information.activity');
        })->name('activity');

    });

    Route::group(['prefix' => 'pages', 'as' => 'pages.'], function(){

        Route::group(['prefix' => 'page', 'as' => 'page.'], function(){
            Route::get('/', [\App\Http\Controllers\Admin\Pages\Page\IndexController::class, 'index'])->name('index');
            Route::get('create', [\App\Http\Controllers\Admin\Pages\Page\IndexController::class, 'create'])->name('create');
            Route::get('{page}/edit', [\App\Http\Controllers\Admin\Pages\Page\IndexController::class, 'edit'])->name('edit');
            Route::post('get_json', [\App\Http\Controllers\Admin\Pages\Page\IndexController::class, 'get_json'])->name('get_json');
        });

        Route::get('contacts', [\App\Http\Controllers\Admin\Pages\Contacts::class, 'index'])->name('contacts');

        Route::get('about', [\App\Http\Controllers\Admin\Pages\About::class, 'index'])->name('about');

    });

    Route::group(['prefix' => 'content', 'as' => 'content.'], function(){

        Route::group(['prefix' => 'news', 'as' => 'news.'], function(){
            Route::get('/', [\App\Http\Controllers\Admin\Content\News\NewsController::class, 'index'])->name('index');
            Route::get('create', [\App\Http\Controllers\Admin\Content\News\NewsController::class, 'create'])->name('create');
            Route::get('{news}/edit', [\App\Http\Controllers\Admin\Content\News\NewsController::class, 'edit'])->name('edit');
            Route::post('get_json', [\App\Http\Controllers\Admin\Content\News\NewsController::class, 'get_json'])->name('get_json');


            Route::group(['prefix' => 'category', 'as' => 'category.'], function(){
                Route::get('/', [\App\Http\Controllers\Admin\Content\News\CategoryController::class, 'index'])->name('index');
                Route::get('create', [\App\Http\Controllers\Admin\Content\News\CategoryController::class, 'create'])->name('create');
                Route::get('{category}/edit', [\App\Http\Controllers\Admin\Content\News\CategoryController::class, 'edit'])->name('edit');
                Route::post('get_json', [\App\Http\Controllers\Admin\Content\News\CategoryController::class, 'get_json'])->name('get_json');
            });
        });

        Route::group(['prefix' => 'services', 'as' => 'services.'], function(){
            Route::get('/', [\App\Http\Controllers\Admin\Content\Services\ServicesController::class, 'index'])->name('index');
            Route::get('create', [\App\Http\Controllers\Admin\Content\Services\ServicesController::class, 'create'])->name('create');
            Route::get('{services}/edit', [\App\Http\Controllers\Admin\Content\Services\ServicesController::class, 'edit'])->name('edit');
            Route::post('get_json', [\App\Http\Controllers\Admin\Content\Services\ServicesController::class, 'get_json'])->name('get_json');
        });

        Route::group(['prefix' => 'products', 'as' => 'products.'], function(){
            Route::get('/', [\App\Http\Controllers\Admin\Content\Products\IndexController::class, 'index'])->name('index');
            Route::get('create', [\App\Http\Controllers\Admin\Content\Products\IndexController::class, 'create'])->name('create');
            Route::get('{product}/edit', [\App\Http\Controllers\Admin\Content\Products\IndexController::class, 'edit'])->name('edit');
            Route::post('get_json', [\App\Http\Controllers\Admin\Content\Products\IndexController::class, 'get_json'])->name('get_json');

            Route::post('upload/{products}', [\App\Http\Controllers\Admin\Content\Products\IndexController::class, 'upload'])->name('upload');

            Route::group(['prefix' => 'category', 'as' => 'category.'], function(){
                Route::get('/', [\App\Http\Controllers\Admin\Content\Products\CategoryController::class, 'index'])->name('index');
                Route::get('create', [\App\Http\Controllers\Admin\Content\Products\CategoryController::class, 'create'])->name('create');
                Route::get('{category}/edit', [\App\Http\Controllers\Admin\Content\Products\CategoryController::class, 'edit'])->name('edit');
                Route::post('get_json', [\App\Http\Controllers\Admin\Content\Products\CategoryController::class, 'get_json'])->name('get_json');
            });

        });
    });

    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function(){

        Route::resource('menu', \App\Http\Controllers\Admin\Settings\Menu\MenuController::class)->except(['show','destroy']);

        Route::post('menu/sort', [\App\Http\Controllers\Admin\Settings\Menu\SortMenuController::class, 'index'])->name('menu.sort');

        Route::get('site', [\App\Http\Controllers\Admin\Settings\SiteController::class, 'index'])->name('site');
        Route::get('socials', [\App\Http\Controllers\Admin\Settings\SocialController::class, 'index'])->name('socials');
        Route::get('languages', [\App\Http\Controllers\Admin\Settings\LanguageControler::class, 'index'])->name('languages');
    });

    Route::group(['prefix' => 'utilities', 'as' => 'utilities.'], function(){

        Route::get('slider', function () {
            return view('admin.utilities.slide-index');
        })->name('slider');

    });
});
