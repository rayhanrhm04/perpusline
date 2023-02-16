<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

  </ul>
  <ul class="navbar-nav ml-auto">
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit" class="btn btn-success">Logout</button>
    </form>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position:fixed;">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <span class="brand-text font-weight-light">Log In Perpusline</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">{{ UcFirst(Auth::user()->username) }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @can('dashboard')
        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        @endcan
        <li class="nav-item {{ (request()->is('admin/user_management*')) ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ (request()->is('admin/user_management*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              User Management
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            @can('user-list')
            <li class="nav-item">
              <a href="{{ route('user.index') }}" class="nav-link {{ (request()->is('admin/user_management/user*')) ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Users</p>
              </a>
            </li>
            @endcan

            @can('role-list')
            <li class="nav-item">
              <a href="{{ route('role.index') }}" class="nav-link {{ (request()->is('admin/user_management/role*')) ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Role</p>
              </a>
            </li>
            @endcan
          </ul>
        </li>
        @can('book-list')
        <li class="nav-item">
          <a href="{{ route('book.index') }}" class="nav-link {{ (request()->is('admin/book*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Book
            </p>
          </a>
        </li>
        @endcan
        <li class="nav-item">
          <a href="{{ route('tag.index') }}" class="nav-link {{ (request()->is('admin/tag*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-tag"></i>
            <p>
              Tags
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('category.index') }}" class="nav-link {{ (request()->is('admin/category*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Category
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>