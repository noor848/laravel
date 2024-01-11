<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class UserCOntroller extends Controller
{
    //

    public function store(Request $request){
        $user = user::create([
            "name"=> $request->name,
        ]);
        return Response()->json([$user]);
    }

    public function getUserRole(){
        

    }
}
