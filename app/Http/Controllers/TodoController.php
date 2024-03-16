<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;

class TodoController extends Controller
{
   public function todoview(){

    
    return view('todo');

   }

   public function submit(Request $request){
    // echo '<pre>';
    // print_r($request->all());

    $list= new todo;
    $list->name = $request['name'];
    
    $list->save();

    
    return redirect()->back();
   }
}
