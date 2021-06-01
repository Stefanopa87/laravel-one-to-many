<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// porto dentro con App la class che mi serve
use App\task;

class employee extends Model
{
   protected $fillable = [
   'firstname',
   'lastname',
   'ral',
   ];

   // la funzione la chiamo tasks perche un employee fa molte tasks
   public function tasks(){
       
       return $this -> hasMany(task::class);

   }

}
