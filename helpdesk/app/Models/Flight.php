<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $table= 'my_flights';

    protected $primary_key= 'flight_id';

    protected $connection= 'sqlite';

    protected $keyType= 'string'; //the primary key type

    protected $timestampls=false; //





}


    foreach(Flight::all() as $flight) {
        echo $flight->name;
}

$flights= Flight::where('active', 1)->orderBy('name')->take(10)->get();

