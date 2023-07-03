<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Http\Request;
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

Auth::routes();

Route::group(['middleware' => ['auth','checklocale'], 'prefix' => 'account'], function(){
    Route::get('/', [App\Http\Controllers\Account\IndexController::class, 'index'])->name('account.index');
    Route::get('edit', [App\Http\Controllers\Account\EditController::class, 'index'])->name('account.edit');
    Route::patch('update', [App\Http\Controllers\Account\EditController::class, 'update'])->name('account.update');

    Route::get('password', [App\Http\Controllers\Account\PasswordController::class, 'index'])->name('account.password');
    Route::patch('password', [App\Http\Controllers\Account\PasswordController::class, 'update'])->name('account.password.update');

    Route::get('address', [App\Http\Controllers\Account\AddressController::class, 'index'])->name('account.address');
    Route::get('address/add', [App\Http\Controllers\Account\AddressController::class, 'add'])->name('account.address.add');
    Route::post('address/store', [App\Http\Controllers\Account\AddressController::class, 'store'])->name('account.address.store');
    Route::get('address/edit/{delivery}', [App\Http\Controllers\Account\AddressController::class, 'edit'])->name('account.address.edit');
    Route::patch('address/update/{delivery}', [App\Http\Controllers\Account\AddressController::class, 'update'])->name('account.address.update');

    Route::get('address/delete/{delivery}', [App\Http\Controllers\Account\AddressController::class, 'delete'])->name('account.address.delete');

    Route::get('wishlist', [App\Http\Controllers\Account\WhishlistController::class, 'index'])->name('account.wishlist');
    Route::get('wishlist/remove/{product}', [App\Http\Controllers\Account\WhishlistController::class, 'remove'])->name('account.wishlist.remove');

    Route::get('orders', [App\Http\Controllers\Account\OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/{order}', [App\Http\Controllers\Account\OrderController::class, 'show'])->name('orders.show');

});

Route::post('wishlist/add/{product}', [App\Http\Controllers\Account\WhishlistController::class, 'add'])->name('account.wishlist.add')->middleware(['checklocale']);

Route::post('product/review', [App\Http\Controllers\ProductsController::class, 'rating_store'])->name('product.review.store')->middleware(['checklocale']);


Route::match(['GET', 'POST'], '/add/{product}', [BasketController::class, 'add'])->name('basket.add')->middleware(['checklocale']);

Route::get('/cart/info', [BasketController::class, 'cartInfo'])->name('cart.info')->middleware(['checklocale']);

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout')->middleware(['basket_not_empty','checklocale']);
Route::get('/search', [\App\Http\Controllers\SearchController::class, 'index'])->name('search');

Route::group(['middleware' => ['basket_not_empty','checklocale'],'prefix' => 'cart'], function(){
    Route::get('/', [BasketController::class, 'basket'])->name('basket');
    Route::get('/place', [BasketController::class, 'basketPlace'])->name('basket.place');
    Route::post('/remove/{product}', [BasketController::class, 'remove'])->name('basket.remove');
    Route::post('/delete/{product}', [BasketController::class, 'delete'])->name('basket.delete');
    Route::post('/confirm', [BasketController::class, 'confirm'])->name('basket.confirm');

});


Route::prefix('{locale}')->middleware('checklocale')->group(function (){

    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

//    Route::group(['prefix' => 'products'], function(){
//        Route::get('/', [\App\Http\Controllers\ProductsController::class, 'index'])->name('product.index');
//        Route::get('{id}', [\App\Http\Controllers\ProductsController::class, 'show'])->name('product.show');
//    });

    Route::group(['prefix' => 'products'], function(){
        Route::get('/', [\App\Http\Controllers\ProductsController::class, 'index'])->name('product.index');
        Route::get('{data:slug}', [\App\Http\Controllers\ProductsController::class, 'show'])->name('product.show');
    });

//
//    Route::group(['prefix' => 'services'], function(){
//        Route::get('/', [\App\Http\Controllers\ServicesController::class, 'index'])->name('services.index');
//        Route::get('{data:slug}', [\App\Http\Controllers\ServicesController::class, 'show'])->name('services.show');
//    });
//
    Route::group(['prefix' => 'blog'], function(){
        Route::get('/', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
        Route::get('{slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
    });

    Route::get('about', [\App\Http\Controllers\AboutController::class,'index'])->name('about');

    Route::group(['prefix' => 'page'], function(){
        Route::get('{slug}', [\App\Http\Controllers\PageController::class, 'show'])->name('page.show');
    });

    Route::get('contacts', [\App\Http\Controllers\ContactsController::class,'index'])->name('contacts');

});


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->middleware('checklocale')->name('home');

Route::get('/lang/{prefix}', [\App\Http\Controllers\LanguageController::class, 'index'])->name('change.lang');
