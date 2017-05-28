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
      <br> <!--for the purpose of padding [lazy af, hands raised!]-->
      <div class="markit-row-padding">
        <div class="markit-col m12">
          <div class="markit-card-2 markit-round markit-white">
            <div class="markit-container markit-padding markit-center">
              <button type="button" class="btn btn-success pull-left"><i class="glyphicon glyphicon-ok"></i><strong> Mark this Item</strong></button>

              <p class="pull-right"><strong>Bid Amount</strong> <input type="text" name="bidamount" id="bidamount"/> 
            </div></p>
          </div>
        </div>
      </div>
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
      <div class="markit-card-2 markit-round markit-white markit-center">
        <div class="markit-container">
          <p>Ends <span class="text-success">{{$left->diffForHumans()}}</span>  </p>
          <button type="button" class="btn btn-success" style="width: 100%"><strong>OPEN</strong></button>
          <p>Sat, 27 May 2017</p>
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
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/auction.css')}}">
@endpush

