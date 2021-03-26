<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class ApplicantController extends Controller
{
    public function index(){
        $role = Role::find(Role::APPLICANT);
        $users = $role->users()->orderBy('created_at', 'desc')->get(); 
        return view('pages.applicant.index')->with('applicants', $users ) ;       
    }
}