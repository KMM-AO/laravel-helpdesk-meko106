<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create(){

        return view('pages.ticket.create');
    }

    public function store(){
        return "dit is een ticket store-request";
    }


}
