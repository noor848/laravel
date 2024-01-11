<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\user;
class PostController extends Controller
{
    public function index(){

        $posts = Post::with('users');
        return Response()->json($posts);
    }

    public function store(Request $request){

        // $post = Post::create([
        //     "title"=> $request->title,
        //     "desctription"=> $request->desctription
        // ]);

        $user = User::find(2);
        $post = $user->post()->createMany([
            ["title"=> $request->title,
            "desctription"=> $request->desctription]
        ]);

        return Response()->json([$post]);
    }

    public function update(Request $request, $id){
        $post = Post::find($id);
        $post->title = $request->title;
        $post->desctription =$request->desctription;
        $post->save();
        return Response()->json(["Successuflly Updated $post"]); }

    public function delete($id){
        $post = Post::find($id);    
        $post->delete();
        return Response()->json(["deleted $id"]);
    }
    public function getPost($id){
        $post = Post::find($id); 
        if ($post == null)   
        return Response()->json("not Exits");
         return Response()->json($post);
    }


}
