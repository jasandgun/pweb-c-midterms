<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="/">
                                <img src="{{ asset('web_asset') }}/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">

                                {{-- navbar  --}}
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="#">Topics<i class="ti-angle-down"></i></a>
                                            @php
                                                $topicslist= App\Topics::all();    
                                            @endphp
                                            
                                            <ul class="submenu">
                                                @foreach ($topicslist as $item)
                                                    <li><a href="#">{{ $item->topic_name }}</a></li>
                                                @endforeach
                                                
                                            </ul>
                                        </li>
                                        @if(session()->has('login'))
                                        <li><a href="/dashboard">Dashboard</a></li>
                                        @else
                                        
                                            <li class="header-login"><a href="/login-welcome">Register</a></li>
                                            <li class="header-login"><a href="/login-welcome">Login</a></li>
                                        
                                        @endif
                                    </ul>
                                </nav>
                                {{-- end of navbar --}}

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                @if(session()->has('login'))
                                <div class="d-none d-lg-block">
                                    <form id="logout-form" action=" {{route('logout',Session::get('id'))}} " method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Logout') }}
                                        </button>
                                    </form>
                                </div>
                                @else
                                <div class="d-none d-lg-block">
                                    <a class="boxed-btn3" href="/login">Login</a>
                                </div>
                                <div class="d-none d-lg-block">
                                    <a class="boxed-btn3" href="/register">Register</a>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
