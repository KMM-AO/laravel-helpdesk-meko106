<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const BOSS=11;
    const EMPLOYEE=21;
    const APPLICANT=31;
    const CUSTOMER= 41;
}
