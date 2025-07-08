<x-app-layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="main-section">
        <div class="container">
            <div class="main-section-data">
                <div class="row">
                    <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                        <div class="main-left-sidebar no-margin">
                            {{-- Профиль --}}
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="username-dt">
                                        <div class="usr-pic">
                                            <img src="http://via.placeholder.com/100x100" alt="">
                                        </div>
                                    </div><!--username-dt end-->
                                    <div class="user-specs">
                                        <h3>John Doe</h3>
                                        <span>Graphic Designer at Self Employed</span>
                                    </div>
                                </div><!--user-profile end-->
                                <ul class="user-fw-status">
                                    <li>
                                        <h4>Following</h4>
                                        <span>34</span>
                                    </li>
                                    <li>
                                        <h4>Followers</h4>
                                        <span>155</span>
                                    </li>
                                    <li>
                                        <a href="#" title="">View Profile</a>
                                    </li>
                                </ul>
                            </div><!--user-data end-->
                           {{-- Темы --}}
                            <div class="suggestions full-width">
                                <div class="sd-title">
                                    <h3>Темы</h3>
                                    <i class="la la-ellipsis-v"></i>
                                </div><!--sd-title end-->
                                <div class="suggestions-list">
                                    @foreach($themes as $theme)
                                        <div class="suggestion-usd">
                                            <img src="http://via.placeholder.com/35x35" alt="">
                                            <div class="sgt-text">
                                                <h4>{{ $theme->title }}</h4>
                                            </div>
                                            <span><i class="la la-plus"></i></span>
                                        </div>
                                    @endforeach
                                    <div class="view-more">
                                        <a href="#" title="">View More</a>
                                    </div>
                                </div><!--suggestions-list end-->
                            </div><!--suggestions end-->

                            <div class="tags-sec full-width">
                                <ul>
                                    <li><a href="#" title="">Help Center</a></li>
                                    <li><a href="#" title="">About</a></li>
                                    <li><a href="#" title="">Privacy Policy</a></li>
                                    <li><a href="#" title="">Community Guidelines</a></li>
                                    <li><a href="#" title="">Cookies Policy</a></li>
                                    <li><a href="#" title="">Career</a></li>
                                    <li><a href="#" title="">Language</a></li>
                                    <li><a href="#" title="">Copyright Policy</a></li>
                                </ul>
                                <div class="cp-sec">
                                    <img src="{{ asset('assets/images/logo2.png') }}" alt="">
                                    <p><img src="{{ asset('assets/images/cp.png') }}" alt="">Copyright {{ date('Y') }}</p>
                                </div>
                            </div><!--tags-sec end-->
                        </div><!--main-left-sidebar end-->
                    </div>

                    <div class="col-lg-6 col-md-8 no-pd">
                        <div class="main-ws-sec">

                            <div class="post-topbar">
                                <div class="user-picy">
                                    <img src="http://via.placeholder.com/100x100" alt="">
                                </div>
                                <div class="post-st">
                                    <ul>
                                        <li><a class="post_project" href="#" title="">Post a Project</a></li>
                                        <li><a class="post-jb active" href="#" title="">Post a Job</a></li>
                                    </ul>
                                </div><!--post-st end-->
                            </div><!--post-topbar end-->



                            <div class="top-profiles">
                                <div class="pf-hd">
                                    <h3>Top Profiles</h3>
                                    <i class="la la-ellipsis-v"></i>
                                </div>
                                <div class="profiles-slider">
                                    <div class="user-profy">
                                        <img src="http://via.placeholder.com/57x57" alt="">
                                        <h3>John Doe</h3>
                                        <span>Graphic Designer</span>
                                        <ul>
                                            <li><a href="#" title="" class="followw">Follow</a></li>
                                            <li><a href="#" title="" class="envlp"><img src="{{ asset('assets/images/envelop.png') }}" alt=""></a></li>
                                            <li><a href="#" title="" class="hire">hire</a></li>
                                        </ul>
                                        <a href="#" title="">View Profile</a>
                                    </div><!--user-profy end-->
                                    <div class="user-profy">
                                        <img src="http://via.placeholder.com/57x57" alt="">
                                        <h3>John Doe</h3>
                                        <span>Graphic Designer</span>
                                        <ul>
                                            <li><a href="#" title="" class="followw">Follow</a></li>
                                            <li><a href="#" title="" class="envlp"><img src="{{ asset('assets/images/envelop.png') }}" alt=""></a></li>
                                            <li><a href="#" title="" class="hire">hire</a></li>
                                        </ul>
                                        <a href="#" title="">View Profile</a>
                                    </div><!--user-profy end-->
                                    <div class="user-profy">
                                        <img src="http://via.placeholder.com/57x57" alt="">
                                        <h3>John Doe</h3>
                                        <span>Graphic Designer</span>
                                        <ul>
                                            <li><a href="#" title="" class="followw">Follow</a></li>
                                            <li><a href="#" title="" class="envlp"><img src="{{ asset('assets/images/envelop.png') }}" alt=""></a></li>
                                            <li><a href="#" title="" class="hire">hire</a></li>
                                        </ul>
                                        <a href="#" title="">View Profile</a>
                                    </div><!--user-profy end-->
                                    <div class="user-profy">
                                        <img src="http://via.placeholder.com/57x57" alt="">
                                        <h3>John Doe</h3>
                                        <span>Graphic Designer</span>
                                        <ul>
                                            <li><a href="#" title="" class="followw">Follow</a></li>
                                            <li><a href="#" title="" class="envlp"><img src="{{ asset('assets/images/envelop.png') }}" alt=""></a></li>
                                            <li><a href="#" title="" class="hire">hire</a></li>
                                        </ul>
                                        <a href="#" title="">View Profile</a>
                                    </div><!--user-profy end-->
                                    <div class="user-profy">
                                        <img src="http://via.placeholder.com/57x57" alt="">
                                        <h3>John Doe</h3>
                                        <span>Graphic Designer</span>
                                        <ul>
                                            <li><a href="#" title="" class="followw">Follow</a></li>
                                            <li><a href="#" title="" class="envlp"><img src="{{ asset('assets/images/envelop.png') }}" alt=""></a></li>
                                            <li><a href="#" title="" class="hire">hire</a></li>
                                        </ul>
                                        <a href="#" title="">View Profile</a>
                                    </div><!--user-profy end-->
                                    <div class="user-profy">
                                        <img src="http://via.placeholder.com/57x57" alt="">
                                        <h3>John Doe</h3>
                                        <span>Graphic Designer</span>
                                        <ul>
                                            <li><a href="#" title="" class="followw">Follow</a></li>
                                            <li><a href="#" title="" class="envlp"><img src="{{ asset('assets/images/envelop.png') }}" alt=""></a></li>
                                            <li><a href="#" title="" class="hire">hire</a></li>
                                        </ul>
                                        <a href="#" title="">View Profile</a>
                                    </div><!--user-profy end-->
                                </div><!--profiles-slider end-->
                            </div><!--top-profiles end-->

                            {{-- Посты --}}
                            <div class="posts-section">
                                @foreach($posts as $post)
                                    <div class="post-bar">
                                        <div class="post_topbar">
                                            <div class="usy-dt">
                                                @if(isset($post->media))
                                                    <img
                                                        src="{{ url('storage/' . $post->media) }}"
                                                        alt="{{ $post->name }}"
                                                    >
                                                @endif
                                                <div class="usy-name">
                                                    <h3>{{ $post->user->name }}</h3>
                                                    <span>
                                                        <img src="{{ asset('assets/images/clock.png') }}" alt="">
                                                        3 min ago
                                                    </span>
                                                </div>
                                            </div>
                                            @if(auth()->user() === $post->user)
                                                <div class="ed-opts">
                                                    <a href="#" title="" class="ed-opts-open">
                                                        <i class="la la-ellipsis-v"></i>
                                                    </a>
                                                    <ul class="ed-options">
                                                        <li><a href="#" title="">Edit Post</a></li>
                                                        <li><a href="#" title="">Unsaved</a></li>
                                                        <li><a href="#" title="">Unbid</a></li>
                                                        <li><a href="#" title="">Close</a></li>
                                                        <li><a href="#" title="">Hide</a></li>
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="epi-sec">
                                            <ul class="descp">
                                                <li><img src="{{ asset('assets/images/icon8.png') }}" alt="">
                                                    <span>
                                                        {{ $post->theme }}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job_descp">
                                            <h3>{{ $post->name }}</h3>
                                            <p>
                                                {!! \Illuminate\Support\Str::limit(
                                                    $post->content,
                                                    $limit = 150,
                                                    $end = '...'
                                                    )
                                                !!}
                                                <a href="{{ route('post.show', $post->id) }}" title="">
                                                    читать далее
                                                </a>
                                            </p>
                                        </div>
                                        <div class="job-status-bar">
                                            <ul class="like-com">
                                                <li>
                                                    <a href="#"><i class="la la-heart"></i> Like</a>
                                                    <img src="{{ asset('assets/images/liked-img.png') }}" alt="">
                                                    <span>25</span>
                                                </li>
                                                <li>
                                                    <a href="#" title="" class="com">
                                                        <img src="{{ asset('assets/images/com.png') }}" alt="">
                                                        Comment {{ count($post->comments) }}
                                                    </a>
                                                </li>
                                            </ul>
                                            <a><i class="la la-eye"></i>Views 50</a>
                                        </div>
                                    </div><!--post-bar end-->
                                @endforeach

                                <div class="process-comm">
                                    <div class="spinner">
                                        <div class="bounce1"></div>
                                        <div class="bounce2"></div>
                                        <div class="bounce3"></div>
                                    </div>
                                </div><!--process-comm end-->
                            </div><!--posts-section end-->
                        </div><!--main-ws-sec end-->
                    </div>
                    <div class="col-lg-3 pd-right-none no-pd">
                        <div class="right-sidebar">
                            <div class="widget widget-about">
                                <img src="{{ asset('assets/images/wd-logo.png') }}" alt="">
                                <h3>Track Time on Workwise</h3>
                                <span>Pay only for the Hours worked</span>
                                <div class="sign_link">
                                    <h3><a href="#" title="">Sign up</a></h3>
                                    <a href="#" title="">Learn More</a>
                                </div>
                            </div><!--widget-about end-->

                            <div class="widget widget-jobs">
                                <div class="widget suggestions full-width">
                                    <div class="sd-title">
                                        <h3>Популярные сообщества</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div><!--sd-title end-->
                                    <div class="suggestions-list">
                                        @if($communities->isEmpty())
                                            <div class="suggestion-usd">
                                                <div class="sgt-text">
                                                    <h4>Нет сообществ</h4>
                                                </div>
                                            </div>
                                        @else
                                            @foreach($communities as $community)
                                                <div class="suggestion-usd">
                                                    <img src="http://via.placeholder.com/35x35" alt="">
                                                    <div class="sgt-text">
                                                        <h4>{{ $community->name }}</h4>
                                                        <span>{{ $community->theme->title }}</span>
                                                    </div>
                                                    <span><i class="la la-plus"></i></span>
                                                </div>
                                            @endforeach
                                            <div class="view-more">
                                                <a href="#" title="">View More</a>
                                            </div>
                                        @endif
                                    </div><!--suggestions-list end-->
                                </div>
                            </div>
                        </div><!--right-sidebar end-->
                    </div>
                </div>
            </div><!-- main-section-data end-->
        </div>
    </div>

    <div class="post-popup pst-pj">
        <div class="post-project">
            <h3>Post a project</h3>
            <div class="post-project-fields">
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="title" placeholder="Title">
                        </div>
                        <div class="col-lg-12">
                            <div class="inp-field">
                                <select>
                                    <option>Category</option>
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                    <option>Category 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="skills" placeholder="Skills">
                        </div>
                        <div class="col-lg-12">
                            <div class="price-sec">
                                <div class="price-br">
                                    <input type="text" name="price1" placeholder="Price">
                                    <i class="la la-dollar"></i>
                                </div>
                                <span>To</span>
                                <div class="price-br">
                                    <input type="text" name="price1" placeholder="Price">
                                    <i class="la la-dollar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <textarea name="description" placeholder="Description"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <ul>
                                <li><button class="active" type="submit" value="post">Post</button></li>
                                <li><a href="#" title="">Cancel</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div><!--post-project-fields end-->
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div><!--post-project end-->
    </div><!--post-project-popup end-->

    <div class="post-popup job_post">
        <div class="post-project">
            <h3>Post a job</h3>
            <div class="post-project-fields">
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="title" placeholder="Title">
                        </div>
                        <div class="col-lg-12">
                            <div class="inp-field">
                                <select>
                                    <option>Category</option>
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                    <option>Category 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="skills" placeholder="Skills">
                        </div>
                        <div class="col-lg-6">
                            <div class="price-br">
                                <input type="text" name="price1" placeholder="Price">
                                <i class="la la-dollar"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inp-field">
                                <select>
                                    <option>Full Time</option>
                                    <option>Half time</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <textarea name="description" placeholder="Description"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <ul>
                                <li><button class="active" type="submit" value="post">Post</button></li>
                                <li><a href="#" title="">Cancel</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div><!--post-project-fields end-->
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div><!--post-project end-->
    </div><!--post-project-popup end-->
</x-app-layout> 
