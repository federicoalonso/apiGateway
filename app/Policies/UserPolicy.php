<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function before($user){
        if($user->hasRole('admin')){
            return true;
        }
    }

    public function view(User $user, User $usu) {
        return $user->id === $usu->id;
    }
    
    public function create(User $user) {
        return $user->hasRole('admin');
    }
}
