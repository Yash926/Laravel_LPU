<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function hello()
    {
        return "Hello from MyController";
    }
    public function passparameter($name){
        return "Hello ".$name;
    }
    //calling blade template in controller
    public function form(){
        return view('regForm');
    }

    public function formSub(Request $request){
        // echo "Form submitted";
        // echo "<pre>";
        // print_r($request);
        // echo "The name is ".$request->name."<br>";
        // echo "The email is ".$request->email."<br>";

        $jsonnresponse=$request->validate([
            'name'=>'required|string|max:20|min:2',
            'email'=>'required|email',
            'password'=>'required|min:5|max:10',
            'gender'=>'required',
            'interests'=>'required',
            'experience'=>'required'
        ]);
        return response()->json($jsonnresponse);
        
    }
}
