@extends('layouts.main')

@section('content')
<div class="markit-container markit-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="markit-row">
    <!-- Middle Column -->
    <div class="markit-col m10">
    
      <div class="markit-row-padding">
        <div class="markit-col m12">
          <div class="markit-card-2 markit-round markit-white">
            <div class="markit-container markit-padding">
              <div class="panel panel-default">
                <div class="panel-body">
                  <p>Item name: <span class="protrude">{{$auction->item_name}}</span></p>
                  <p>Auction item  by: <span><a href="" class="remove-anchor-design" data-toggle="tooltip" title="Visit Profile">{{$auction->user->fname}} {{$auction->user->lname}}</a></span></p>
                  <p>
                    Description: <br>
                    <span>{{$auction->description}}</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 <!--for the purpose of padding [lazy af, hands raised!]-->
{{--       <div class="markit-row-padding">
        <div class="markit-col m12">
          <div class="markit-card-2 markit-round markit-white">
            <div class="markit-container markit-padding markit-center">

              <form action="">
                <strong class="">Bid Amount </strong>
                <input style="margin-top: 20px;" class="form-control" type="number" name="amount" id="bidamount" min="{{$auction->min_bid}}" max="" value="{{$auction->min_bid}}" /> 
                <input type="hidden" name="auction_id" value="{{$auction->id}}">
                <br />
                  <button type="submit" name="submit" class="btn btn-success form-control"><i class="glyphicon glyphicon-ok"></i><strong> Mark this Item</strong></button>
              </form>

            </div>
          </div>
        </div>
      </div> --}}
      <br> <!--for the purpose of padding [lazy af, hands raised!]-->
      <div class="markit-row-padding">
        <div class="markit-col m12">
          <div class="markit-card-2 markit-round markit-white">
            <div class="markit-container markit-padding">
              <div class="panel panel-default">
                <img class="img-responsive posted-image" src="{{ Storage::disk()->url("public/auctions/".$auction->image_path)}}" alt="Item Photo">               
              </div>
            </div>
          </div>
        </div>
      </div>
      <br> <!--for the purpose of padding [lazy af, hands raised!]-->
      <div class="markit-row-padding">
        <div class="markit-col m12">
          <div class="markit-card-2 markit-round markit-white">
            <div class="markit-container markit-padding">
                <div class="panel panel-default">
                  <div class="panel-heading">Auction Activity (Auction ID: {{$auction->id}}) </div>
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                         <th>Name</th>
                         <th>Marked at</th>
                         {{-- <th>Reputation</th> --}}
                         <th>Amount</th>
                        
                        @if (Auth::user()->id == $auction->poster_id)
                          <th>Contact Information</th>
                        @endif
                         
                      
                      </tr>
                      
                      @forelse($auction->marks as $mark)
                        <tr>
                          <td>{{$mark->user->fname}} {{$mark->user->lname}}</td>
                          <td>{{$mark->user->created_at->diffForHumans()}}</td>
{{--                           <td>4.9 stars</td> --}}
                          <td>Php {{$mark->amount}}</td>
                          @if (Auth::user()->id == $auction->poster_id)
                            <td>{{$mark->user->email}}</td>
                          @endif
                          
                        </tr>
                      @empty
                      @endforelse
                    </table>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="markit-col m2">
      <div class="markit-card-2">
        <div class="countdown-container"><br>
          <h1 class="countdowntitle text-center text-success">Countdown: </h1>
          <div id="clockdiv">
            <div>
              <span class="days"></span>
              <div class="smalltext">Days</div>
            </div>
            <div>
              <span class="hours"></span>
              <div class="smalltext">Hours</div>
            </div>
            <div>
              <span class="minutes"></span>
              <div class="smalltext">Minutes</div>
            </div>
            <div>
              <span class="seconds"></span>
              <div class="smalltext">Seconds</div>
            </div>
          </div>
          <span id="timestamp" style="display: block;">{{$left}}</span>
          <br>

        </div>
      </div>
      <br>
      <div class="markit-card-2 markit-round markit-white markit-center">
        <div class="markit-container">
          <p>Number of Marks</p>
          <p><strong>{{$auction->marks->count()}}</strong></p>
        </div>
      </div>
      <br>
      <div class="markit-card-2 markit-round markit-white markit-center">
        <div class="markit-container">
          <p>Minimum Mark</p>
          <p><strong>Php {{$auction->min_bid}}</strong></p>
        </div>
      </div>
      <br>
      
      @if ((Auth::user()->id != $auction->poster_id))
        <div class="markit-card-2 markit-round markit-white markit-center">
          <div class="markit-container" style="padding-top: 20px; padding-bottom: 20px;">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/createmark') }}">
              {{ csrf_field() }}
              <strong class="">Bid Amount </strong>
              <input style="margin-top: 20px;" class="form-control" type="number" name="amount" id="bidamount" min="{{$auction->min_bid}}" max="" value="{{$auction->min_bid}}" /> 
              <input type="hidden" name="auction_id" value="{{$auction->id}}">
              <br />
                <button type="submit" name="submit" class="btn btn-success form-control"><i class="glyphicon glyphicon-ok"></i><strong> Mark this Item</strong></button>
                <br>
            </form>
          </div>
        </div>
      @endif
      




      <br>
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/auction.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/clock.css')}}">
@endpush

@push('scripts')
<script src="{{asset('js/newscript.js')}}"></script>
@endpush

