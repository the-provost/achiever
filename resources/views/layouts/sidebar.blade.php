
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/avatars/svg/001-man.svg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <router-link to="/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-th"></i>
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/vision" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Vision
                <span class="right badge badge-danger">New</span>
              </p>
            </router-link>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Goals
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/listgoals" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>'The List'</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/statusboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Planner-Tracker</p>
                </router-link>
              </li>
              {{-- <li class="nav-item">
                <router-link to="/home" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </router-link>
              </li> --}}
            </ul>
          </li>

          <li class="nav-header">SCHEDULES</li>
          <li class="nav-item">
            <router-link to="/calendar" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </router-link>
          </li>


          <li class="nav-header">QUICK LINKS</li>
          <li class="nav-item">
            <router-link to="/shorttermgoals" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Short Term Goals</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/longtermgoals" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Long Term Goals</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/myjourney" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Journey so far</p>
            </router-link>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>

