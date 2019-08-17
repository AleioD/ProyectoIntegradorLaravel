<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $table = "questions";

    protected $guarded=['id'];


    public function answers()
    {
      return $this->hasMany(Answer::class);
    }


    public function categories()
    {
    return $this->belongsTo(Category::class);
    }

    public function users()
  	{
  		return $this->belongsToMany(User::class);
  	}

    public function getId() {
      return $this->id;
    }




}
