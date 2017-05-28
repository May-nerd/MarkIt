<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = App\Auction::orderBy('id', 'desc')->paginate(10);
        // return $posts;
        return view('home', compact('posts'));
    }


    // public function index(){
    //     $user = User::orderedby('desc')->paginate(10);
    //     return view('user.profile', compact('user'));
    // }
}
