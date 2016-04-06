<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-rocket"></i> <span>VisitorSYS</span></a>
    </div>
    <div class="clearfix"></div>
    <!-- menu prile quick info -->
    <div class="profile">
      <div class="profile_pic">
        <img src="{{url('images/default-user.jpg')}}" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{ $user->name }}</h2>
      </div>
    </div>
    <!-- /menu prile quick info -->
    <br />
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li>
            <a href="{{url('/')}}/"><i class="fa fa-home"></i> Home </a>
          </li>
          <li>
            <a href="{{url('/visitors')}}"><i class="fa fa-list-alt"></i> All Visitors </a>
          </li>
          <li>
            <a href="{{url('visitors/new')}}"><i class="fa fa-edit"></i> New Visitor </a>
          </li>
          <li>
            <a href="{{url('/visitors/search')}}"><i class="fa fa-search"></i> Visitor Search </a>
          </li>
          <li>
            <a><i class="fa fa-barcode"></i> Barcode Management <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none">
              <li><a href="empty.html">Create New </a></li>
              <li><a href="empty.html">Find Visitor</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->
    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <!--<a data-toggle="tooltip" data-placement="top" title="Settings">-->
      <!--<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>-->
      <!--</a>-->
      <!--<a data-toggle="tooltip" data-placement="top" title="FullScreen">-->
      <!--<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>-->
      <!--</a>-->
      <!--<a data-toggle="tooltip" data-placement="top" title="Lock">-->
      <!--<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>-->
      <!--</a>-->
      <a href="{{url('logout')}}" data-toggle="tooltip" data-placement="top" title="Logout">
      <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>