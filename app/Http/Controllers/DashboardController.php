<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    Public function master(Request $request){
        
        if(!Auth::check()){
            return redirect('/login');
        }
        if ($request->user()->hasRole('super')){
            $posts = Post::get();
            return view('super.dashboard',compact('posts'));
        }
    }
}
