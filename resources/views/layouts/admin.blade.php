<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin Panel</title>
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('admin') }}/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  @yield('style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ asset('admin') }}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin') }}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('user.profile') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ (request()->is('admin/dashboard')) ? 'active': '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard   
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('category.index') }}" class="nav-link {{ (request()->is('admin/category*')) ? 'active': '' }}">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Categories
              </p>
            </a>                    
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('tag.index') }}" class="nav-link {{ (request()->is('admin/tag*')) ? 'active': '' }}">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Tags
              </p>
            </a>                    
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('post.index') }}" class="nav-link {{ (request()->is('admin/post*')) ? 'active': '' }}">
              <i class="nav-icon fas fa-pen-square"></i>
              <p>
                Post
              </p>
            </a>                    
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('contact.index') }}" class="nav-link {{ (request()->is('admin/contact*')) ? 'active': '' }}">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Messages
              </p>
            </a>                    
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('user.index') }}" class="nav-link {{ (request()->is('admin/user*')) ? 'active': '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('setting.index') }}" class="nav-link {{ (request()->is('admin/setting')) ? 'active': '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Setting
              </p>
            </a>
          </li>
          <li class="nav-header">Your Account</li>
          <li class="nav-item mt-auto">
            <a href="{{ route('user.profile') }}" class="nav-link {{ (request()->is('admin/profile')) ? 'active': '' }}">
              <i class="nav-icon far fa-user"></i>
              <p>
                Your Profile
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          <li class="text-center mt-5">
            <a href="{{ route('website') }}" class="btn btn-primary text-white" target="_blank">
              <p class="mb-0">
                View Website
              </p>
            </a>                    
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <div class="mb-0">Developed By Zakir on <a href="https://www.youtube.com/playlist?list=PLl4v4A2HI0YixTm5AsoTu-sKxiQti4-r6">Laravel Blog Development </a>Tutorial Series</div>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('admin') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin') }}/js/adminlte.min.js"></script>
<script src="{{ asset('admin') }}/js/bs-custom-file-input.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@yield('script')
<script>
  @if(Session::has('success'))
  toastr.success("{{ Session::get('success') }}");
  @endif
  $(document).ready(function () {
    bsCustomFileInput.init()
  })
</script>
</body>
</html>
