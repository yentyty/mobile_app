<aside class="main-sidebar">
        <section class="sidebar" style="height: auto;">
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
            <a href="{{asset('admin/home/index')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li>
            <a href="{{asset('admin/user/listuser')}}">
                <i class="fa fa-laptop"></i>
                <span>User</span>
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