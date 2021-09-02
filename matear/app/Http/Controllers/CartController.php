<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
       /*  dd($products); */
        return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products]);
    }

    public function cart()
    {
        $cartCollection = \Cart::getContent();
        /* dd($cartCollection); */
        return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }
    public function add(Request$request) {
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request -> slug        
            )
        )
            );
    
          return redirect()->route('cart.index')->with('success_msg','¡Articulo agregado!');
        }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Articulo eliminado!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Carrito actualizado!');
    }
    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Carrito eliminado!');
    }
}
