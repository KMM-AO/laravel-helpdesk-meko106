<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

class TicketPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct(){
    }

        public function create(User $auth_user){
            return $auth_user->role_id===Role::CUSTOMER;
        }

        public function store(){
            return true;
        }

}
