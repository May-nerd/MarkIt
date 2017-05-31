<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App;
use Auth;
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

    public function welcome(){
        return view('welcome');
    }

    // public function activeitems()
    // {
    //     $posts = App\Auction::where('poster_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
    //     // return $posts;
    //     return view('home', compact('posts'));
    // }

    // public function markeditems()
    // {   
    //     $posts = DB::table('auctions')
    //     ->select('auctions.*')
    //     ->join('marks', 'auctions.id', '=', 'marks.auction_id')
    //     ->where('marks.user_id', '=', Auth::user()->id)
    //     ->get();
    //     // return $posts;
    //     return view('markeditems', compact('posts'));
    // }

    public function markeditems()
    {   
        $posts = Auth::user()->markedAuctions;
        return view('markeditems', compact('posts'));
    }

    public function search(Request $request)
    {   
        $searchterm = $request->input('search');
        $posts = Auth::user()->markedAuctions;
        return view('search', compact('posts'));
    }

    // public function index(){
    //     $user = User::orderedby('desc')->paginate(10);
    //     return view('user.profile', compact('user'));
    // }
}
