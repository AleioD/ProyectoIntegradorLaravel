<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
  protected $guarded=['id'];


  public function questions()
  {
    return $this->hasMany(Question::class);
  }



}
