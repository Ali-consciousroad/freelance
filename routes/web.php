<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::redirect('/','/home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Cart controller with the add method
// Use the id of a product as placeholder 
Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add');
