<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Ticket;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;



class TicketController extends Controller
{
    public function create(){ 

        return view('pages.ticket.create')->with('categories', Category::all());
    }

    public function store(Request $request){
        $request->validate([
            'subject' => 'required|max:40',
            'contents' => 'required',
            'category' => 'required|exists:categories,id'
        ]);


        $ticket=new Ticket();
        $ticket->subject= $request->subject;
        $ticket->contents=$request->contents;
        $ticket->category_id=$request->category;
        $request->user()->created_tickets()->save($ticket);

        
        return redirect('/dashboard')->with('status', 'Your ticket is saved!');
    }


    public function index($status){

        $tickets=Ticket::all();
        
        $data=[
            'status' => $status." ticket",
            'tickets' =>  $tickets
        ];

        
        return view('pages.ticket.index')->with('data',$data) ;
    }

    

}
