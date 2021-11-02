<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idUser = Auth()->user()->id;

       /*  $user = User::findOrFail($idUser); */

        $cartCollection = \Cart::getContent();

        $shopData = [];


        foreach($cartCollection as $product){

            $productJson['product'] = json_encode($product);

            $productJson['user_id'] = $idUser;
        
            array_push($shopData, $productJson);

        };

        Shop::insert($shopData);

        \Cart::clear();

        $shopDataFromDB =  User::find($idUser)->shops;


        return view('shop.index')->with(['shopCollection' => $shopDataFromDB]);

       /* $jsonData = file_get_contents("jsonProductosTeamCinco.json", true);

       $data = json_decode($jsonData);
       
        foreach($data as $da){
            dd($da->Imagen);
        }

       dd($data);

       return view('shop.index')->with(['shopCollection' => $data]); */

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
