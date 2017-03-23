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

Route::get('/', function () {

    //Primera forma: llamar directamente desde la base de datos
    //$products = DB::table('product')->get();

    //Segunda forma: llamar desde el model Eloquent
    $products = App\Product::all();

    return view('welcome', compact('products'));

});
