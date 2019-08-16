<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Question;
use App\Answer;
use Auth;

class QuestionsController extends Controller
{
  public function add(){

    // if (Auth::user() == null) {
    //   return redirect('index');
    // }

    $categories = Category::orderBy('name')->get();

    return view('questionAdminForm', compact('categories'));
  }

  public function store(Request $request){
    // Validación
    $request->validate([
      'question' => 'required | string',
      'correctAnswer' => 'required | string',
      'answer' => 'required | string',
      'answer_1' => 'required | string',
      'answer_2' => 'required | string',
      'category_id' => 'required'
    ], [
      'required' => 'El campo es obligatorio',
      'string' => 'El campo debe ser de tipo texto',
    ]);

    //creación pregunta
    $question = Question::create([
      'question' => $request['question'],
      'category_id' => $request['category_id'],
    ]);

    $question_id = $question->id;

    //creacion respuesta correcta
    Answer::create([
      'answer' => $request['correctAnswer'],
      'question_id' => $question_id,
      'isCorrect' => 1,
    ]);

    //creación respustas incorrectas
    Answer::create([
      'answer' => $request['answer'],
      'question_id' => $question_id,
      'isCorrect' => 0,
    ]);

    Answer::create([
      'answer' => $request['answer_1'],
      'question_id' => $question_id,
      'isCorrect' => 0,
    ]);

    Answer::create([
      'answer' => $request['answer_2'],
      'question_id' => $question_id,
      'isCorrect' => 0,
    ]);



    return redirect('/questionAdminForm');
  }
}
