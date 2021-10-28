{{-- <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('/dist/img/user.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{$session_data->user_name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ Request::is('dashboard') ? "active" : "" }}"><a href="{{ route('dashboard') }}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <li class="{{ Request::is('user') ? "active" : "" }}"><a href="{{ route('userprofile') }}"><i class="fa fa-link"></i> <span>My Profile</span></a></li>
        <li class="{{ Request::is('myquestion') ? "active" : "" }}"><a href="{{ route('myquestion') }}"><i class="fa fa-link"></i> <span>My Question</span></a></li>
        <li class="{{ Request::is('myanswer') ? "active" : "" }}"><a href="{{ route('myanswer') }}"><i class="fa fa-link"></i> <span>My Answer</span></a></li>
        <li class="{{ Request::is('#') ? "active" : "" }}"><a href="#"><i class="fa fa-link"></i> <span>Sign Out</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside> --}}
  

  {{-- <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('/dist/img/user.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Username</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ Request::is('dashboard') ? "active" : "" }}"><a href="{{ route('dashboard') }}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <li class="{{ Request::is('user') ? "active" : "" }}"><a href="{{ route('userprofile') }}"><i class="fa fa-link"></i> <span>My Profile</span></a></li>
        <li class="{{ Request::is('myquestion') ? "active" : "" }}"><a href="{{ route('myquestion') }}"><i class="fa fa-link"></i> <span>My Question</span></a></li>
        <li class="{{ Request::is('myanswer') ? "active" : "" }}"><a href="{{ route('myanswer') }}"><i class="fa fa-link"></i> <span>My Answer</span></a></li>
        <li class="{{ Request::is('#') ? "active" : "" }}"><a href="#"><i class="fa fa-link"></i> <span>Sign Out</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside> --}}



  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
    <img src="{{ asset('web_asset/img/logo2.png') }}" alt="Logo Stay Underflow" class="brand-image"
        style="opacity: .8">
    <span class="brand-text font-weight-light">StayUnderFlow</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
              <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? "active" : "" }}">
                <i class="fa fa-tachometer-alt nav-icon" aria-hidden="true"></i>
                <p>Dashboard</p>
              </a>
          </li>
          <li class="nav-item">
            <a href="/topics" class="nav-link {{ Request::is('topics') ? "active" : "" }}">
              <i class="fa fa-book nav-icon" aria-hidden="true"></i>
              <p>Topic</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/user/{{ Session::get('id')}}" class="nav-link {{ Request::is('user') ? "active" : "" }}">
              <i class="fa fa-user nav-icon"></i>
              <p>My Profile</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link
            {{ Request::is('myquestion') ? "active" : "" }}
            {{ Request::is('create-discussion') ? "active" : "" }}
            ">
            <i class="nav-icon fa fa-question nav-icon"></i>
            <p>
              My Question
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/myquestion" class="nav-link {{ Request::is('myquestion') ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <i class="fas fa-list nav-icon"></i>
                <p>My Question List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/create-discussion" class="nav-link {{ Request::is('create-discussion') ? "active" : "" }}">
                <i class="far fa-circle nav-icon"></i>
                <i class="fas fa-comment-dots nav-icon"></i>
                <p>Post new Question</p>
                </a>
            </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/myanswer" class="nav-link {{ Request::is('myanswer') ? "active" : "" }}">
              <i class="fa fa-comments nav-icon"></i>
              <p>My Answer</p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{route('logout',Session::get('id'))}} " class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fa fa-sign-out-alt nav-icon"></i>
              <p>Logout</p>
            </a>
            <form action="{{route('logout',Session::get('id'))}}" method="post" id="logout-form">
              @csrf
            </form>
          </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
