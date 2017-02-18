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
        $todo1->description=$textval->texty;
        $todo1->task=$textval->stuff;
        $todo1->save();
        echo "data saved";
    }

    public function viewtodo()
    {
        $todo2=new todotable;
        $todo3=$todo2->all();
        return view('todoshow',['asdf'=>$todo3]);
    }


    
}


