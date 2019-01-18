<aside class="main-sidebar">
        <section class="sidebar" style="height: auto;">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="admin_asset/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <ul class="sidebar-menu tree" data-widget="tree">
            <li>
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
              </a>
            </li>
            <li>
            <a href="{{asset('admin/logout')}}">
                <i class="fa fa-share"></i> <span>Logout</span>
              </a>
            </li>
          </ul>
        </section>
      </aside>