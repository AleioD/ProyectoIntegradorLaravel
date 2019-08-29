<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\Question;
use App\Answer;
use App\Round;
use App\User;
use Auth;

class GameController extends Controller
{

  private $score = 0;

    public function showCategory()
    {
        return view('category');
    }

    public function startGame()
    {
      $puntos = $this->score;
      $question = Question::inRandomOrder()->first();
      $id = $question->getId();
      $answers = Answer::inRandomOrder()->where('question_id', $id)->get();
      return view('gameplay', compact('question', 'id', 'answers', 'puntos'));
    }

    public function select(Request $form) {
      $puntos = $this->score;
      $categoryName = $form['selectedCategory'];
      if ($categoryName == 'Sin Categoria') {
        $puntos = $this->score;
        $question = Question::inRandomOrder()->first();
        $id = $question->getId();
        $answers = Answer::inRandomOrder()->where('question_id', $id)->get();
        return view('gameplay', compact('question', 'id', 'answers', 'puntos'));
      } else {
        $category = Category::where('name', $categoryName)->first();
        $idCat = $category->getId();
        $question = Question::where('category_id', $idCat)->inRandomOrder()->first();
        $id = $question->getId();
        $answers = Answer::inRandomOrder()->where('question_id', $id)->get();
        return view('gameplay', compact('question', 'id', 'answers', 'puntos', 'categoryName'));
      }
    }

    public function saveGame(Request $form){
      //dd($form->columnaAguardar);
      if (Auth::user() == null) {
        return redirect('register');
      }

      $usuario = User::find(Auth::user()->id);
      $puntosPartida = $form->columnaAguardar;
      $puntosFinal = $puntosPartida + $usuario->score;
      Round::insert([
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'user_id' => Auth::user()->id,
        'score' => $puntosPartida,
      ]);

      DB::table('users')->where('id', Auth::user()->id)->update(['score' => $puntosFinal]);
      return redirect('/ranking');
    }



}
