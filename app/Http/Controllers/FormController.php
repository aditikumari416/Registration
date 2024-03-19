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

        $url = url('register');
        $title= 'create customer';
        // $urls = url('register');
        $titles = 'register';
        $data = compact('url','title','titles');
        return view ('Register')->with($data);
    }

    public function view( Request $request){
       
        $search =  $request['search']?? "";

        if($search!= ""){
            //where close

            $custm = Register::where('name', 'LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get();

        }else{

            
            $custm = Register::all();
        }
        // echo '<pre>';
        // print_r($custm->toArray());
        // echo '<pre>';

        $data = compact('custm','search');
      return view('customer-view')->with($data);
    }


    public function delete($id){

        $custom = Register::find($id);
        if(!is_null( $custom)){
            $custom->delete();

        }

        return redirect('register');
    }


    public function edit($id){

        $custom= Register::find($id);
        if(is_null ($custom)){

            return redirect('register'); 
        }else{
            $title = 'update customer';
             $url=url('update').'/'. $id;
            //  $urls= url('submitupdate').'/'. $id;
             $titles= 'update';
            $data =compact('custom','url','title','titles');

        return view('register')->with($data);


        }
        
    }


    public function update($id , Request $request){
        $custom= Register::find($id);

        $custom ->name = $request['name'];
        $custom -> email= $request['email'];
        $custom ->country = $request['country'];
        $custom->save();
        return  redirect('customer/view');

    }
}

