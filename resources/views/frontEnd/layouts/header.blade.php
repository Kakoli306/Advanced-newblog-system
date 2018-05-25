<header>
    <div class="container-fluid position-relative no-side-padding">

        <a href="#" class="logo"><img src="{{asset('public/frontEnd/images')}}/logo.png" alt="Logo Image"></a>

        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="{{url('/home') }}">Home</a></li>
            <li><a href="{{url('/category') }}">Categories</a></li>
            <li><a href="{{url('/post') }}">Add Post</a></li>
        </ul><!-- main-menu -->



        <ul class="nav navbar-nav navbar-right right_nav_bar">
            <li>
                <div class="src-area">
                     <form method="POST" action="{{url ("/search") }}">
                        {{csrf_field()}}
                        <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                        <input class="src-input" type="text" placeholder="Type of search">
                    </form>
                </div>
            </li>
            <!-- Authentication Links -->
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {{ Auth::user()->name }}
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        @if(Auth::id() == 1)
                            <li><a href="{{ url('/profile') }}">Profile</a></li>

                        @endif
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest

        </ul>

    </div><!-- conatiner -->
</header>
