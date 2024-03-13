<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\register;


class FormController extends Controller
{
    
    // public function nav(){

    //     return view('navbar');
    // }

    public function nav(){

        return view('navbar');
    }


    public function registerform(){
        return view ('Register');
    }

    public function view(){
       
        $custm = Register::all();
        // echo '<pre>';
        // print_r($custm->toArray());
        // echo '<pre>';

        $data = compact('custm');
      return view('customer-view')->with($data);
    }


    public function delete($id){

        $custom = Register::find($id);
        if(!is_null $custom){

        }

        return redirect()->back();
    }
}
