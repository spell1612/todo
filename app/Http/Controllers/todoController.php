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
        return back();
    }

    public function viewtodo()
    {
        $todo2=new todotable;
        $todo3=$todo2->all();
        return view('todoshow',['asdf'=>$todo3]);
    }

    public function dbdel($idxyz)
    {
        $todo4=todotable::find($idxyz);
        $todo4->delete();
        return back();
    }

    public function dbed($id)
    {
        $todo4=todotable::find($id);
        return view('editview',['ad'=>$todo4]);
        
        
    }

    public function edit(Request $req)
    {
        $todo5=todotable::find($req->hdid);
        $todo5->description=$req->text1;
        $todo5->task=$req->evalu;
        $todo5->save();
        return view('todoweb');
    }
    
}


