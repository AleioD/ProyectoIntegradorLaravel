<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

  public $table = "answers";
  
  protected $guarded=['id'];



  public function questions()
  {
  return $this->belongsTo(Question::class);
  }


}
