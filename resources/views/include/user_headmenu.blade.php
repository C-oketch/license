<div class="nav_wrap bg_white">
      <div class="container">

        <div class="row clearfix">
            <div class="logo column large-2">
              <a href="#">County Government of Kisumu</a>
            </div>

            <div class="large-9 columns_right clearfix">
              <div class="humburg left large-1"><a href="javascript:void()"><i class="fa fa-bars" aria-hidden="true"></i></a></div>
              <div class="global_search column large-4">
                <form>
                  <input type="text" placeholder="Search" />
                </form>
              </div>

              <!-- <div class="add_help column">
                <a href="javascript:void()" class="add_new" title="Add New"><i class="fa fa-plus" aria-hidden="true"></i><span>add new</span></a>
                <a href="javascript:void()" title="help"><i class="fa fa-question" aria-hidden="true"></i><span>help</span></a>
              </div> -->


              <div class="messaging column right">
                <a href="javascript:void()"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                <a href="javascript:void()"><i class="fa fa-cog" aria-hidden="true"></i></a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <i class="glyphicon glyphicon-log-out"></i> Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

              </div>
              <div class="user right column">
                <a href="login.html" class="profile_pic"><img src="images/prof.jpg" alt="user" /></a>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }}<i class="fa fa-chevron-down" aria-hidden="true"></i>
                </a>

                <!-- <a href="javascript:void()"><span>Emmanuel Rono</span> <i class="fa fa-chevron-down" aria-hidden="true"></i></a> -->
              </div>
            </div>
          </div>
      </div>
  </div>
