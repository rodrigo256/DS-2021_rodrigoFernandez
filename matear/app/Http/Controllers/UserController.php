<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idUser = Auth()->user()->id;
        $user = User::findOrFail($idUser);

        $cards = User::find($idUser)->cards;

        if (!$cards->isEmpty()) {
            $cards;
        } else {
            $cards = null;
        }
        return view('users.index')->with('cards', $cards)->with('user', $user);
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
        User::destroy($id);

        return redirect()->route('shop')->with('success_msg', 'Su cuenta ha sido eliminada!');
    }

    public function downloadJSON()
    {
        $idUser = Auth()->user()->id;
        $card = User::find($idUser)->cards;
       
        $user = User::findOrFail($idUser);
        /* dd($card[0]['card_name']); */
        $dateUser = [
            'name' => $user['name'],
            'surname' => $user['surname'],
            'dni' => $user['dni'],
            'address' => $user['address'],
            'email' => $user['email'],
            /* 'cardname' => $card['card_name'],
            'cardnumber' => $card['card_number'],
            'cardexpiry' => $card['card_expiry'],
            'cardcvc' => $card['card_cvc'], */
            'card_user' => $card

        ];
        
        return json_encode($dateUser);
    }
}
