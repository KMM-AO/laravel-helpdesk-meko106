<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Role;

use Illuminate\Auth\Access\HandlesAuthorization;

class ApplicantPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function list(User $auth_user){
        return $auth_user->role_id === Role::BOSS;
    }
    
}
