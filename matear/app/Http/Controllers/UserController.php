<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use File;
use Response;
use View;

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
        //return view('users.index');
        return redirect()->route('user.index')->with('success_msg', 'Su datos han sido actualizado!');
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

        $user = User::findOrFail($idUser);

        $cards =  $this->cardMap($idUser);

        $dateUserJSON = $this->assembleAnJson($cards, $user);

        $data = json_encode($dateUserJSON);

        $jsongFile = time() . '_file.json';


        /* dd(file(public_path('/upload/json'))); */

        if(file_exists(public_path('/upload/json'))){
            /* unlink(public_path('/upload/json')); */
            /*  File::deleteDirectory(public_path('/upload/json')) ; */
        
        }else{

        };

        File::put(public_path('/upload/json/'.$jsongFile), $data);

        return Response::download(public_path('/upload/json/'.$jsongFile));
    }

    public function cardMap($idUser)
    {
        $cards = User::find($idUser)->cards;

        $cards = $cards->map(function ($item) {
            return collect([
                'id' => $item->id,
                'card_name' => $item->card_name,
                'card_number' => $item->card_number,
                'card_expiry' => $item->card_expiry,
                'card_cvc' => $item->card_cvc,
            ]);
        });
        
        return $cards;
    }

    public function assembleAnJson($cards, $user)
    {
        $dateUser = [
            'id' => $user['id'],
            'name' => $user['name'],
            'surname' => $user['surname'],
            'dni' => $user['dni'],
            'address' => $user['address'],
            'email' => $user['email'],
            'card_user' => $cards
        ];

        return $dateUser;
    }
}
