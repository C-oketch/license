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
                    <img src="{{asset('images/logo.png')}}" class="expand" />
                    <h2>County Government of Kisumu</h2>
                    <p>Energy and Mining Department</p>
                    <h3>E-Licensing Portal</h3>
                  </div>
                </div>
                <div class=" main_sect main_sect_right">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif
                  <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                      {{ csrf_field() }}
                    <div class="login_header"><h2>Forgot Pasword</h2></div>
                      <div class="form_wrapper">
                        <div class="uppersect clearfix">

        <div class="sub-group">
            <label>E-Mail Address</label>
                <input type="email" class="" name="email" value="{{ old('email') }}" placeholder="Enter email" required>
                @if ($errors->has('email'))
                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                @endif
        </div>
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
