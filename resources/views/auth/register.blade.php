<div id="overlay-signup" class="hide">

  <div class="signup-login-toggler">

      <ul class="tab-group"> <!-- toggle control panel -->
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content"> <!-- toggle content -->
        <div id="signup"> <!-- toggle 1 -->
          <h1>Sign Up for Free</h1>
          {!! Form::open(['class' => 'signup', 'url' => '/auth/register']) !!}

            <div class="top-row">
              {!! Form::field_wrap('First Name', 'firstName', 'text') !!}
              {!! Form::field_wrap('Last Name', 'lastName', 'text') !!}
            </div>

            {!! Form::field_wrap('Email', 'email', 'email') !!}
            {!! Form::field_wrap('Create Password', 'password', 'password') !!}

            {!! Form::button('get started', ["class" => "button button-block", "type" => "submit"]) !!}

          {!! Form::close() !!}
        </div>

        <div id="login"> <!-- toggle 2 -->
          <h1>Welcome Back!</h1>

          @include('auth.login')

        </div>

      </div><!-- content toggler -->
    </div><!-- form container -->
</div> <!-- overlay wrapper -->
