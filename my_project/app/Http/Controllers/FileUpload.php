<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUpload extends Controller
{
    public function onClick( Request $req){
        // return "File uploaded";
        // $path=$req->file('myfile')->store('public');
        // return $path;
        $path=$req->file('myfile')->store('images','public');
        $filearray=explode('/',$path);
        return view('myprofile',['path1'=>$filename]);
        //uploaded file can be seen at storage/app/public
    }
}
