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
											<img src="images/logo.png" class="expand" />
											<h2>County Government of Kisumu</h2>
											<p>Energy and Mining Department</p>
											<h3>E-Licensing Portal</h3>
										</div>
									</div>
									<div class=" main_sect main_sect_right">

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
											<div class="login_header"><h2>Register</h2></div>
												<div class="form_wrapper">
													<div class="uppersect clearfix">

  <div class="left form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <label>Full Name</label>
          <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter full Names" required autofocus>
          @if ($errors->has('name'))
              <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
          @endif
  </div>
  <div class="right form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <label>Email / ID Number</label>
          <input  type="text" class="form-control" name="email" value="{{ old('email') }}" required>
          @if ($errors->has('email'))
              <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
          @endif
  </div>


  <div class="left form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <label for="password">Password</label>
  <input id="password" type="password" class="form-control" name="password" required>
    @if ($errors->has('password'))
    <span class="help-block">  <strong>{{ $errors->first('password') }}</strong></span>
    @endif
  </div>
														<!-- <div class="form-group left">
															<label>password</label>
															<input type="text" placeholder="Enter details" />
														</div> -->
  <div class="form-group right">
    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
  </div>




														<!-- <label>organization name</label>
														<input type="text" placeholder="Enter details" /> -->
													</div>
													<div class="bottom_sect clearfix">
														<div class="left">
															<div class="form-group">
																<input type="checkbox" name="check" id="terms" /><label for="terms">agree to terms of service</label>
															</div>
														</div>
													</div>
													<div class="sub-group"><input type="submit" value="Register" /></div>
													<div class="alternate"><a href="{{ url('/login') }}">Do you have an account? Login here</a></div>
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
