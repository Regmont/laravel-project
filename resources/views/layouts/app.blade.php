<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/line-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/line-awesome-font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body>
<div class="wrapper">
    <header>
        <div class="container">
            <div class="header-data">
                <div class="logo">
                    <a href="index.html" title=""><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                </div><!--logo end-->
                <div class="search-bar">
                    <form>
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit"><i class="la la-search"></i></button>
                    </form>
                </div><!--search-bar end-->
                <nav>
                    <ul>
                        <li>
                            <a href="index.html" title="">
                                <span><img src="{{ asset('assets/images/icon1.png') }}" alt=""></span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="companies.html" title="">
                                <span><img src="{{ asset('assets/images/icon2.png') }}" alt=""></span>
                                Companies
                            </a>
                            <ul>
                                <li><a href="companies.html" title="">Companies</a></li>
                                <li><a href="company-profile.html" title="">Company Profile</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="projects.html" title="">
                                <span><img src="{{ asset('assets/images/icon3.png') }}" alt=""></span>
                                Projects
                            </a>
                        </li>
                        <li>
                            <a href="profiles.html" title="">
                                <span><img src="{{ asset('assets/images/icon4.png') }}" alt=""></span>
                                Profiles
                            </a>
                            <ul>
                                <li><a href="user-profile.html" title="">User Profile</a></li>
                                <li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="jobs.html" title="">
                                <span><img src="{{ asset('assets/images/icon5.png') }}" alt=""></span>
                                Jobs
                            </a>
                        </li>
                        <li>
                            <a href="#" title="" class="not-box-open">
                                <span><img src="{{ asset('assets/images/icon6.png') }}" alt=""></span>
                                Messages
                            </a>
                        </li>
                        @guest
                            <li>
                                <a href="{{ route('login') }}" class="not-box-open">
                                    <span><img src="{{ asset('assets/images/icon6.png') }}" alt=""></span>
                                    Log in
                                </a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}" class="not-box-open">
                                        <span><img src="{{ asset('assets/images/icon6.png') }}" alt=""></span>
                                        Register
                                    </a>
                                </li>
                            @endif
                        @endguest
                    </ul>
                </nav><!--nav end-->
                <div class="menu-btn">
                    <a href="#" title=""><i class="fa fa-bars"></i></a>
                </div><!--menu-btn end-->
                <div class="user-account">
                    @auth
                        <div class="user-info">
                            <img src="http://via.placeholder.com/30x30" alt="">
                            <a href="#" title="">{{ auth()->user()->name }}</a>
                            <i class="la la-sort-down"></i>
                        </div>
                        <div class="user-account-settingss">
                            <h3>Setting</h3>
                            <ul class="us-links">
                                <li><a href="{{ route('profile.edit') }}" title="">Account Setting</a></li>
                                <li><a href="#" title="">Privacy</a></li>
                                <li><a href="#" title="">Faqs</a></li>
                                <li><a href="#" title="">Terms & Conditions</a></li>
                            </ul>
                            <h3 class="tc">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </h3>
                        </div><!--user-account-settingss end-->
                    @endauth
                </div>
            </div><!--header-data end-->
        </div>
    </header><!--header end-->

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif
    <main>
        {{ $slot }}

        @yield('content')
    </main>
</div><!--theme-layout end-->

<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/popper.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.mCustomScrollbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/lib/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/scrollbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>
