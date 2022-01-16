<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use Laravel\Fortify\Fortify;

// Route For Guest
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [FoodController::class, 'index'])->name('/');

    Route::post('/', [FoodController::class, 'index']);

    Route::get('/search-results', [FoodController::class, 'search_results'])->name('search_results');

    Route::get('sort-by-category/{slug?}', [FoodController::class, 'sort_by_category'])->name('sort_by_category');

    Route::get("product/{slug?}", [FoodController::class,"show"])->name('show');

    Route::get('/about-us' , [AboutUsController::class, 'index']);

    Route::get('sort-by-price/low', [FoodController::class,"price"])->name('glow');

    Route::get('sort-by-price/high', [FoodController::class,"price"])->name('ghigh');

    Route::get('/menu', [MenuController::class, 'index'])->name("menu");
});
// Route For User already Logged In

Route::get('welcome/account-details', [LoginController::class,'account'])->name('details');

Route::post('welcome/account-details', [LoginController::class,'update_user'])->name('userUpdate');

Route::get('welcome/account-details/edit/{id}', [LoginController::class,'edit'])->name('userEdit');

Route::get('/welcome', [LoginController::class,'welcome'])->name('welcome');

Route::get('welcome/search-results', [LoginController::class, 'search_results'])->name('search_results_');

Route::get('welcome/sort-by-category/{slug?}', [LoginController::class, 'sort_by_category'])->name('sort_by_category');

Route::get("welcome/product/{slug?}", [LoginController::class,"show"])->name('show-user');

Route::get('welcome/menu', [LoginController::class, 'index']);

Route::get('welcome/about-us' , [LoginController::class, 'about']);

Route::get('welcome/sort-by-price/low', [LoginController::class,"price"])->name('low');

Route::get('welcome/sort-by-price/high', [LoginController::class,"price"])->name('high');

Route::get("welcome/product/{slug?}", [LoginController::class,"show"])->name('show-user');

Route::any('welcome/product', [LoginController::class, 'addComment'])->name("addComment");

Route::group(['middleware' => 'auth','verified','admin'], function () {

    Route::get('/shopping-cart', [FoodController::class, 'getCart'])->name('product.shoppingCart');

    Route::get('/add-to-cart/{id}', [FoodController::class, 'getAddToCart'])->name('product.addToCart');

    Route::get('/checkout', [LoginController::class, 'getCheckout'])->name('checkout');

    Route::post('/checkout', [LoginController::class, 'postCheckout'])->name('checkout');

    Route::get('welcome/menu', [LoginController::class, 'index'])->name("user-menu");

    Route::get('/reduce/{id}', [LoginController::class, 'getReduceByOne'])->name('product.reduceByOne');

    Route::get('/increase/{id}', [LoginController::class, 'getincreaseByOne'])->name('product.increaseByOne');

    Route::get('/remove/{id}', [LoginController::class, 'getRemoveItem'])->name('product.remove');

    Route::get('welcome/menu', [LoginController::class, 'index'])->name("user-menu");


    Route::get('/admin', [AdminController::class, 'index'])->name("index");

    Route::get('/admin/post', [AdminController::class, 'getPost'])->name("post");

    Route::post('/admin/post', [AdminController::class, 'post'])->name("post");

    Route::get('/admin/edit/{id}',[AdminController::class, 'edit'])->name("edit");

    Route::post('/admin/update',[AdminController::class, 'update']);

    Route::get('/admin/orders', [AdminController::class, 'orders'])->name("orders");

    Route::get('/admin/items', [AdminController::class, 'items'])->name("items");

    Route::get('/admin/destroy/{id}', [AdminController::class, 'destroy'])->name("destroy");
});

