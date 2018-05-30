@extends('layouts.user')
@section('title', 'County Government of Kisumu')
@section('content')

  @include('include.user_left')


  <div class="content dashboard">
    <div class="overlay"></div>
    <div class="row clearfix">
      <div class="dash_menu">
        <div class="dash_wrap">
          <!-- mobile_nav_wrapper -->
          <div id="mobile_nav_wrapper">
            <div class="mobile-nav-content">
              <div class="user right column">
                <a href="login.html" class="profile_pic"><img src="images/prof.jpg" alt="user" /></a>
                <a href="javascript:void()"><span>Emmanuel Rono</span> <i class="fa fa-chevron-down" aria-hidden="true"></i></a>

              </div>
              <!-- <div class="global_search column large-12">
                <form>
                  <input type="text" placeholder="Search" />
                </form>
              </div> -->
              <ul class="mobile-nav">
                <li>
                 <a href="dashboard.html" class="active"><i class="fa fa-line-chart" aria-hidden="true"></i>Dashboard</a>
               </li>
                <li class="">
                  <a href="myapplication.html" class="toggle"><i class="fa fa-list-alt" aria-hidden="true"></i>my application</a>
                  <!-- <ul class="sub-nav">
                    <li><a href="#">Sub-menu 1</a></li>
                    <li><a href="#">Sub-menu 2</a></li>
                    <li><a href="#">Sub-menu 3</a></li>
                    <li><a href="#">Sub-menu 4</a></li>
                  </ul> -->
                </li>

              </ul>
              <!-- <div class="copyright">
                Android &copy; 2015.<br/>All rights reserved
              </div> -->
            </div>
          </div>
          <!-- mobile_nav_wrapper end -->
        </div>
      </div>






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

                  <div class="column large-4">
                    <img src="images/logo.png" class="expand" />
                  </div>
                  <div class="column title_county large-4">
                    <h2>county government of kisumu</h2>
                    <h3>E-Licensing</h3>
                  </div>
                  <div class="columns_right">
                    <img src="images/erc.png" class="expand" />
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
                      <a href="application_form.html">get service</a>
                    </div>
                  </div>
                  <div class="large-4 grid column">
                    <div class="grid_wrap">
                      <h3>Petroleum Business Retail Licence</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      </p>
                      <a href="application_form.html">get service</a>
                    </div>
                  </div>
                  <div class="large-4 grid column">
                    <div class="grid_wrap">
                      <h3>Petroleum Business Retail Licence</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      </p>
                      <a href="v">get service</a>
                    </div>
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
