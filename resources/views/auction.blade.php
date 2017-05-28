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
                  <p>Item name: <span class="protrude">Immortal Jade of the Celestial Qilin</span></p>
                  <p>Auction item  by: <span><a href="" class="remove-anchor-design" data-toggle="tooltip" title="Visit Profile">John Doe</a></span></p>
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
              <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i><strong> Mark this Item</strong></button>
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
                         <th>Bidded at</th>
                         <th>Reputation</th>
                         <th>Amount</th>
                      </tr>
                      <tr>
                        <td>Timmy Thompson Clarke</td>
                        <td>January 21, 2029</td>
                        <td>4.9 stars</td>
                        <td>200 BitCoins</td>
                      </tr>
                      <tr>
                        <td>Jennifer Doe</td>
                        <td>January 22, 2029</td>
                        <td>3.9 stars</td>
                        <td>500 BitCoins</td>
                      </tr>
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
          <p>6 Days, 23 Hours left</p>
          <button type="button" class="btn btn-success" style="width: 100%"><strong>OPEN</strong></button>
          <p>Sat, 27 May 2017</p>
        </div>
      </div>
      <br>
      <div class="markit-card-2 markit-round markit-white markit-center">
        <div class="markit-container">
          <p>Number of Bids</p>
          <p><strong>8</strong></p>
        </div>
      </div>
      <br>
      <div class="markit-card-2 markit-round markit-white markit-center">
        <div class="markit-container">
          <p>Average Bid</p>
          <p><strong>400 BitCoins</strong></p>
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

