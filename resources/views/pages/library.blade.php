@extends('templates.main')
@section('content')

  @include('components/navbar')

  <!-- Wraps the heading and category-bar on larger viewports -->
  <div class="heading-lrg-srn">

    <!-- The user's avatar and some basic information -->
    <div class="heading">
      <div class="heading-title">
        <span>{{ print_r($checked) }}</span>
      </div>
      <div class="heading-avatar">
        <img src="images/selfie.png" height="80">
      </div>
      <div class="heading-text">
        <span class="name"></span>
        <span class="name"></span>
        <br>
        <span></span>
        <span></span>
      </div>
    </div>

    <!-- A bar with 4 categories which split the items into various states -->
    <div class="category-bar">
      <div class="heading-title">
        <span>Activity</span>
      </div>
      <input type="radio" id="blue-toggle" name="label-color" checked="checked">
      <label class="category b" for="blue-toggle">
        <span class="count blue">73</span>
        <span>inventory</span>
      </label>
      <input type="radio" id="yellow-toggle" name="label-color">
      <label class="category y" for="yellow-toggle">
        <span class="count yellow">16</span>
        <span>booked</span>
      </label>
      <input type="radio" id="green-toggle" name="label-color">
      <label class="category g" for="green-toggle">
        <span class="count green">11</span>
        <span>in use</span>
      </label>
      <input type="radio" id="red-toggle" name="label-color">
      <label class="category r" for="red-toggle">
        <span class="count red">2</span>
        <span>waiting</span>
      </label>
    </div>

  </div>

  <!-- A toggle to view the library or a summary of analytics behind the library -->
  <div class="toggle">
    <h4 class="active">Library</h4>
    &nbsp | &nbsp
    <h4>Summary</h4>
  </div>

  <!-- Wraps the item-wrapper and search-bar in a column flex on larger viewports -->
  <div class="item-lrg-srn">

    <!-- A search bar -->
    <div class="search-bar">
      <form class="search" action="#" method="#">
        <input type="text" name="name" placeholder="Search">
      </form>
    </div>

    <!-- This will be where all of our library items are displayed in an accordian manner -->
    <ul class="item-wrapper">

      @foreach($items as $item)

      <li class="item-accordian">
        <div class="accordian-title">
          <div class="color red-back"></div>
          <span>{{ $item->name }}</span>
          <div class="expand"></div>
        </div>
        <div class="item hide">
          <p>
            No description available. <span>Add description</span>
          </p>
          <div class="item-info">
            <img class="item-img" src="images/no-image.png">
            <p>
              <span>outstanding by 2 days</span>
              <span>Being used by Pablo Martinez</span>
              <span>Send Pablo a message</span>
            </p>
            <img class="delete" src="images/delete.png" height="22">
          </div>
        </div>
      </li>

      @endforeach

      <!-- <li class="item-accordian">
        <div class="accordian-title">
          <div class="color blue-back"></div>
          <span>Howler Tomb</span>
          <div class="expand"></div>
        </div>
        <div class="item hide">
          <p>
            No description available. <span>Add description</span>
          </p>
          <div class="item-info">
            <img class="item-img" src="images/no-image.png">
            <p>
              <span>outstanding by 2 days</span>
              <span>Being used by Pablo Martinez</span>
              <span>Send Pablo a message</span>
            </p>
            <img class="delete" src="images/delete.png" height="22">
          </div>
        </div>
      </li> -->

    </ul>

  </div>

  <!-- A window that reflects the active item's content. Only available on larger viewports -->
  <div class="item-pane">
    <div class="pane-title">
      <h4>The Red Cage</h4>
      <img src="images/delete.png" height="22">
    </div>
    <div class="pane-body">
      <p>
        No Description <span>Add Description</span>
      </p>
      <img src="images/no-image.png" height="100">
    </div>
    <hr>
    <span class="outstanding">outstanding by 2 days</span>
    <span>Being used by Pablo Martinez</span>
    <div class="user">
      <img src="images/selfie.png" height="54">
      <span>Send Pablo a message</span>
    </div>
  </div>

@stop
