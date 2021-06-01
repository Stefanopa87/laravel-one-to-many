<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// porto dentro con App la class che mi serve 
use App\employee;

class task extends Model
{
    protected $fillable = [
    'title',
    'description',
    'employee_id' // chiave di connessione
    ];

    // la funzione la chiamo employee perche una task è gestita da un employee
    public function employee(){
        return $this -> belongsTo(employee::class);
    }

}
