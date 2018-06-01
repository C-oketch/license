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
               <li class="has-children">
                 <a href="users.html" class="toggle"><i class="fa fa-th"></i>manage users</a>
                 <ul class="sub-nav">
          @can('view_users')
          <li><a href="{{ route('useradmin') }}">Administrators</a></li>
          <li><a href="{{ route('users.index') }}">Users</a></li>
            @endcan
            @can('add_users')
          <li><a href="{{ route('users.create') }}">New User</a></li>
          @endcan
                </ul>
               </li>
                <li class="has-children">
                  <a href="myapplication.html" class="toggle"><i class="fa fa-list-alt" aria-hidden="true"></i>manage application</a>
                  <ul class="sub-nav">

                   @can('add_posts')
                     <li><a href="{{ route('posts.create') }}">New Applications</a></li>
                     <li><a href="{{ route('posts.index') }}">Approved Applications</a></li>
                     <li><a href="{{ route('posts.index') }}">Pending Applications</a></li>
                     <li><a href="{{ route('posts.index') }}">Rejected Applications</a></li>
                   @endcan
                 </ul>
                </li>
                <li>
                 <a href="{{ route('payments.index') }}" class="active"><i class="fa fa-line-chart" aria-hidden="true"></i>manage payments</a>
               </li>
               <li class="">
                 <a href="myapplication.html" class="toggle"><i class="fa fa-pie-chart"></i></i>Reports</a>
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
