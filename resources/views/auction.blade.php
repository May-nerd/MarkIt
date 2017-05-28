@extends('layouts.main')

@section('content')
<div class="markit-container markit-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="markit-row">
    <!-- Left Column -->
    <div class="markit-col m3">
      <!-- Profile -->
      <div class="markit-card-2 markit-round markit-white">
        <div class="markit-container">
         <h4 class="markit-center">My Profile</h4>
         <p class="markit-center"><img src="/uploads/minions.png" class="markit-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw markit-margin-right markit-text-theme"></i> Designer, UI</p>
         <p><i class="fa fa-home fa-fw markit-margin-right markit-text-theme"></i> London, UK</p>
         <p><i class="fa fa-birthday-cake fa-fw markit-margin-right markit-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="markit-card-2 markit-round">
        <div class="markit-white">
          <button onclick="myFunction('Demo1')" class="markit-button markit-block markit-theme-l1 markit-left-align"><i class="fa fa-circle-o-notch fa-fw markit-margin-right"></i> My Groups</button>
          <div id="Demo1" class="markit-hide markit-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="markit-button markit-block markit-theme-l1 markit-left-align"><i class="fa fa-calendar-check-o fa-fw markit-margin-right"></i> My Events</button>
          <div id="Demo2" class="markit-hide markit-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="markit-button markit-block markit-theme-l1 markit-left-align"><i class="fa fa-users fa-fw markit-margin-right"></i> My Photos</button>
          <div id="Demo3" class="markit-hide markit-container">
         <div class="markit-row-padding">
         <br>
           <div class="markit-half">
             <img src="/w3images/lights.jpg" style="width:100%" class="markit-margin-bottom">
           </div>
           <div class="markit-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="markit-margin-bottom">
           </div>
           <div class="markit-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="markit-margin-bottom">
           </div>
           <div class="markit-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="markit-margin-bottom">
           </div>
           <div class="markit-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="markit-margin-bottom">
           </div>
           <div class="markit-half">
             <img src="/w3images/fjords.jpg" style="width:100%" class="markit-margin-bottom">
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="markit-card-2 markit-round markit-white markit-hide-small">
        <div class="markit-container">
          <p>Interests</p>
          <p>
            <span class="markit-tag markit-small markit-theme-d5">News</span>
            <span class="markit-tag markit-small markit-theme-d4">W3Schools</span>
            <span class="markit-tag markit-small markit-theme-d3">Labels</span>
            <span class="markit-tag markit-small markit-theme-d2">Games</span>
            <span class="markit-tag markit-small markit-theme-d1">Friends</span>
            <span class="markit-tag markit-small markit-theme">Games</span>
            <span class="markit-tag markit-small markit-theme-l1">Friends</span>
            <span class="markit-tag markit-small markit-theme-l2">Food</span>
            <span class="markit-tag markit-small markit-theme-l3">Design</span>
            <span class="markit-tag markit-small markit-theme-l4">Art</span>
            <span class="markit-tag markit-small markit-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="markit-col m7">
    
      <div class="markit-row-padding">
        <div class="markit-col m12">
          <div class="markit-card-2 markit-round markit-white">
            <div class="markit-container markit-padding">
              <div class="panel panel-default">
                <div class="panel-body">
                  <p>Item name: <span class="protrude">Immortal Jade of the Celestial Qilin</span></p>
                  <p>
                    Description: <br>
                    <span>Lorem from database Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
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
              <button type="button" class="bid-mark "><strong>Mark this Item</strong></button>
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
                <img class="img-responsive posted-image" src="/uploads/qilin.jpg" alt="Item Photo">               
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
                  <div class="panel-heading">Auction Activity for bid #8</div>
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

