<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\user;
class PostController extends Controller
{
    public function index(){
        $posts = Post::with('users');
        if(!$posts)
            return Response("user not found");
        return Response()->json($posts);
    }
    public function store(Request $request, $id){
        $user = User::find($id);
        if(!$user)
            return Response("user not found");

        $post = $user->post()->createMany([
            ["title"=> $request->title,
            "desctription"=> $request->desctription]
        ]);
        return Response()->json([$post]);
    }
    public function update(Request $request, $id){
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404);
        }
        $post->title = $request->title;
        $post->desctription = $request->desctription;
        $post->save();
        return Response()->json(["Successuflly Updated $post"]); }
    public function delete($id){
        $post = Post::find($id);
        if(!$post)
            return Response("not found");
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
