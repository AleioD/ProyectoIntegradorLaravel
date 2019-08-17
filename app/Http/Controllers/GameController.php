<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function showCategory()
    {
        return view('category');
    }

    public function startGame()
    {
        return view('gameplay');
    }

  
}
