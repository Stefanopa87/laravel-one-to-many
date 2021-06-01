<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\employee;

class MainController extends Controller
{
    public function home(){

    $employees = employee::all();
    // dd($employees);


    return view('pages.home', compact('employees'));
    // RICORDA SEMPRE DI COMPATTARE LE VARIABILI
    }

}
