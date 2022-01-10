<?php

use App\Http\Controllers\page\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/locale/{locale}', function ($locale) {
    session()->put('locale',$locale);
    return Redirect::back();
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu-machupicchu', [HomeController::class, 'menuMapi'])->name('menuMapi');
Route::get('/menu-carpedien', [HomeController::class, 'menuCarpe'])->name('menuCarpe');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/reservations', [HomeController::class, 'reservations'])->name('reservations');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{url', [HomeController::class, 'blog_detail'])->name('blog_detail');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/shop/{url}', [HomeController::class, 'shop_detail'])->name('shop_detail');
Route::get('/card', [HomeController::class, 'card'])->name('card');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::post('/order', [HomeController::class, 'order'])->name('order');

Route::get('/store/add-to-cart', [HomeController::class, 'addToCart']);
Route::get('/store/update-to-cart', [HomeController::class, 'updateToCard']);
Route::get('/store/delete-to-cart', [HomeController::class, 'deleteToCard']);
