<?php

namespace App\Http\Controllers;

use App\Models\FavoritesProducts;
use App\Models\Product;
use Exception;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class FavoritesProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $idUser = Auth()->user()->id;

        $products = Product::all();

        $favorites = FavoritesProducts::where('user_id', $idUser)->get();
      
        $products->map(function ($product) use ($favorites, $idUser) {

            $foundedFavorite = false;
            $foundedFavoriteId = null;

            foreach ($favorites as $favorite) {
                if ($product['id'] === $favorite['product_id']) {
                    if ($idUser === $favorite['user_id']) {
                        $foundedFavorite = true;
                        $foundedFavoriteId = $favorite['id'];
                    }
                }
            };

            $product['favorite'] = $foundedFavorite;
            $product['favoriteId'] = $foundedFavoriteId;

            return $product;
        });

        return view('shop.favourite-products')->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function destroy($id)
    {
        FavoritesProducts::destroy($id);

        return redirect()->route('favorite.index')->with('success_msg', 'Listo, ha eliminado un producto favorito!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $idUser = Auth()->user()->id;
            $idProduct = $request['id'];

            $dataFavorite['user_id'] = $idUser;
            $dataFavorite['product_id'] = $idProduct;

            $favorite = FavoritesProducts::where('user_id', $idUser)
                ->where('product_id', $idProduct)
                ->first();

            $status = '';

            if (is_null($favorite)) {
                FavoritesProducts::insert($dataFavorite);
                $status = 'created';
            } else {
                $favorite->delete();
                $status = 'deleted';
            }

            return Response()->json(['status' => $status]);
        } catch (Exception $e) {

            return Response()->json(false);
        }
    }
}
