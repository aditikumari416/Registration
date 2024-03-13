<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function index(){

        return view('register');
    }


    public function submit(Request $request){

         echo '<pre>';
        print_r($request->all());

        //insert query of data basetable

        $req = new Register;
        $req ->name = $request['name'];
        $req -> email= $request['email'];
        $req->password=md5( $request['password']);
        $req ->country = $request['country'];
        $req->save();
        return  redirect()->back();
    }

    public function view(){

        $custm = Register::all();
        // echo '<pre>';
        // print_r($custm->toArray());
        // echo '<pre>';

        $data = compact('custm');
      return view('customer-view')->with($data);

    }
}
