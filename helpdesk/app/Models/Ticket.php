<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;



class Ticket extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function users(){
        return $this->belongsTo(User::class,'customer_user_id', 'id');
    }


    public function proccessing_user(){
        return $this->belongsToMany(User::class,'ticket_employee_user','ticket_id','employee_user_id');
    }






    
}
