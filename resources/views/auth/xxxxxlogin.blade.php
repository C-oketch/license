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
              <div class="large-5 main_sect">
                <img src="images/logo.png" class="expand" />
                <h2>County Government of Kisumu</h2>
                <p>Energy and Mining Department</p>
                <h3>E-Licensing Portal</h3>

                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                    <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
              <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                            @endif
                        </div>
                    </div>
                  <!-- <label>Email / ID Number</label>
                  <input type="text" placeholder="Your Email or ID Number" />
                   -->
                  <!-- <label>password</label>
                  <input type="text" placeholder="Enter details" /> -->
                  <!-- <label>organization name</label>
                  <input type="text" placeholder="Enter details" /> -->
                  <input type="submit" value="sign in" />

                  <div class="bottom_sect clearfix">
                    <div class="left"><input type="checkbox" /><a href="javascript:void()">Remember Me.</a></div>
                    <div class="right">
                      <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                    </div>
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
@endsection
