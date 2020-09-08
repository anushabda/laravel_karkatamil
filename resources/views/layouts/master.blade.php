
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>karka tamil</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/css/app.css">
  
 
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bgcolorbv textcolorba bold">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link navlinktop" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item logo-display">
        <!-- Brand Logo -->
    <a href="index3.html" class="brand-link nav-link">
      <img src="{{asset('/images/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
     
    </a>

</li>
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link  navlinktop " >HOME</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link navlinktop">CONTACT</a>
      </li>
    </ul>

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

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     <!-- Authentication Links -->
     @guest
                            <li class="nav-item">
                                <a class="nav-link navlinktop" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link navlinktop" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link navlinktop dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 bgcolorbv textcolorbv">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('/images/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Karka Tamil</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/images/profile.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        @guest
          <a href="#" class="d-block">Welcome</a>
        @else
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        @endguest
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" id="sidebarmenu">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </router-link>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon  fas fa-cog"></i>
              <p>
                Basics
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
            @foreach($categories as $category)
              <li class="nav-item">
                <router-link :to="{name:'basics',params:{category:<?php echo "'".$category->category_english."'" ?>}}" class="nav-link pl-4"> 
                  <i class="fas fa-gift nav-icon"></i>
                  <p>{{$category->category_english}}</p>
                </router-link>
              </li>
              @endforeach
              
            </ul>
          </li>
          <li class="nav-item">
            <router-link to="/profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
               
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/example" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Example
               
              </p>
            </router-link>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <main >
            @yield('content')
  </main>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
        Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
<!-- REQUIRED SCRIPTS 
<script src="/js/app.js"></script>-->
</div>

<script src="/js/app.js"></script>
</body>
</html>
