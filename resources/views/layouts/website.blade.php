<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mini Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('website') }}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('website') }}/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('website') }}/css/style.css">
    <style>
      .pagination {
        margin-bottom: 0 !important;
      }
    </style>
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
              <input type="text" id="s" class="form-control" placeholder="Search...">
              <button class="search-btn" type="submit"><span class="icon-search"></span></button>
            </form>
          </div>

          <div class="col-4 site-logo">
            <a href="index.html" class="text-black h2 mb-0">Mini Blog</a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                @foreach($categories as $category)
                <li><a href="{{ route('website.category', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li>
                @endforeach
                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>
    </header>
    
    @yield('content')
    
    <div class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4">About Us</h3>
            <p>{{ $setting->description }} </p>
          </div>
          <div class="col-md-3 ml-auto">
            <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
            <ul class="list-unstyled float-left mr-5">
              <li><a href="{{ route('website') }}">Home</a></li>
              <li><a href="{{ route('website.about') }}">About Us</a></li>
              <li><a href="{{ route('website.contact') }}">Contact US</a></li>
            </ul>
            <ul class="list-unstyled float-left">
              @foreach($categories as $category)
                <li><a href="{{ route('website.category', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="col-md-4">
            <div>
              <h3 class="footer-heading mb-4">Connect With Us</h3>
              <p>
                @if($setting->facebook)<a target="_blank" href="{{ $setting->facebook }}"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a> @endif
                @if($setting->twitter)<a target="_blank" href="{{ $setting->twitter }}"><span class="icon-twitter p-2"></span></a> @endif
                @if($setting->instagram)<a target="_blank" href="{{ $setting->instagram }}"><span class="icon-instagram p-2"></span></a> @endif
                @if($setting->reddit)<a target="_blank" href="{{ $setting->reddit }}"><span class="icon-rss p-2"></span></a> @endif
                @if($setting->email)<a target="_blank" href="{{ $setting->email }}"><span class="icon-envelope p-2"></span></a> @endif
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
              {{ $setting->copyright }} | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <div class="mb-0">Developed By Zakir on <a href="https://www.youtube.com/playlist?list=PLl4v4A2HI0YixTm5AsoTu-sKxiQti4-r6">Laravel Blog Development </a>Tutorial Series</div>
              </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('website') }}/js/jquery-3.3.1.min.js"></script>
  <script src="{{ asset('website') }}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{ asset('website') }}/js/jquery-ui.js"></script>
  <script src="{{ asset('website') }}/js/popper.min.js"></script>
  <script src="{{ asset('website') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('website') }}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('website') }}/js/jquery.stellar.min.js"></script>
  <script src="{{ asset('website') }}/js/jquery.countdown.min.js"></script>
  <script src="{{ asset('website') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('website') }}/js/bootstrap-datepicker.min.js"></script>
  <script src="{{ asset('website') }}/js/aos.js"></script>

  <script src="{{ asset('website') }}/js/main.js"></script>
  @yield('script')
  </body>
</html>