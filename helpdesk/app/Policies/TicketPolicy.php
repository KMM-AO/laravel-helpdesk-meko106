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
            return $auth_user->role_id==Role::CUSTOMER;
        }

        public function store(){
            return true;
        }


        public function list(User $auth_user){
            return $auth_user->role_id==Role::APPLICANT ? false :true;
        }


        public function click_list($auth_user, $status){
            switch ($auth_user->role_id){
                case Role::BOSS:
                case Role::EMPLOYEE:
                    return in_array($status, ['waiting', 'processed', 'closed']);
                case Role::CUSTOMER:
                    return in_array($status, ['open', 'closed']);
                default: return false;
            }
        }

}
