<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class UserCOntroller extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
              "name"=>'required'
            ]
        );
        $user = user::create([
          "name"=> $request->name,
        ]);
        return Response()->json([$user]);
    }
}
