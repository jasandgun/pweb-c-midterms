<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-orange navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link {{ Request::is('/dashboard') ? "active" : "" }}">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/topics" class="nav-link {{ Request::is('topics') ? "active" : "" }}" >Topics</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" method="POST" action="{{route('search-discussion')}}">
      @csrf
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" name="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown user user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="{{ asset(Session::get('profil')) }}" class="user-image img-circle elevation-2" alt="User Image">
          {{-- <span class="hidden-xs">Alexander Pierce</span> --}}
         
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="{{ asset(Session::get('profil')) }}" class="img-circle elevation-2" alt="User Image">
            <p>
              {{ Session::get('name') }}
              <small>Member since {{ Session::get('joined') }}</small>
            </p>
          </li>
          <!-- Menu Body -->
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="row">
              <div class="col-md-12">
                <div class="row d-flex justify-content-between">
                  <a href="/user/{{Session::get('id')}}" class="btn btn-primary">Profil</a>
                    <a class="btn btn-danger" href=" {{route('logout',Session::get('id'))}} " onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>

                </div>

              </div>
              
            </div>
          </li>
        </ul>
      </li>
      
    </ul>
  </nav>
  <form action="{{route('logout',Session::get('id'))}}" method="post" id="logout-form">
    @csrf
  </form>