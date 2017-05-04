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

Route::get('/', 'HomeController@index')->name('/');

Route::get('/presentacion', 'HomeController@presentacion')->name('presentacion');

Route::get('/estudios-cientificos', 'HomeController@estudios_cientificos')->name('estudios-cientificos');
/*
Route::get('/productos-online', function () {

    //Primera forma: llamar directamente desde la base de datos
    $products = DB::table('product')->get();

    //Segunda forma: llamar desde el model Eloquent
    // $products = Product::all();
    return view('productos-online', compact('products'));
})->name('productos-online');*/

Route::get('/beneficios', 'HomeController@beneficios')->name('beneficios');

Route::get('/productos-online', 'CartController@index')->name('productos-online');


