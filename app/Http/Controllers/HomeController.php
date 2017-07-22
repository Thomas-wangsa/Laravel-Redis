<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
use Redis;

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
        // if(Redis::get('data_user') != null) {
        //     $user = json_decode(Redis::get('data_user'));
        // } else {
               $user = User::all();
               //Redis::set('data_user',$user);
        // }
        $data['user'] = $user; 
        return view('home',compact('data'));
    }
}
