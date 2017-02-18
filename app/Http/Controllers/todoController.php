<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todotable;

class todoController extends Controller
{
    //
    public function todowelc(){
        return view('todoweb');
    }

    public function savetodo(Request $textval){
        $todo1= new todotable;
        $todo1->task=$textval->stuff;
        $todo1->save();
    }
}


