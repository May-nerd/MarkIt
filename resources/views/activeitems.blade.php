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
         <p class="markit-center"><img src="/uploads/minions.png" class="markit-circle" style="height:106px;width:106px" alt="User"></p>
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
          <a class="markit-button markit-block markit-theme-l1 markit-left-align remove-anchor-design" data-toggle="tooltip" title="Edit Profile" href="/profile/{{ Auth::user()->username }}/edit"><i class="fa fa-pencil fa-fw markit-margin-right"> Edit Profile</i></a>
        </div>      
      </div>
      <br>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="markit-col m7">
      
      <div class="markit-container markit-card-2 markit-white markit-round markit-margin"><br>
        <img src="/uploads/minions.png" alt="Avatar" class="markit-left markit-circle markit-margin-right user-icon" style="width:60px">
        <span class="markit-right markit-opacity">1 min</span>
        <h4>John Doe</h4>
        <h6>Rating: 5 Immortal Pearls</h6><br>
        <hr class="markit-clear">
        <p>Qilin Horns</p>
          <div class="markit-row-padding" style="margin:0 -16px">
            <div class="markit-half">
              <img class="img-responsive posted-image" src="/uploads/qilin.jpg" alt="Item Photo">
            </div>
            <div class="markit-half">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <button type="button" class="markit-button markit-theme-d1 markit-margin-bottom"><i class="fa fa-check"></i>  Mark<span> (5)</span></button>
      </div>

      <div class="markit-container markit-card-2 markit-white markit-round markit-margin"><br>
        <img src="/uploads/minions.png" alt="Avatar" class="markit-left markit-circle markit-margin-right user-icon" style="width:60px">
        <span class="markit-right markit-opacity">1 min</span>
        <h4>John Doe</h4><br>
        <hr class="markit-clear">
        <p>Drop of Minion's Might</p>
          <div class="markit-row-padding" style="margin:0 -16px">
            <div class="markit-half">
              <img class="img-responsive posted-image" src="/uploads/minions.png" alt="Item Photo">
            </div>
            <div class="markit-half">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <button type="button" class="markit-button markit-theme-d1 markit-margin-bottom"><i class="fa fa-check"></i>  Mark</button>
      </div>
      
      <div class="markit-container markit-card-2 markit-white markit-round markit-margin"><br>
        <img src="/uploads/minions.png" alt="Avatar" class="markit-left markit-circle markit-margin-right user-icon" style="width:60px">
        <span class="markit-right markit-opacity">16 min</span>
        <h4>Jane Doe</h4><br>
        <hr class="markit-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="markit-button markit-theme-d1 markit-margin-bottom"><i class="fa fa-check"></i>  Mark</button> 
      </div>  

      <div class="markit-container markit-card-2 markit-white markit-round markit-margin"><br>
        <img src="/uploads/minions.png" alt="Avatar" class="markit-left markit-circle markit-margin-right user-icon" style="width:60px">
        <span class="markit-right markit-opacity">32 min</span>
        <h4>Angie Jane</h4><br>
        <hr class="markit-clear">
        <p>Have you seen this?</p>
        <img src="/w3images/nature.jpg" style="width:100%" class="markit-margin-bottom">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="markit-button markit-theme-d1 markit-margin-bottom"><i class="fa fa-check"></i>  Mark</button> 
      </div> 
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="markit-col m2">
      <div class="markit-card-2 markit-round markit-white markit-center">
        <div class="markit-container">
          <p>Nearest Auction to End:</p>
          <p>6 Days, 23 Hours left</p>
          <button type="button" class="btn btn-success" style="width: 100%"><strong>OPEN</strong></button>
          <p>Sat, 27 May 2017</p>
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
@endpush

