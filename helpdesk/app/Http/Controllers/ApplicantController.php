<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;


class ApplicantController extends Controller
{
    public function index(){

        $applicants=Applicant::whereHas('user', function (Builder $query){
            $query->where('role_id', Role::APPLICANT);
        })->orderBy('created_at', 'desc')->get();
        
        return view('pages.applicant.index')->with('applicants', $applicants) ;       
    }



    public function employ(Applicant $applicant){
        $applicant->user->role_id = Role::EMPLOYEE;
        $applicant->user->save();

        return redirect('applicant/index')->with('status', $applicant->user->name.' is hired');


    }

}

