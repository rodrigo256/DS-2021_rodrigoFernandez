<?php

namespace App\Http\Controllers;

use App\Models\FavoritesProducts;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop()
    {
        $idUser = Auth()->user()->id;
        $products = Product::all();

        $favorites = FavoritesProducts::where('user_id', $idUser)->get();

        /*  dd($products); */
        return view('shop')->withTitle('MATE-AR | SHOP')->with(['products' => $products, 'favorites' => $favorites]);
    }

    public function cart()
    {
        $cartCollection = \Cart::getContent();
        /* dd($cartCollection); */
        return view('cart')->withTitle('MATE-AR STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }


    
    public function add(Request $request)
    {
        \Cart::add(
            array(
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->img,
                    'slug' => $request->slug
                )
            )
        );

        return redirect()->route('cart.index')->with('success_msg', '¡Articulo agregado!');
    }
    public function remove(Request $request)
    {
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Articulo eliminado!');
    }

    public function update(Request $request)
    {
        \Cart::update(
            $request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
            )
        );
        return redirect()->route('cart.index')->with('success_msg', 'Carrito actualizado!');
    }
    public function clear()
    {
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Carrito eliminado!');
    }
}
