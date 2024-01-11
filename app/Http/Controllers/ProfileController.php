<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class ProfileController extends Controller
{
    //

    public function store(){

        $user = User::find(1);

        $profile = $user->profile()->create([]);
        return Response()->json([$profile]);
    }
}
