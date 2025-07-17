<x-app-layout>
    <div class="main-section">
        <div class="container">
            <div class="main-section-data">
                <div class="row">
                    <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                        <div class="main-left-sidebar no-margin">
                            {{-- Профиль --}}
                            @auth
                                <div class="user-data full-width">
                                    <div class="user-profile">
                                        <div class="username-dt">
                                            <div class="usr-pic">
                                                <img src="http://via.placeholder.com/100x100" alt="">
                                            </div>
                                        </div><!--username-dt end-->
                                        <div class="user-specs">
                                            <h3>{{ auth()->user()->name }}</h3>
                                        </div>
                                    </div><!--user-profile end-->
                                    <ul class="user-fw-status">
                                        <li>
                                            <h4>Following</h4>
                                            <span>{{ auth()->user()->communities()->count() }}</span>
                                        </li>
                                        <li>
                                            <a href="{{ route('profile.edit') }}" title="">View Profile</a>
                                        </li>
                                    </ul>
                                </div>
                            @endauth
                            <!--user-data end-->
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

                            @auth()
                                <div class="post-topbar">
                                    <div class="user-picy">
                                        <img src="http://via.placeholder.com/100x100" alt="">
                                    </div>
                                    <div class="post-st">
                                        <ul>
                                            <li><a class="post_project" href="#" title="">Create a post</a></li>
                                        </ul>
                                    </div><!--post-st end-->
                                </div><!--post-topbar end-->
                            @endauth

                            {{-- Посты --}}
                            <div class="posts-section">
                                @foreach($posts as $post)
                                    <div class="post-bar">
                                        <div class="post_topbar">
                                            <div class="usy-dt">
                                                @if(isset($post->media))
                                                    <img
                                                        src="{{ asset('storage/' . $post->media) }}"
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
                                                        <a href="{{ route('community.show', $community->id) }}">
                                                            <h4>{{ $community->name }}</h4>
                                                            <span>{{ $community->theme->title }}</span>
                                                        </a>
                                                    </div>
                                                    <span>
                                                        @auth()
                                                            @if(
                                                                in_array(
                                                                    $community->id,
                                                                    auth()->user()->communities()->pluck('community_id')->toArray()
                                                                )
                                                            )
                                                                <form action="{{ route('community.unsubscribe', [$community, auth()->user()]) }}" method="post">
                                                                    @csrf

                                                                    <x-dropdown-link :href="route('community.unsubscribe', [$community, auth()->user()])"
                                                                                     onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                                                                        <i class="la la-minus" title="unfollow"></i>
                                                                    </x-dropdown-link>
                                                                </form>
                                                            @else
                                                                <form action="{{ route('community.subscribe', [$community, auth()->user()]) }}" method="post">
                                                                    @csrf

                                                                    <x-dropdown-link :href="route('community.subscribe', [$community, auth()->user()])"
                                                                                     onclick="event.preventDefault();
                                                                             this.closest('form').submit();">
                                                                        <i class="la la-plus" title="follow"></i>
                                                                    </x-dropdown-link>
                                                                </form>
                                                            @endif
                                                        @endauth
                                                    </span>
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

    @auth()
        <div class="post-popup pst-pj">
            <div class="post-project">
                <h3>Create a post</h3>
                <div class="post-project-fields">
                    <form method="POST" action="{{ route('post.store', [auth()->user()]) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="title" placeholder="Title">
                            </div>

                            <div class="col-lg-12">
                                <div class="inp-field">
                                    <select name="community_id">
                                        @foreach(auth()->user()->communities()->get() as $community)
                                            <option value="{{ $community->id }}">{{ $community->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <input type="file" name="media" id="media">
                            </div>

                            <div class="col-lg-12">
                                <textarea name="content" placeholder="Description"></textarea>
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
    @endauth
</x-app-layout>
