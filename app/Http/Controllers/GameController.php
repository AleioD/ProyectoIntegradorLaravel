<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

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

    public function saveScore(Request $form) {
      //dd($form);
      $pp = $form['score'];
      $puntos = $this->score;
      $this->score = $puntos + $pp;
      return redirect('game');
    }



}
