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

    
    return view('showdata');
   }

   public function view(){

      $lists = todo::all();
      //   echo '<pre>';
      //   print_r($list->toArray());
      //   echo '<pre>';

      //   $data = compact('lists');
      return view('showdata',compact("lists"));;
   }



   
//upolad file controller

public function upload(Request $request){
   

   // echo "<pre>";

   // print_r($request->all());

   $filename= time()."-ws.".$request->file('image')->getClientOriginalExtension();

   echo $filename;
   die;
   
   echo $request->file('image')->storeAs('uploads'.$filename);
}
}


