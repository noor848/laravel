<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\user;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //

    public function store(){
        $user = user::find(2);
        $role = Role::find(1);
         $user->role()->attach($role->id);
        return $user;
    }
}
