<?php

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

Use App\Product;

Route::get('/', 'HomeController@index');

Route::get('/cart', function () {
    //Primera forma: llamar directamente desde la base de datos
    //$products = DB::table('product')->get();

    //Segunda forma: llamar desde el model Eloquent
    $products = Product::all();

    return view('welcome', compact('products'));
});
