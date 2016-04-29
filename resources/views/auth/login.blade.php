{!! Form::open(['url' => '/auth/login', 'class' => 'login']) !!}

{!! Form::field_wrap('Email', 'email', 'email') !!}
{!! Form::field_wrap('Password', 'password', 'password') !!}

<p class="forgot"><a href="#">Forgot Password?</a></p>

{!! Form::button('log in', ["class" => "button button-block", "type" => "submit"]) !!}

{!! Form::close() !!}
