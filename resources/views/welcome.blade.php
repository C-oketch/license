@extends('layouts.landing')
@section('title', 'County Government of Kisumu')
@section('content')
		<div class="nav_wrap home">
				<div class="container">
					<div class="row clearfix">
							<div class=" column main_pg">
								<a href="#"><img src="images/logo.png" class="expand" /></a>
								<a href="#">County Government of Kisumu</a>
							</div>
							<div class="messaging column right">
								
								@if (Route::has('login'))
												@if (Auth::check())
														<a href="{{ url('/home') }}">Dashboard</a>
												@else
														<a href="{{ url('/login') }}">Sign In</a>
														<a href="{{ url('/register') }}">Register</a>
												@endif
								@endif



							</div>
						</div>
				</div>
		</div>
		<div class="flexslider">
		  <ul class="slides">
		    <li style="background-image:url(images/slide.jpg);">
					<div class="content">
						<div class="inner">
							<div class="display_table">
								<div class="row clearfix">
									<div class="row clearfix">
										<div class="display_table_cell">
											<div class="large-5">
												<h2>Register</h2>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper.
													Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.
												</p>
												<a href="javascript:void()">Learn More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		    </li>
				<li style="background-image:url(images/slide.jpg);">
					<div class="content">
						<div class="inner">
							<div class="display_table">
								<div class="row clearfix">
									<div class="row clearfix">
										<div class="display_table_cell">
											<div class="large-5">
												<h2>Register</h2>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper.
													Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.
												</p>
												<a href="javascript:void()">Learn More</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			 </li>
		  </ul>
		</div>
		<div class="content">
			<div class="inner">
				<div class="row clearfix">
					<div class="adv clearfix">
						<div class="large-3 column">
							<div class="adv_wrap">
								<div class="icon">
									<div class="distable">
										<div class="discell"><img src="images/icon1.png" class="expand"/></div>
									</div>
								</div>
								<h2>fast</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper.
								</p>
							</div>
						</div>
						<div class="large-3 column">
							<div class="adv_wrap">
								<div class="icon">
									<div class="distable">
										<div class="discell"><img src="images/icon2.png" class="expand"/></div>
									</div>
								</div>
								<h2>Easy</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper.
								</p>
							</div>
						</div>
						<div class="large-3 column">
							<div class="adv_wrap">
								<div class="icon">
									<div class="distable">
										<div class="discell"><img src="images/icon3.png" class="expand"/></div>
									</div>
								</div>
								<h2>reliable</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper.
								</p>
							</div>
						</div>
						<div class="large-3 column">
							<div class="adv_wrap">
								<div class="icon">
									<div class="distable">
										<div class="discell"><img src="images/icon4.png" class="expand"/></div>
									</div>
								</div>
								<h2>convinient</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content register_det sects">
			<div class="inner">
				<div class="row clearfix">
					<div class="write_up clearfix">
						<div class="column large-4">
							<img src="images/register.jpg" class="expand"/>
						</div>
						<div class="column large-8">
							<h2>Register</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper.
								Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper.
								Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.
							</p>
						</div>
					</div>


				</div>
			</div>
		</div>
		<div class="content sects not_det">
			<div class="inner">
				<div class="row clearfix">
					<div class="write_up clearfix">
						<div class="columns_right large-4">
							<img src="images/nots.png" class="expand"/>
						</div>
						<div class="column large-8">
							<h2>Register</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper.
								Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper.
								Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content sects app_det">
			<div class="inner">
				<div class="row clearfix">
					<div class="write_up clearfix">
						<div class="column large-4">
							<img src="images/apply.jpg" class="expand"/>
						</div>
						<div class="column large-8">
							<h2>apply online</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper.
								Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper.
								Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content get_start">
			<div class="inner">
				<div class="row clearfix">
					<div class="write_up clearfix">
						<h1>Get Started?</h1>
						<a href="javascript:void();">Register Now</a>
					</div>
				</div>
			</div>
		</div>
@endsection
