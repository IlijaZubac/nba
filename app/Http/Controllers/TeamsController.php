<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Team;

class TeamsController extends Controller
{
    public function index(){

        $teams = Team::all();
        return view('teams', compact(['teams']));
    }

    public function show($id) {
        $team = Team::find($id);
        return view('team', compact('team'));
    }


}
