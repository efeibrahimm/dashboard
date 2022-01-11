<div class="col-md-3 left_col" style="background: #1C1F33 !important">
    <div class="left_col scroll-view" style="background: #1C1F33 !important">
      <div class="navbar nav_title" style="border: 0; background: #1C1F33 !important">
        <a href="{{url('/')}}" class="site_title text-warning"><i class="fa fa-bullseye text-warning"></i><span class="text-warning pl-3">Admin Panel</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="{{asset('dashboard/production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Hoşgeldin,</span>
          <h2>{{ auth()->user()->name}}</h2>
        </div>
      </div>


      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Anasayfa </a> </li>
            <li><a href="{{ route('admin.general-settings') }}"><i class="fa fa-cogs"></i>  Genel Ayarlar  </a> </li>
            <li><a href="{{ route('admin.blogs') }}"><i class="fa fa-cogs"></i> Blog  </a> </li>
          </ul>
        </div>
      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small" style="background: #1C1F33 !important">
        <a data-toggle="tooltip" data-placement="top" title="Settings" style="background-color: #1C1F33">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen" style="background-color: #1C1F33">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock" style="background-color: #1C1F33">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('logout')}}" class="bg-warning">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>

  <!-- top navigation -->
  <div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
        <ul class=" navbar-right">
          <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
              <img src="{{asset('dashboard/production/images/img.jpg')}}" alt="">{{ auth()->user()->name}}
            </a>
            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item"  href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Çıkış Yap</a>
            </div>
          </li>

          <li role="presentation" class="nav-item dropdown open">

          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- /top navigation -->
