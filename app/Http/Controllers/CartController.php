<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Product;
use Cart;

class CartController extends Controller
{
    public function index(){
        //Cart::add('293ad', 'Product 1', 1, 9.99);
        //dd(Cart::content());
        //dd(Cart);
        $products = Product::all();
        return view('sections.cart.productos-online', ['products' => $products]);
    }
}
