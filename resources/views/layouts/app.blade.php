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
                            <h3 class="tc"><a href="sign-in.html" title="">Logout</a></h3>
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

    <div class="chatbox-list">
        <div class="chatbox">
            <div class="chat-mg">
                <a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a>
                <span>2</span>
            </div>
            <div class="conversation-box">
                <div class="con-title mg-3">
                    <div class="chat-user-info">
                        <img src="http://via.placeholder.com/34x33" alt="">
                        <h3>John Doe <span class="status-info"></span></h3>
                    </div>
                    <div class="st-icons">
                        <a href="#" title=""><i class="la la-cog"></i></a>
                        <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                        <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
                    </div>
                </div>
                <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
                    <div class="chat-msg">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                        <span>Sat, Aug 23, 1:10 PM</span>
                    </div>
                    <div class="date-nd">
                        <span>Sunday, August 24</span>
                    </div>
                    <div class="chat-msg st2">
                        <p>Cras ultricies ligula.</p>
                        <span>5 minutes ago</span>
                    </div>
                    <div class="chat-msg">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                        <span>Sat, Aug 23, 1:10 PM</span>
                    </div>
                </div><!--chat-list end-->
                <div class="typing-msg">
                    <form>
                        <textarea placeholder="Type a message here"></textarea>
                        <button type="submit"><i class="fa fa-send"></i></button>
                    </form>
                    <ul class="ft-options">
                        <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
                        <li><a href="#" title=""><i class="la la-camera"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
                    </ul>
                </div><!--typing-msg end-->
            </div><!--chat-history end-->
        </div>
        <div class="chatbox">
            <div class="chat-mg">
                <a href="#" title=""><img src="http://via.placeholder.com/70x70" alt=""></a>
            </div>
            <div class="conversation-box">
                <div class="con-title mg-3">
                    <div class="chat-user-info">
                        <img src="http://via.placeholder.com/34x33" alt="">
                        <h3>John Doe <span class="status-info"></span></h3>
                    </div>
                    <div class="st-icons">
                        <a href="#" title=""><i class="la la-cog"></i></a>
                        <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                        <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
                    </div>
                </div>
                <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
                    <div class="chat-msg">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                        <span>Sat, Aug 23, 1:10 PM</span>
                    </div>
                    <div class="date-nd">
                        <span>Sunday, August 24</span>
                    </div>
                    <div class="chat-msg st2">
                        <p>Cras ultricies ligula.</p>
                        <span>5 minutes ago</span>
                    </div>
                    <div class="chat-msg">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                        <span>Sat, Aug 23, 1:10 PM</span>
                    </div>
                </div><!--chat-list end-->
                <div class="typing-msg">
                    <form>
                        <textarea placeholder="Type a message here"></textarea>
                        <button type="submit"><i class="fa fa-send"></i></button>
                    </form>
                    <ul class="ft-options">
                        <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
                        <li><a href="#" title=""><i class="la la-camera"></i></a></li>
                        <li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
                    </ul>
                </div><!--typing-msg end-->
            </div><!--chat-history end-->
        </div>
        <div class="chatbox">
            <div class="chat-mg bx">
                <a href="#" title=""><img src="{{ asset('assets/images/chat.png') }}" alt=""></a>
                <span>2</span>
            </div>
            <div class="conversation-box">
                <div class="con-title">
                    <h3>Messages</h3>
                    <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                </div>
                <div class="chat-list">
                    <div class="conv-list active">
                        <div class="usrr-pic">
                            <img src="http://via.placeholder.com/50x50" alt="">
                            <span class="active-status activee"></span>
                        </div>
                        <div class="usy-info">
                            <h3>John Doe</h3>
                            <span>Lorem ipsum dolor <img src="{{ asset('assets/images/smley.png') }}" alt=""></span>
                        </div>
                        <div class="ct-time">
                            <span>1:55 PM</span>
                        </div>
                        <span class="msg-numbers">2</span>
                    </div>
                    <div class="conv-list">
                        <div class="usrr-pic">
                            <img src="http://via.placeholder.com/50x50" alt="">
                        </div>
                        <div class="usy-info">
                            <h3>John Doe</h3>
                            <span>Lorem ipsum dolor <img src="{{ asset('assets/images/smley.png') }}" alt=""></span>
                        </div>
                        <div class="ct-time">
                            <span>11:39 PM</span>
                        </div>
                    </div>
                    <div class="conv-list">
                        <div class="usrr-pic">
                            <img src="http://via.placeholder.com/50x50" alt="">
                        </div>
                        <div class="usy-info">
                            <h3>John Doe</h3>
                            <span>Lorem ipsum dolor <img src="{{ asset('assets/images/smley.png') }}" alt=""></span>
                        </div>
                        <div class="ct-time">
                            <span>0.28 AM</span>
                        </div>
                    </div>
                </div><!--chat-list end-->
            </div><!--conversation-box end-->
        </div>
    </div><!--chatbox-list end-->
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
