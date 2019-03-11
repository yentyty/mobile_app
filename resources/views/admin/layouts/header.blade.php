<header class="main-header">
        <a href="admin_asset/index2.html" class="logo" style="background-color:#1DA099;">
          <span class="logo-mini"><b>M</b>OBI</span>
          <span class="logo-lg" style="font-weight:bold; font-size:120%;">* MobileStore *</span>
        </a>
        <nav class="navbar navbar-static-top" style="background-color:#20B2AA;">
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">             
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="admin/avatar/@if(Auth::user()){{Auth::user()->avatar}}@endif" class="user-image" alt="User Image">
                  <span class="hidden-xs"> @if(Auth::user()){{Auth::user()->username}} @endif</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header" style="background-color:#20B2AA;">
                    <img src="admin/avatar/@if(Auth::user()){{Auth::user()->avatar}}@endif" class="img-circle" alt="User Image">
                    <p>
                        @if(Auth::user()){{Auth::user()->name}} @endif
                      <small>@if(Auth::user()){{Auth::user()->email}} @endif</small>
                      <small>@if(Auth::user()){{Auth::user()->phone}} @endif</small>
                    </p>
                  </li>
                  
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{asset('admin/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>