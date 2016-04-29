@extends('templates.main')
@section('content')

  @include('components/navbar')

    <div class="member-wrapper">
      <div class="member-accordian">
        <div class="m-accordian-title">
          <div class="initial">A</div>
          <span>Avery Bullock</span>
          <div class="expand"></div>
        </div>
        <div class="item hide">
          <div class="member-info">
            <div class="m-info-divider">
              <img class="item-img" src="images/selfie.png">
              <p>
                <span>averybull22@gmail.com</span>
                <span>Birdhouse Engineer</span>
                <span>Online: 22 min ago</span>
              </p>
            </div>
            <div class="m-info-divider">
              <span>Send Message</span>
              <img class="delete" src="images/delete.png" height="22">
            </div>
          </div>
        </div>
      </div>
      <div class="member-accordian">
        <div class="m-accordian-title">
          <div class="initial">D</div>
          <span>Denzel Philidelphia</span>
          <div class="expand"></div>
        </div>
      </div>
    </div>

  @include('components/menu')

@stop
