<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    function postsFromFollowing() {
    
        $user = Auth::user();
        
        $followingPosts = $user->followingPosts()->get();
    
        return response()->json([
            "status" => "success", 
            "data" => $followingPosts
        ]);
    }
    
}
