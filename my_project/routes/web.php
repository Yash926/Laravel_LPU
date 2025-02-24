<?php

use Illuminate\Support\Facades\Route;

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