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
              <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="itempicture" class="col-md-4 control-label">Upload Item Picture</label>
                  <div class="col-md-6">
                      <input id="itempicture" type="file" name="itempicture" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="itemname" class="col-md-4 control-label">Item Name</label>
                  <div class="col-md-6">
                    <input id="itemname" type="text" class="form-control" name="itemname" value="{{ request('itemname') }}" required autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <label for="description" class="col-md-4 control-label">Description</label>
                  <div class="col-md-6">
                    <textarea class="form-control" name="description" value="{{ request('description') }}" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="minbid" class="col-md-4 control-label">Minimum Bid (peso)</label>
                  <div class="col-md-6">
                    <input id="minbid" type="number" min="0" class="form-control" name="minbid" placeholder="P100.00" value="{{ request('minbid') }}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="duration" class="col-md-4 control-label">Auction Duration (days)</label>
                  <div class="col-md-6">
                    <input id="duration" type="number" min="1" class="form-control" name="duration" value="{{ request('duration') }}" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                    Submit
                    </button>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <br> <!--for the purpose of padding [lazy af, hands raised!]--></div>
    
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

