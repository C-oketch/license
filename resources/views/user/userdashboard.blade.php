@extends('layouts.user')
@section('title', 'County Government of Kisumu')
@section('content')

<div class=" left_margin clearfix">
    <div class="breadcrumb_wrap">
      <div class="breadcrumb clearfix">
        <div class="column crumb large-7">
          <span class="static"><i class="fa fa-home" aria-hidden="true"></i></span>
          <span>Dashboard</span>
          <span class="active">Services</span>
        </div>
      </div>
    </div>
    <div class="column large-12 content_wrap clearfix">
      <div class="column large-12">
        <div class="report_analysis clearfix">
          <div class="row clearfix">
            <div class="partners clearfix">
              <div class="partners_wrap clearfix">
                <div class="column large-4">
                  <img src="{{asset('images/logo.png')}}" class="expand" />
                </div>
                <div class="column title_county large-4">
                  <h2>county government of kisumu</h2>
                  <h3>E-Licensing</h3>
                </div>
                <div class="columns_right">
                  <img src="images/erc.png" class="expand" />
                </div>
              </div>
            </div>
            <div class="licence clearfix">
              <div class="large-4 grid column">
                <div class="grid_wrap">
                  <h3>Petroleum Business Retail Licence</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  </p>
                  <a href="{{ route('petrol_application') }}">get service</a>
                </div>
              </div>
              <div class="large-4 grid column">
                <div class="grid_wrap">
                  <h3>Petroleum Business Retail Licence</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  </p>
                  <a href="{{ route('petrol_application') }}">get service</a>
                </div>
              </div>
              <div class="large-4 grid column">
                <div class="grid_wrap">
                  <h3>Petroleum Business Retail Licence</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  </p>
                  <a href="{{ route('petrol_application') }}">get service</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
