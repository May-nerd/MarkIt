<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Auction;

class ProfileController extends Controller
{
    // public function profile($username){
    // 	$user = User::whereUsername($username)->first();
    // 	return view('user.profile', compact('user'));
    // }

    public function profile($username)
    {
        $user = User::whereUsername($username)->first();
        $posts = Auction::orderBy('id', 'desc')->paginate(10);
        return view('user.profile', compact('user', 'posts'));
    }

    public function show($username){
    	$user = User::whereUsername($username)->first();
      $posts = Auction::where('poster_id', $user->id)->orderBy('id', 'desc')->paginate(10);
      return view('user.profile', compact('user', 'posts'));
    }

    public function edit($username){
    	return view('user.edit');
    }

    // public function index(){
    // 	$user = User::orderedby('desc')->paginate(10);
    // 	return view('user.profile', compact('user'));
    // }

    public function update(Request $request, $username){
  		$user = Auth::user();
  		$user -> fname = $request->get('fname');
   		$user -> lname = $request->get('lname');
  		$user -> town = $request->get('town');
  		$user -> province = $request->get('province');
  		$user -> email = $request->get('email');
  		$user -> province = $request->get('province');
  		$user -> bio = $request->get('bio');
  		$user -> password = bcrypt($request->get('password'));
  		$user -> save();
 
  		return redirect('/profile/'.$user->username);
    }
}
