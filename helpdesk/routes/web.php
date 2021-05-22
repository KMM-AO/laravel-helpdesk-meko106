<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/applicant/index', [ApplicantController::class, 'index'])
->name('applicant.index')
->middleware('can:list, App\Models\Applicant');

            
Route::put('/applicant/{applicant}/employ', [ApplicantController::class, 'employ'])
->middleware('auth')
->name('applicant.employ')
->middleware('can:employ,applicant');


Route::delete('/applicant/{applicant}/reject', [ApplicantController::class, 'reject'])
->middleware('auth')
->name('applicant.reject')
->middleware('can:reject,applicant');


Route::put('/applicant/{applicant}/queue', [ApplicantController::class, 'queue'])
->middleware('auth')
->name('applicant.queue')
->middleware('can:queue,applicant');





