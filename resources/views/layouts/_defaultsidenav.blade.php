
      <nav class="sidebar sidebar-offcanvas active" id="sidebar">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('dashboard')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Boarding House </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('boardings.default') }}">Boarding Houses</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('rooms.default') }}">Room</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Categories</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Municipalities</a></li>
              </ul>
            </div>
          </li>
             </nav>
          