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
         <p class="markit-center"><img src="/img/img.jpg" class="markit-circle" style="height:106px;width:106px" alt="Avatar"></p>
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
      
      <!-- Alert Box -->
    <!--   <div class="markit-container markit-display-container markit-round markit-theme-l4 markit-border markit-theme-border markit-margin-bottom markit-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="markit-button markit-theme-l3 markit-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div> -->
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="markit-col m7">
    
      <div class="markit-row-padding">
        <div class="markit-col m12">
          <div class="markit-card-2 markit-round markit-white">
            <div class="markit-container markit-padding">
              <h6 class="markit-opacity">Social Media template by w3.css</h6>
              <p contenteditable="true" class="markit-border markit-padding">Status: Feeling Blue</p>
              <button type="button" class="markit-button markit-theme"><i class="fa fa-pencil"></i>  Post</button> 
            </div>
          </div>
        </div>
      </div>
      
      <div class="markit-container markit-card-2 markit-white markit-round markit-margin"><br>
        <img src="/w3images/avatar2.png" alt="Avatar" class="markit-left markit-circle markit-margin-right" style="width:60px">
        <span class="markit-right markit-opacity">1 min</span>
        <h4>John Doe</h4><br>
        <hr class="markit-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class="markit-row-padding" style="margin:0 -16px">
            <div class="markit-half">
              <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="markit-margin-bottom">
            </div>
            <div class="markit-half">
              <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="markit-margin-bottom">
          </div>
        </div>
        <button type="button" class="markit-button markit-theme-d1 markit-margin-bottom"><i class="fa fa-check"></i>  Mark</button> 
        <button type="button" class="markit-button markit-theme-d2 markit-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>
      
      <div class="markit-container markit-card-2 markit-white markit-round markit-margin"><br>
        <img src="/w3images/avatar5.png" alt="Avatar" class="markit-left markit-circle markit-margin-right" style="width:60px">
        <span class="markit-right markit-opacity">16 min</span>
        <h4>Jane Doe</h4><br>
        <hr class="markit-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="markit-button markit-theme-d1 markit-margin-bottom"><i class="fa fa-check"></i>  Mark</button> 
        <button type="button" class="markit-button markit-theme-d2 markit-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>  

      <div class="markit-container markit-card-2 markit-white markit-round markit-margin"><br>
        <img src="/w3images/avatar6.png" alt="Avatar" class="markit-left markit-circle markit-margin-right" style="width:60px">
        <span class="markit-right markit-opacity">32 min</span>
        <h4>Angie Jane</h4><br>
        <hr class="markit-clear">
        <p>Have you seen this?</p>
        <img src="/w3images/nature.jpg" style="width:100%" class="markit-margin-bottom">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="markit-button markit-theme-d1 markit-margin-bottom"><i class="fa fa-check"></i>  Mark</button> 
        <button type="button" class="markit-button markit-theme-d2 markit-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div> 
      
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
      <!-- 
      <div class="markit-card-2 markit-round markit-white markit-center">
        <div class="markit-container">
          <p>Friend Request</p>
          <img src="/w3images/avatar6.png" alt="Avatar" style="width:50%"><br>
          <span>Jane Doe</span>
          <div class="markit-row markit-opacity">
            <div class="markit-half">
              <button class="markit-button markit-block markit-green markit-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="markit-half">
              <button class="markit-button markit-block markit-red markit-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
      <br> -->
      
     <!--  <div class="markit-card-2 markit-round markit-white markit-padding-16 markit-center">
        <p>ADS</p>
      </div>
      <br>
      
      <div class="markit-card-2 markit-round markit-white markit-padding-32 markit-center">
        <p><i class="fa fa-bug markit-xxlarge"></i></p>
      </div> -->
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
@endpush

