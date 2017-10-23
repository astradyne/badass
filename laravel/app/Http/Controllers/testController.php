<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class testController extends Controller
{
    // the homepage of feature tests
    public function index()
    {
        // define navigation in routes
        die('HELLOOOO');
    }

    // blindly create one record in the table 'users'
    public function create()
    {
        // $user = new User();
        // $user->username = '';
        // $user->save();
        die('CREATING PLAYER...');
    }

    public function createGame()
    {

        $game = new Game();
        $game->result_id = 4;
        $game->save();
        die('CREATING GAME...');
    }
}

// i am so lost 