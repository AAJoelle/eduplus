<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
      public function level()
   {
     //each course belongsTo a Level
       return $this->belongsTo('App\Level');
   }

     public function department()
    {
      //each course belongsTo a department
        return $this->belongsTo('App\Department');
    }

      public function faculty()
     {
       //each course belongsTo a faculty
         return $this->belongsTo('App\Faculty');
     }

     public function posts()
    {
      //each course hasMany posts
        return $this->hasMany('App\Post');
    }
}
