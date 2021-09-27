<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $cards = User::find($id)->cards;
       /*  dd($cards); */
        if(!$cards->isEmpty()){
            $cards;
        }
        else{
            $cards =null;
        }
       /*  dd($cards); */
      /*   dd(!empty($cards)); */
       /*  if($cards){
            
            foreach($cards as $card){
                $card;
                $restCard = substr($card['card_number'], -4);
                
            }
        }else{
            $card = null;
            $restCard = null;
        } */
        return view('users.index')->with('cards', $cards);
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
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dateUser = request()->except(['_token', '_method']);

        User::where('id', '=', $id)->update($dateUser);
        return view('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* dd($id); */
        /*  $user = User::find($id); */
        /*   dd($user); */

        /*  $user->delete(); */

        User::destroy($id);

        return redirect()->route('shop')->with('success_msg', 'Su cuenta ha sido eliminada!');
    }
}
