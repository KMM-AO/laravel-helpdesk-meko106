<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class TicketController extends Controller
{
    public function create(){ 

        return view('pages.ticket.create')->with('categories', Category::all());
    }

    public function store(Request $request){
        dd($request);
    }

}
