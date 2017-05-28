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

         <h4 class="markit-center">{{ Auth::user()->fname." ".Auth::user()->lname }}</h4>
         <p class="markit-center"><img src="{{ Storage::disk()->url("public/profilepicture/".Auth::user()->profilepicture) }}" class="markit-circle" style="height:106px;width:106px" alt="Avatar">
         </p>
         <hr>
         <p><i class="fa fa-user fa-fw markit-margin-right markit-text-theme"></i> Maynard Vargas</p>
         <p><i class="fa fa-home fa-fw markit-margin-right markit-text-theme"></i> {{ucwords(strtolower(Auth::user()->town)) }}, {{ucwords(strtolower(Auth::user()->province)) }}</p>
         <p><i class="fa fa-thumbs-up fa-fw markit-margin-right markit-text-theme"></i> Rating: <i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star-empty"></i></p>
        </div>

      </div>
      <br>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
            <a class="btn btn-primary" href="/profile/{{ Auth::user()->username }}/edit">Edit Profile</a>
          </div>
        </div>
      <br/>
      
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
             <img src="/uploads/2.jpg" style="width:100%" class="markit-margin-bottom">
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
              <h6 class="markit-opacity"></h6>
              <p contenteditable="true" class="markit-border markit-padding">Insert tagline with another tag</p>
              <button type="button" class="markit-button markit-theme"><i class="fa fa-pencil"></i> Add toMarkIt</button> 
            </div>
          </div>
        </div>
      </div>

      @forelse ($posts as $post)
        <div class="markit-container markit-card-2 markit-white markit-round markit-margin"><br>
          <img src='{{ Storage::disk()->url("public/profilepicture/".$post->user->profilepicture)}}' alt="Avatar" class="markit-left markit-circle markit-margin-right user-icon" style="width:60px">
          <span class="markit-right markit-opacity">1 min</span>
          <h4>{{$post->user->fname}} {{$post->user->lname}}</h4>
          <h6>Rating: 5 Immortal Pearls</h6>
          <hr class="markit-clear">
          <div class="markit-row-padding">
            <p class="item-name">Qilin Horns</p>
            <div class="markit-half">
              <img class="img-responsive posted-image" src="/uploads/qilin.jpg" alt="Item Photo">
            </div>
            <div class="markit-half">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <button type="button" class="markit-button markit-theme-d1 mark-btn"><i class="fa fa-check"></i>  Mark<span> (5)</span></button>
          <button type="button" class="markit-button markit-theme-d1 mark-btn"></i>Go to Auction</button>
        </div>
      @empty
      @endforelse

      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="markit-col m2">
      <div class="markit-card-2 markit-round markit-white markit-center">
        <div class="markit-container">
          <p>Upcoming Events:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="markit-button markit-block markit-theme-l4">Info</button></p>
        </div>
      </div>
      <br>      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>

<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("markit-show") == -1) {
        x.className += " markit-show";
        x.previousElementSibling.className += " markit-theme-d1";
    } else { 
        x.className = x.className.replace("markit-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" markit-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("markit-show") == -1) {
        x.className += " markit-show";
    } else { 
        x.className = x.className.replace(" markit-show", "");
    }
}
</script>
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/auction.css')}}">
@endpush

