<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    Public function master(Request $request){
        if ($request->user()->hasRole('super')){
            $posts = Post::get();
            return view('super.dashboard',compact('posts'));
        }
    }
}
