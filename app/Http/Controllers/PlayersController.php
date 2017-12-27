<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index(){

        $player = Player::all();
        return view('players', compact(['player']));
    }

    public function show($id) {
        $player = Player::find($id);
        return view('players', compact('player'));
    }
}
