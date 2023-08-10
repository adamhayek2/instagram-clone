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
        
        $followingPosts = $user->followingPosts()->with('user:username,id')->get();
    
        return response()->json([
            "status" => "success", 
            "data" => $followingPosts
        ]);
    }

    function getFollowers() {
    
        $user = Auth::user();
        
        $followers = $user->followers;
    
        return response()->json([
            "status" => "success", 
            "data" => $followers
        ]);
    }

    function getFollowing() {
    
        $user = Auth::user();
        
        $following = $user->following;
    
        return response()->json([
            "status" => "success", 
            "data" => $user
        ]);
    }
    
    function search(Request $request) {
        $searchedUsers = User::searchByUsername($request->username);

        return response()->json([
            "data" => $searchedUsers
        ]);

    }
}
