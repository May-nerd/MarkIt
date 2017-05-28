<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Auction;
use Auth;
class AuctionController extends Controller
{
    public function index($id){

    	return view('auction');
    }

     public function add(Request $request){
    	return view('addauction');
    }

    public function show($id){
        $auction = Auction::where('id', $id)->first();
        return view('auction', compact('auction'));
    }

    public function create(Request $data){
	    $file = request()->file('itempicture');
	    $ext = $file->guessClientExtension();
	    $filename = $file->hashName();
	    request()->file('itempicture')->store('public/auctions');

        $auction = Auction::create([
                    'poster_id' => Auth::user()->id,
                    'item_name' => $data['item_name'],
                    'description' => $data['description'],
                    'image_path' => $filename,
                    'image_extension' => $ext,
                    'min_bid' => $data['min_bid'],
                    'auction_days' => $data['auction_days'],
                    'is_sold' => 0,
                    'sold_id' => NULL
                ]);

        return redirect('/auction/'.$auction->id);
    }


    
}

