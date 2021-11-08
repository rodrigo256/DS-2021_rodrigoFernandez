<?php

namespace App\Http\Controllers;

use App\Models\FavoritesProducts;
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
        //
        /* dd('hola'); */
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
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FavoritesProducts  $favoritesProducts
     * @return \Illuminate\Http\Response
     */
    public function show(FavoritesProducts $favoritesProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FavoritesProducts  $favoritesProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(FavoritesProducts $favoritesProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FavoritesProducts  $favoritesProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FavoritesProducts $favoritesProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FavoritesProducts  $favoritesProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(FavoritesProducts $favoritesProducts)
    {
        //
    }
}
