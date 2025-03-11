<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\MyController;
//using Controller
Route::get('/control', [MyController::class, 'hello']);
//Passing parameter to controller
Route::get('/control/{name}', [MyController::class, 'passparameter']);

//calling blade template in controller
Route::get('/form', [MyController::class, 'form']);

Route::post('/submit', [MyController::class, 'formSub']);

Route::get('/', function () 
{
    return view('welcome');
});

Route::get('/hello', function () 
{
    return "<span style='color: red;'><h1>hello world</span></h1>";
});

Route::get('/about', function () 
{
    return view('abouteUs');
});
Route::get('/homep', function () 
{
    return view('home');
});
// route with parameter
// Route::get('lpu/{name}', function ($name) 
// {
//     return 'Welcome to LPU, ' . $name;
// });
// route with parameter
Route::get('lpu/{name?}', function ($name="user") 
{
    return 'Welcome to LPU, ' . ucfirst($name);
});

Route::get('/detail',function(){
    $details=[
        "name"=>"Yash Tripathi",
        "age"=>21,
        "email"=>"tripathiyash143@gmail.com"
    ];
return ("the name is ".$details['name']."<br> the age is ".$details['age']."<br> the email is ".$details['email']);
});

Route::get('/add/{num1}/{num2}',function($num1,$num2){
    return view('home',compact('num1','num2'));
});

Route::get('/cars',function()
{
    $cars = array('BMW', 'Audi', 'Mercedes', 'Toyota');
    return view('home', ['cars' => $cars]);
});

Route::get('/fruits', function () 
{
    $fruits = array('Mango', 'Apple', 'Banana', 'Orange');
    return view('fruits', ['fruits' => $fruits]);
});

Route::get('/table/{number}', function($number) {
    return view('table', ['number' => $number]);
});

//sub routes
Route::get('/mypage/lpu/home', function () 
{
    return view('home');
});

//redirecting to any other url
// Route::redirect('/about', '/hi'); //if i aopen about then it will redirect to the h'/_url'
Route::redirect('/homep','/table/5');

Route::get('/profile/{name}/{age}', function ($name, $age) {
    return view('profile', ['name' => $name, 'age' => $age]);
});


Route::get('/hi', function () 
{
    return ('<script> alert( "abouteUs" ); </script>
    <h1><center>Yash Tripathi</center></h1>
    <h2>hellow world</h2>
    <h3>Hi</h3>
    <h4>Hi</h4>
    <h5>Hi</h5>
    <h6>Hi</h6>');

});


//the below code will run only if the name is passed in the url, and if aboutUs file is present in the view folder
Route::get('/about/{name}', function ($name) 
{
    echo "<h1>my name is " , $name,"</h1>";
    return view('abouteUs');
});



//redirecting to any other url
Route::redirect('/about', '/hi'); //if i aopen about then it will redirect to the h'/_url'



//Json response
Route::get('/json', function () 
{
    return response()->json([
        'name' => 'Yash Tripathi',
        'age' => 21,
        'email' => 'yt@gamil.com'
    ]);
});

//named routes
Route::get('/user/profile', function () 
{
    return view('profile');
})->name('profile');


Route::get('/setCookie', function (){
    return response('Hello World')->cookie(
        'name', 'Yash Tripathi', 60
    );
});


Route::get('/getCookie', function () {
    return request()->cookie('name');
});


Route::get('/deleteCookie', function () {
    return response('Cookie has been deleted')->cookie('name',-1);
});

