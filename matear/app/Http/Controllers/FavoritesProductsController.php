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

        dd($products = Product::all());

        
        return view('shop.favourite-products');
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
