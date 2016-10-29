<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //jesli admin
        if(Auth::user()->role == 1){
            $users = User::latest()->get();
            return view('admin.home')->with('users', $users);
        }else{
            return view('member.home');
        }

    }
}
