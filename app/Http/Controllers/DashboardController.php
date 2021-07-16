<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    Public function master(Request $request){
        if ($request->user()->hasRole('super')){
            return view('super.dashboard');
        }
    }
}
