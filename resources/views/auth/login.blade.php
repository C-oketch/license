@extends('layouts.landing')
@section('title', 'County Government of Kisumu')
@section('content')
<div class="wrapper login_page">
  <div class="content">
    <div class="inner">
      <div class="display_table">
        <div class="row clearfix">
          <div class="row clearfix">
            <div class="display_table_cell">
              <div class="main_reg clearfix">
                <div class="main_sect">
                  <div class="main_sect_wrap">
                    <a href="{{ url('/login') }}"><img src="{{asset('images/logo.png')}}" class="expand" alt="Logo"></a>
                    <!-- <img src="images/logo.png" class="expand" /> -->
                    <h2>County Government of Kisumu</h2>
                    <p>Energy and Mining Department</p>
                    <h3>E-Licensing Portal</h3>
                  </div>
                </div>
                <div class=" main_sect main_sect_right">

              <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
                    <div class="login_header"><h2>Login</h2></div>
                      <div class="form_wrapper">
                        <div class="uppersect clearfix">
                          <div class="form-group left">
                            <label>Email / ID Number</label>
                            <input  type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Your Email or ID Number"  required autofocus>
                            @if ($errors->has('email'))
                        <span class="help-block danger"><strong>{{ $errors->first('email') }}</strong></span>
                            @endif
                          </div>
                          <div class="form-group right">
                            <label>password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block danger"><strong>{{ $errors->first('password') }}</strong></span>
                            @endif
                          </div>
                          <!-- <label>organization name</label>
                          <input type="text" placeholder="Enter details" /> -->
                        </div>
                        <div class="sub-group"><input type="submit" value="sign in" /></div>
                        <div class="bottom_sect clearfix">
                          <div class="left"><input type="checkbox" name="check" id="check" /><label for="check">Remember Me.</label></div>
                          <div class="right"><a href="{{ route('password.request') }}">forgot password?</a></div>
                        </div>
                        <div class="alternate"><a href="{{ url('/register') }}">Don't have an account? Register here </a></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
