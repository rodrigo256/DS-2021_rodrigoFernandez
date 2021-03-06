<?php

namespace App\Http\Controllers;

use App\Models\FavoritesProducts;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\map;

class CartController extends Controller
{
    public function shop()
    { 

        $products = Product::all();

        if(!Auth::guest()){
            $idUser = Auth()->user()->id;

        $favorites = FavoritesProducts::where('user_id', $idUser)->get();

        $products->map(function ($product) use ($favorites, $idUser) {

            $foundedFavorite = false;

            foreach ($favorites as $favorite) {
                if ($product['id'] === $favorite['product_id']) {
                    if ($idUser === $favorite['user_id']) {
                        $foundedFavorite = true;
                    }
                }
            };

            $product['favorite'] = $foundedFavorite;

            return $product;
        });
        }

      
        return view('shop')->withTitle('MATE-AR | SHOP')->with(['products' => $products]);
    }

    public function cart()
    {
        $cartCollection = \Cart::getContent();
      
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
