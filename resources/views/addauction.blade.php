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
         <p class="markit-center"><img src="{{ Storage::disk()->url("public/profilepicture/".Auth::user()->profilepicture) }}"  class="markit-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-user fa-fw markit-margin-right markit-text-theme"></i> Maynard Vargas</p>
         <p><i class="fa fa-home fa-fw markit-margin-right markit-text-theme"></i> Kalibo, Aklan</p>
         <p><i class="fa fa-thumbs-up fa-fw markit-margin-right markit-text-theme"></i> Rating: <i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star-empty"></i></p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="markit-card-2 markit-round">
        <div class="markit-white">
          <a class="markit-button markit-block markit-theme-l1 markit-left-align remove-anchor-design" data-toggle="tooltip" title="Edit Profile" href="/profile/{{ Auth::user()->username }}/edit"><i class="fa fa-pencil fa-fw markit-margin-right"> Edit Profile</i></a>
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
              <form class="form-horizontal" role="form" method="POST" action="{{ url('/createauction') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="itempicture" class="col-md-4 control-label">Upload Item Picture</label>
                  <div class="col-md-6">
                      <input id="itempicture" type="file" name="itempicture" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="item_name" class="col-md-4 control-label">Item Name</label>
                  <div class="col-md-6">
                    <input id="item_name" type="text" class="form-control" name="item_name" required autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <label for="description" class="col-md-4 control-label">Description</label>
                  <div class="col-md-6">
                    <textarea class="form-control" name="description" value="{{ request('description') }}" required ></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="min_bid" class="col-md-4 control-label">Minimum Bid (peso)</label>
                  <div class="col-md-6">
                    <input id="min_bid" type="number" min="0" class="form-control" name="min_bid" placeholder="P100.00" value="{{ request('min_bid') }}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="auction_days" class="col-md-4 control-label">Auction Duration (days)</label>
                  <div class="col-md-6">
                    <input id="auction_days" type="number" min="1" class="form-control" name="auction_days" value="{{ request('auction_days') }}" required>
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
          
  <!-- End Grid -->
  </div>
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/auction.css')}}">
@endpush

