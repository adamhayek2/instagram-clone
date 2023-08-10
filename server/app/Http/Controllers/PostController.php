<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'caption' => 'required|string',
            'image' => 'required|string', // Adjust as needed
        ]);

        $post = new Post([
            'user_id' => $user->id,
            'caption' => $request->caption,
            'image' => $request->image,
        ]);

        $post->save();

        return response()->json([
            "status" => "success", 
            "data" => $post
        ]);
    }
}
