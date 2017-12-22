<div class="js-mega-menu collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
    <ul class="navbar-nav text-uppercase g-font-weight-600 ml-auto">
        <li class="nav-item active g-mx-20--lg">
            <a href="#!" class="nav-link g-px-0">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item g-mx-20--lg">
            <a href="{{route('event.list')}}" class="nav-link g-px-0">Events</a>
        </li>
        <li class="nav-item g-mx-20--lg">
            <a href="#!" class="nav-link g-px-0">Shortcodes</a>
        </li>

        <li class="nav-item hs-has-sub-menu g-mx-20--lg">
            <a href="#!" class="nav-link g-px-0" id="nav-link-1"
               aria-haspopup="true"
               aria-expanded="false"
               aria-controls="nav-submenu-1"
            >Pages</a>

            <!-- Submenu -->
            <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-mt-20 g-mt-10--lg--scrolling" id="nav-submenu-1"
                aria-labelledby="nav-link-1">
                <li class="dropdown-item"><a class="nav-link g-px-0" href="#!">Page 1</a></li>
                <li class="dropdown-item hs-has-sub-menu">
                    <a id="nav-link-2" class="nav-link g-px-0" href="#!"
                       aria-haspopup="true"
                       aria-expanded="false"
                       aria-controls="nav-submenu-2"
                    >Page 2</a>

                    <!-- Submenu (level 2) -->
                    <ul class="hs-sub-menu list-unstyled g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-mt-minus-2 g-my-2" id="nav-submenu-2"
                        aria-labelledby="nav-link-2">
                        <li class="dropdown-item"><a class="nav-link g-px-0" href="#!">Page 2-1</a></li>
                        <li class="dropdown-item"><a class="nav-link g-px-0" href="#!">Page 2-2</a></li>
                        <li class="dropdown-item"><a class="nav-link g-px-0" href="#!">Page 2-3</a></li>
                        <li class="dropdown-item"><a class="nav-link g-px-0" href="#!">Page 2-4</a></li>
                        <li class="dropdown-item"><a class="nav-link g-px-0" href="#!">Page 2-5</a></li>
                    </ul>
                    <!-- End Submenu (level 2) -->
                </li>
                <li class="dropdown-item"><a class="nav-link g-px-0" href="#!">Page 3</a></li>
                <li class="dropdown-item"><a class="nav-link g-px-0" href="#!">Page 4</a></li>
                <li class="dropdown-item"><a class="nav-link g-px-0" href="#!">Page 5</a></li>
                <li class="dropdown-item"><a class="nav-link g-px-0" href="#!">Page 6</a></li>
                <li class="dropdown-item"><a class="nav-link g-px-0" href="#!">Page 7</a></li>
            </ul>
            <!-- End Submenu -->
        </li>

        @auth
            <li class="nav-item g-mx-20--lg">
                <a href="{{ route('home') }}" class="nav-link g-px-0">Profile</a>
            </li>

            <li class="nav-item hs-has-sub-menu g-mx-20--lg">
                <a href="{{ route('home') }}" class="nav-link g-px-0" id="nav-link-1"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-controls="nav-submenu-1"
                >{{ Auth::user()->name }}</a>

                <!-- Submenu -->
                <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-mt-20 g-mt-10--lg--scrolling" id="nav-submenu-1"
                    aria-labelledby="nav-link-1">
                    <li class="dropdown-item">
                        <a href="{{ route('home') }}" class="nav-link g-px-0">Profile</a>
                    </li>
                    <li class="dropdown-item">
                        <a class="nav-link g-px-0" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                </ul>
                <!-- End Submenu -->
            </li>


        @else
            <li class="nav-item g-mx-20--lg">
                <a href="{{ route('login') }}" class="nav-link g-px-0">Login</a>
            </li>
            <li class="nav-item g-ml-20--lg g-mr-0--lg">
                <a href="{{ route('register') }}" class="nav-link g-px-0">Signup</a>
            </li>
        @endauth

    </ul>
</div>