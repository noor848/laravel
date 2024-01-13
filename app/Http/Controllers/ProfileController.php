<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class ProfileController extends Controller
{
    public function store($id){
        $user = User::find($id);
        if(!$user)
            return Response("user not found");
        $profile = $user->profile()->create([]);
        return Response()->json([$profile]);
    }
}
