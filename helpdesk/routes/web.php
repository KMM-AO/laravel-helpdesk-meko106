<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/greeting', function(){ //   /greeting in the url
//     return '<h1>Hello World</h1>';
// });

// Route::redirect('/here','/there');
// shortcut for the url 

// Route::permanenRedirect('/here','/there');
// returns automaticllay an 301 statuscode

Route::view('/dit/is/een/test','test/opdracht3b');

Route::redirect('/dit/is/nog/een/test', '/dit/is/een/test');

Route::get('/test/parameter/{id}', function($id){
    return view('test/opdracht3d')->with('param', $id);
});

Route::get('/test/integer/{id}', function($id){
    return view('test/opdracht3d')->with('param', $id);
});


//name is the param which you give with the request uri
Route::get('/user/{name?}', function($name = 'dfdfd'){
    return $name;
});



// 3e
Route::get('/user/integer/{id}', function($id){
    return $id;
})->where('id','[0-9]*');