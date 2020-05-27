<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script> 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @yield('stylesheets')
    <!-- Styles -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm fixed-top" style="background-color: #dc322e; color: #fff">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <i class="fas fa-cubes fa-2x"></i> 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                         
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                          <a class="nav-link" href="{{ route('frontend')}}"><i class="fas fa-globe"></i> Visit Blog</a>
                      </li>
                      @if(Auth::check())
                      <li class="nav-item active">
                          <a class="nav-link" href="{{ route('contacts.index')}}"><i class="fas fa-envelope"></i> Messages</a>
                      </li>
                      @endif
                      @if(Auth::check())
                        @if(auth()->user()->isAdmin())
                          <li class="nav-item active">
                              <a class="nav-link" href="{{ route('dashboard.index')}}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                          </li>
                        @endif
                      @endif  
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-alt"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            @auth
            <div class="row">
                <div class="col-md-3">
                  <div class="nav-side-menu">
                      <div class="brand">Brand Logo</div>
                      <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                    
                          <div class="menu-list">
                    
                              <ul id="menu-content" class="menu-content collapse out">
                                  <li class="user-info">
                                    <div class="sidebar-avatar text-center">
                                      <img src="{{auth()->user()->hasPicture() ? asset('storage/'.auth()->user()->getPicture()) : auth()->user()->getGravatar()}}" style="width: 100px;height: 100px; border-radius: 50%">
                                    </div>
                                    <h4 class="text-center">{{auth()->user()->name}}</h4>
                                    <h5 class="text-center">{{auth()->user()->role}}</h5>
                                  </li>
                                  <li  data-toggle="collapse" data-target="#posts" class="collapsed {{ \Request::segment(1)== 'posts' ? 'active' : '' }}">
                                    <a href="#"><i class="fas fa-newspaper"></i> Posts <i class="arrow-down fas fa-chevron-circle-down float-right mt-2"></i></a>
                                  </li>
                                  <ul class="sub-menu  {{ \Request::segment(1)== 'posts'||\Request::segment(1)== 'trashed' ? '' : 'collapse' }}" id="posts">
                                      <li class="{{ Request::path() == 'posts/create' ? 'active' : '' }}"><a href="{{ url('/posts/create') }}">&nbsp;&nbsp;<i class="fas fa-pen-square"></i> Create Post</a></li>
                                      <li class="{{ Request::path() == 'posts' ? 'active' : '' }}"><a href="{{ url('/posts') }}">&nbsp;&nbsp;<i class="fas fa-newspaper"></i> All Posts</a></li>
                                      <li class="{{ Request::path() == 'trashed' ? 'active' : '' }}"><a href="{{ url('/trashed') }}">&nbsp;&nbsp;<i class="fas fa-trash-alt"></i> Trashed Posts</a></li>
                                  </ul>


                                  <li data-toggle="collapse" data-target="#categories" class="collapsed {{ \Request::segment(1)== 'categories' ? 'active' : '' }}">
                                    <a href="#"><i class="fas fa-tags"></i> Categories <i class="arrow-down fas fa-chevron-circle-down float-right mt-2"></i></a>
                                  </li>  
                                  <ul class="sub-menu  {{ \Request::segment(1)== 'categories' ? '' : 'collapse' }}" id="categories">
                                      <li class="{{ Request::path() == 'categories/create' ? 'active' : '' }}"><a href="{{ url('/categories/create') }}">&nbsp;&nbsp;<i class="fas fa-tag"></i> Create Category</a></li>
                                      <li class="{{ Request::path() == 'categories' ? 'active' : '' }}"><a href="{{ url('/categories') }}">&nbsp;&nbsp;<i class="fas fa-tags"></i> All Categories</a></li>
                                  </ul>


                                  <li data-toggle="collapse" data-target="#tags" class="collapsed {{ \Request::segment(1)== 'tags' ? 'active' : '' }}">
                                    <a href="#"><i class="fas fa-tags"></i> Tags <i class="arrow-down fas fa-chevron-circle-down float-right mt-2"></i></a>
                                  </li>
                                  <ul class="sub-menu collapse" id="tags">
                                    <li class="{{ Request::path() == 'tags/create' ? 'active' : '' }}"><a href="{{ url('/tags/create') }}">&nbsp;&nbsp;<i class="fas fa-tag"></i> Create Tag</a></li>
                                    <li class="{{ Request::path() == 'tags' ? 'active' : '' }}"><a href="{{ url('/tags') }}">&nbsp;&nbsp;<i class="fas fa-tags"></i> All Tags</a></li>
                                  </ul>
                                  <li class="{{ Request::path() == 'comments' ? 'active' : '' }}"><a href="{{ route('comments.index')}}"><i class="fas fa-comment-alt"></i> Comments</a></li>
                                  <li class="{{ Request::path() == 'users/'.Auth::user()->id.'/profile' ? 'active' : '' }}"><a href="{{route('users.edit', Auth::user()->id)}}"><i class="fas fa-id-card"></i> My Profile</a></li>
                                  <li class="{{ Request::path() == 'newsletter' ? 'active' : '' }}"><a href="{{route('newsletters.index')}}"><i class="fas fa-envelope-open-text"></i> Newsletters</a></li>
                                  
                                  @if(Auth::check())
                                    @if(auth()->user()->isAdmin())
                                      <li data-toggle="collapse" data-target="#users" class="collapsed {{ \Request::segment(1)== 'users' ? 'active' : '' }}">
                                        <a href="#"><i class="fas fa-users"></i> Users <i class="arrow-down fas fa-chevron-circle-down float-right mt-2"></i></a>
                                      </li>  
                                      <ul class="sub-menu {{ \Request::segment(1)== 'users' ? '' : 'collapse' }}" id="users">
                                          <li class="{{ Request::path() == 'users/create' ? 'active' : '' }}"><a href="{{ url('/users/create') }}">&nbsp;&nbsp;<i class="fas fa-user"></i> Create User</a></li>
                                          <li class="{{ Request::path() == 'users' ? 'active' : '' }}"><a href="{{ url('/users') }}">&nbsp;&nbsp;<i class="fas fa-users"></i> All Users</a></li>
                                      </ul>
                                    @endif
                                  @endif   
                              
                              </ul>
                       </div>
                  </div>
                </div>
                <div class="col-md-9">
                     <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
            @else
             <main class="py-4">
                @yield('content')
            </main>           
            @endauth
        </div>
    </div>
        @yield('scripts')    
</body>
</html>
