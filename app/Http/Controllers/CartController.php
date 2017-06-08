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

    public function getProductFromCode($code) {
        //usar eloquent
        $products = Product::where('code', $code)->first();

    }

    public function addProductToCart(Request $request) {
      //  return response()->json($products);
        $product = Product::where('code', $request->code)->first();

        Cart::add($request->code, $product['title'], $request->quantity ,
            $product['price'], ['image' => $product['image']]);

    }

    public function getCart() {
        return  ['cart'=>Cart::content(),
                 'total'=>Cart::subtotal(),
                 'count'=>Cart::count()];
    }

    public function deleteProduct(Request $request){
        Cart::remove($request->rowId);

    }



}
