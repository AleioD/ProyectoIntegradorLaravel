<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function directory()
    {
        return view('profile');
    }

    public function show ($id)
  	{
  		$user = User::find($id);
  		return view('profile-show', compact('user'));
  	}

    public function showRanking(){
      $topScorers = DB::table('users')
                    ->select('username', 'name', 'surname', 'score','avatar')
                    ->orderBy('score', 'desc')
                    ->limit('5')
                    ->get();


      return view('ranking', compact('topScorers'));
    }

    public function showRounds(){

      if (Auth::user() == null) {
        return redirect('register');
      }

      $roundsByUser = DB::table('rounds')
                    ->select('user_id', 'score', 'created_at')
                    ->where('user_id', Auth::user()->id)
                    ->orderBy('created_at', 'desc')
                    ->get();

      return view('rounds-show', compact('roundsByUser'));

  }

}
