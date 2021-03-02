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





