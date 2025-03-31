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
        // return $request;
        // echo "Form submitted";
        // echo "<pre>";
        // print_r($request->input());
        // echo "The name is ".$request->name."<br>";
        // echo "The email is ".$request->email."<br>";

        $jsonnresponse=$request->validate([
            'name'=>'required|string|max:20|min:2',
            'email'=>'required|email',
            'password'=>'required|min:5|max:10',
            'gender'=>'required| in:male,female,other',
            'interests'=>'required',
            'experience'=>'required'
        ]);
        return response()->json($jsonnresponse);
    }
    
        private function messages(){
            return [
                'name.required'=>'Name is required',
                'name.string'=>'Name should be string',
                'name.max'=>'Name should be less than 20 characters',
                'name.min'=>'Name should be more than 2 characters',
                'email.required'=>'Email is required',
                'email.email'=>'Email should be valid',
                'password.required'=>'Password is required',
                'password.min'=>'Password should be more than 5 characters',
                'password.max'=>'Password should be less than 10 characters'
            ];
        }
        
}