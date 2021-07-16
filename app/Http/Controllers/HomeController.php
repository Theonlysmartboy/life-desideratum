<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        if ($request->user()->hasRole('user')) {
            return redirect('/');
        }

        if ($request->user()->hasRole('admin')){
            return redirect('/dashboard/master/admin');
        }
        if ($request->user()->hasRole('super')){
            return redirect('/dashboard/master');
        }
    }
}
