<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\user;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
    public function store($userId,$roleId){
        $user = user::find($userId);
        $role = Role::find($roleId);
        if($user == null || $role == null){
            return Response("Invalid");
        }
         $user->role()->attach($role->id);
        return $user;
    }
}
