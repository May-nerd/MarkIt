<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Auction;
use App\Mark;
use Auth;
use Carbon\Carbon;

class MarkController extends Controller
{
    public function index(Request $data){
        $mark = Mark::create([
                    'user_id' => Auth::user()->id,
                    'auction_id' => $data['auction_id'],
                    'amount' => $data['amount']
                ]);

        return redirect('/auction/'.$data['auction_id']);
    }
}

