<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;

class ApplicantController extends Controller
{
    public function index(){

        $applicants=Applicant::whereHas('user', function (Builder $query){
            $query->where('role_id', Role::APPLICANT);
        })->orderBy('created_at', 'desc')->get();
        
        return view('pages.applicant.index')->with('applicants', $applicants) ;       
    }



    public function employ(Applicant $applicant){
        dd($applicant);
    }
}
