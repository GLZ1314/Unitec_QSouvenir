<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"  href="{{ url('/') }}" ><img style="max-height:28px" src="{{ asset('images/home_images/kiwi_maori_logo_top.png')}}" alt="Quality Souvenirs" /></a>
        </div>
        <div class="collapse navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li id="navHome" class="active"><a href="{{ url('/') }}">Home</a></li>
                <li id="navProduct" ><a href="{{ url('/') }}">Product</a></li>
                <li id="navAbout" ><a href="{{ url('/home/about') }}">About</a></li>
                <li id="navContact" ><a href="{{ url('/home/contact') }}">Contact</a></li>
                {{--                    @if (User.IsInRole("Admin"))--}}
                {{--                        {--}}
                {{--                        <li class="dropdown">--}}
                {{--                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin<span class="caret"></span></a>--}}
                {{--                            <ul class="dropdown-menu">--}}
                {{--                                <li><a asp-area="" asp-controller="Souvenirs" asp-action="Index">Souvenir Management</a></li>--}}
                {{--                                <li><a asp-area="" asp-controller="Categories" asp-action="Index">Category Management</a></li>--}}
                {{--                                <li><a asp-area="" asp-controller="Suppliers" asp-action="Index">Supplier Management</a></li>--}}
                {{--                                <li><a asp-area="" asp-controller="Orders" asp-action="Index">Order Management</a></li>--}}
                {{--                                <li><a asp-area="" asp-controller="AdminApplicationUsers" asp-action="Index">Account Management</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </li>--}}
                {{--                        }--}}
                {{--                    @endif--}}
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <li> <a href="{{ route('user_addresses.index') }}" class="dropdown-item">User Details</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{--                                    {{ __('Logout') }}--}}
                                    logout
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</div>