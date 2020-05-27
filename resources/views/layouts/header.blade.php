    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-12 search-form-wrap js-search-form">
            <form method="get" action="#">
              <input type="text" name="search" id="search" class="form-control" autocomplete="off" placeholder="Search...">
              <a class="search-btn" type=""><span class="icon-search"></span></a>

            </form>            
            <ul class="list-unstyled" id="search-results">
            </ul>
            <span id="total_records"></span>
          </div>

          <div class="col-4 site-logo">
            <a href="{{ url('/') }}" class="text-black h2 mb-0">MyHealth</a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation " role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                @if(Auth::check())
                  @if(auth()->user()->isAdmin())
                    <li class="nav-item" ><a href="{{ url('/dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                  @else
                    <li class="nav-item"><a href="{{ url('/home') }}"><i class="fas fa-tachometer-alt"></i> Cpanel</a></li>
                  @endif
                @endif  
                <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach(App\Models\Category::all() as $category)
                    
                    <a class="dropdown-item 

                    {{ $category->id == \Request::segment(2)  ? 'active' : '' }}

                    " href="{{ route('categories.show', $category->id) }}">{{$category->name}}</a>
                    @endforeach
                  </div>
                </li>
                <li class="{{ Request::path() == 'contact_us' ? 'active' : '' }}"><a href="{{ url('/contact_us') }}">Contact Us</a></li>
                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>
    </header>