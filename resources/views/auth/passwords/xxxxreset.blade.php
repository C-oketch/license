@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






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
                    <img src="images/logo.png" class="expand" />
                    <h2>County Government of Kisumu</h2>
                    <p>Energy and Mining Department</p>
                    <h3>E-Licensing Portal</h3>
                  </div>
                </div>
                <div class=" main_sect main_sect_right">

                  <form action="dashboard.html">
                    <div class="login_header"><h2>Forgot Pasword</h2></div>
                      <div class="form_wrapper">
                        <div class="uppersect clearfix">
                          <div class="form-group left">
                            <label>New password</label>
                            <input type="text" placeholder="Enter details" />
                          </div>
                          <div class="form-group right">
                            <label>Confirm password</label>
                            <input type="text" placeholder="Enter details" />
                          </div>
                          <!-- <label>organization name</label>
                          <input type="text" placeholder="Enter details" /> -->
                        </div>
                        <div class="sub-group"><input type="submit" value="Reset Password" /></div>
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
