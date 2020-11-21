<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
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

Route::get('/', 'HomeController@index')->name('home');
Route::get('skin/{id}', 'SkinController@show')->name('site.skin');
Route::get('/skins', 'SkinController@index')->name('skin.index');
Route::get('/skins-new', 'SkinController@create')->name('site.create');
Route::get('/skin-edit','SkinController@edit')->name('skin.edit');
Route::post('/skin-store','SkinController@store')->name('skin.store');
Route::get('/skin-delete','SkinController@destroy')->name('skin.destroy');



Route::post('cart-add', 'CartController@add')->name('cart.add');
Route::get('cart-checkout', 'CartController@cart')->name('site.cart-checkout');
Route::get('cart-checkout', 'CartController@cart')->name('site.cart-checkout');
Route::post('cart-clear', 'CartController@clear')->name('cart.clear');
Route::post('cart-removeitem', 'CartController@removeitem')->name('cart.removeitem');
Route::get('cart-paymentPicPay', 'CartController@paymentPicPay')->name('cart.paymentPicPay');
Route::get('cart-paymentTransfer', 'CartController@paymentTransfer')->name('cart.paymentTransfer');

Route::resource('faq', 'FaqController');

Auth::routes();






