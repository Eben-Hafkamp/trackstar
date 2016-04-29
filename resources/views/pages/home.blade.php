@extends('templates.homepage')
@section('content')

<div class="hero-img">
  <img id="backdrop" src="images/homescreen.jpg">
  <div class="page-header">
    <img src="images/logo.png" height="32">
    <span>login</span>
  </div>
  <div class="jumbotron">
    <h1>
      start tracking your inventory now with TrackStar
    </h1>
    <p>
      TrackStar is an easy to use web app for storing and organizing your inventory and letting you know who in your bussiness
      is using your items and when to have them returned. Suitable for any size of bussiness.
    </p>
  </div>
  <!-- <img id="icon-cycle" src="images/home-screen-cycle.png"> -->
  <button type="button" class="download-btn"><span>Download App</span><span>Free Sign Up</span></button>
  <button type="button" class="demo-btn">Watch Demo</button>
</div> <!-- closing the hero-img -->

@stop
