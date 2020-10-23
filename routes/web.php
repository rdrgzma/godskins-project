<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\SkinController;
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

Route::get('/', 'SkinController@index')->name('home');
Route::get('skin/{id}', 'SkinController@show')->name('site.skin');

Route::post('cart-add', 'CartController@add')->name('cart.add');
Route::get('cart-checkout', 'CartController@cart')->name('site.cart-checkout');
Route::get('cart-checkout', 'CartController@cart')->name('site.cart-checkout');
Route::post('cart-clear', 'CartController@clear')->name('cart.clear');
Route::post('cart-removeitem', 'CartController@removeitem')->name('cart.removeitem');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('auth-home');
