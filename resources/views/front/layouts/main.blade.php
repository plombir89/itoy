<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', $homeSeo->title)</title>
    <meta name="description" content="@yield('description', $homeSeo->description)">
    <meta name="keywords" content="@yield('keywords', $homeSeo->keywords)">
    <script src="{{ asset('assets/js/jquery-2.1.1.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen"/>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}"/>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/theme.js') }}" type="text/javascript"></script>
    <link href="{{ asset('assets/css/stylesheet.css') }}" rel="stylesheet">


    <script src="{{ asset('assets/js/common.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/support.js') }}" type="text/javascript"></script>
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/moment-with-locales.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>

    @livewireStyles
</head>
<body>
<main class="@if(\request()->routeIs('home')) home-page @else() other-page @endif()">
    <div id="menu_wrapper"></div>
    <header id="header">
        <div class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 left-nav">
                        <div id="ishiheaderblock">
  	<span>
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      	<symbol id="sale" viewBox="0 0 600 600"><title>headphones</title><path d="M231.5,432.5c9.9,0,18.6-3.5,26-10.6l203.9-204.1c7.2-7.2,13.4-16.9,18.4-29.1c5-12.2,7.6-23.3,7.6-33.4V36.5
			c0-9.9-3.6-18.5-10.8-25.7C469.3,3.6,460.7,0,450.8,0L332,0c-10.1,0-21.2,2.5-33.4,7.6c-12.2,5-21.8,11.2-28.8,18.4L65.4,230.1
			c-7,7-10.6,15.6-10.6,25.7c0,9.9,3.5,18.6,10.6,26L205.9,422C212.9,429,221.5,432.5,231.5,432.5z M370.2,117.2
			c-7.1-7.1-10.7-15.8-10.7-25.8c0-10.1,3.6-18.7,10.7-25.8c7.1-7.1,15.7-10.7,25.8-10.7c10.1,0,18.7,3.6,25.8,10.7
			c7.1,7.1,10.7,15.8,10.7,25.8c0,10.1-3.6,18.7-10.7,25.8c-7.1,7.1-15.7,10.7-25.8,10.7C385.9,127.9,377.3,124.3,370.2,117.2z"></path>
          	<path d="M257.5,531.6l203.9-204.1c7.2-7.2,13.4-16.9,18.4-29.1c5-12.2,7.6-23.3,7.6-33.4v-64c0,10.1-2.5,21.2-7.6,33.4
			c-5,12.2-11.2,21.9-18.4,29.1L257.5,467.7c-7.4,7-16.1,10.6-26,10.6c-10.1,0-18.6-3.5-25.7-10.6L71.7,333.5
			c-5.9,5.7-10.2,10.8-12.8,15.1c-2.7,4.4-4,10-4,16.8c0,9.9,3.5,18.6,10.6,26l140.5,140.2c7,7,15.6,10.6,25.7,10.6
			C241.4,542.2,250.1,538.7,257.5,531.6z"></path></symbol>
      </svg>
      <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#sale" x="0%" y="10%"></use></svg>
  	</span>
                            <p>{{ __('Welcome To Our Toy Store') }}</p>
                        </div>


                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 right-nav">
                        <div class="language-selector">

                                <div class="btn-group dropdown">
                                    <span class="language-selector-label">{{ __('Language') }} :</span>
                                    <a title="Language" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="expand-more">{{ __('Language') }}</span> <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach($changeLang as $language)
                                            <li>
                                                <a class="btn btn-link btn-block language-select" href="{{ $language['link'] }}" class="@if($language['id'] == session('lang')) activelang @endif ">
                                                    <img width="32" src="{{ asset($language['icon']) }}"
                                                         alt="English" title="English"/>
                                                    {{ $language['title'] }}
                                                </a>
                                            <li>
                                        @endforeach

                                    </ul>
                                </div>
                        </div>

                        <div class="user-info">
                            <div class="dropdown">
                                <a title="{{ __('Account') }}" class="dropdown-toggle" data-toggle="dropdown">
                                    <div class="user-logo"></div>
                                    <span class="expand-more">{{ __('Account') }}</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    @auth()

                                        <li><a href="{{ route('account.index') }}">{{ __('Account') }}</a></li>
                                        <li><a href="{{ route('orders.index') }}">{{ __('Order History') }}</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="post">
                                            @csrf
                                        </form>
                                        <li><a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="#">{{ __('Logout') }}</a></li>

                                    @endauth
                                    @guest()
                                        <li>
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                        <li>
                                            <a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                        <li>
                                            <a href="{{ route('account.wishlist') }}"
                                               id="wishlist-total" title="{{ __('Wish List') }} (0)"><span class="wishlist-text">{{ __('Wish List') }} (0)</span></a>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-top-height">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="mobile-width-left col-sm-4 col-xs-3">
                            <div id="menu-icon" class="menu-icon hidden-md hidden-lg">
                                <div class="nav-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <symbol id="menu" viewBox="0 0 750 750"><title>menu</title>
                                            <path d="M12.03,84.212h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03
						              C5.39,60.152,0,65.541,0,72.182C0,78.823,5.39,84.212,12.03,84.212z"></path>
                                            <path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03
						                  S379.58,180.455,372.939,180.455z"></path>
                                            <path d="M372.939,300.758H12.03c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h360.909
						              c6.641,0,12.03-5.39,12.03-12.03C384.97,306.147,379.58,300.758,372.939,300.758z"></path>
                                        </symbol>
                                    </svg>
                                    <svg class="icon" viewBox="0 0 30 30">
                                        <use xlink:href="#menu" x="22%" y="25%"></use>
                                    </svg>
                                </div>
                            </div>
                            <div id="_mobile_seach_widget"></div>
                        </div>
                        <div class="desktop-logo col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div id="logo">
                                <a href="{{ route('home') }}"><img
                                        src="{{ asset('assets/images/Logo.png') }}"
                                        title="" alt="" class="img-responsive"/></a>
                            </div>
                        </div>
                        <div class="mobile-width-right col-sm-4 col-xs-4">
                            <div id="_mobile_cart"></div>
                            <div id="_mobile_link_menu"></div>
                            <div id="_mobile_user_info"></div>
                        </div>
                        <div id="_desktop_seach_widget" class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div id="ishisearch_widget" class="search-widget">
                                <div class="search-logo hidden-lg hidden-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <symbol id="magnifying-desktop" viewBox="0 0 1200 1200"><title>
                                                magnifying-desktop</title>
                                            <path d="M606.209,578.714L448.198,423.228C489.576,378.272,515,318.817,515,253.393C514.98,113.439,399.704,0,257.493,0
							               C115.282,0,0.006,113.439,0.006,253.393s115.276,253.393,257.487,253.393c61.445,0,117.801-21.253,162.068-56.586
							               l158.624,156.099c7.729,7.614,20.277,7.614,28.006,0C613.938,598.686,613.938,586.328,606.209,578.714z M257.493,467.8
							               c-120.326,0-217.869-95.993-217.869-214.407S137.167,38.986,257.493,38.986c120.327,0,217.869,95.993,217.869,214.407
							               S377.82,467.8,257.493,467.8z"></path>
                                        </symbol>
                                    </svg>
                                    <svg class="icon" viewBox="0 0 40 40">
                                        <use xlink:href="#magnifying-desktop" x="20%" y="22%"></use>
                                    </svg>
                                </div>
                                <form>
                                    <div id="search" class="input-group">
                                        <input id="ajax-search-text" type="text" name="search" value=""
                                               placeholder="{{ __('Search Our Catalog') }}" class="form-control input-lg"/>
                                        <div class="ajaxishi-search" style="display: none;">
                                            <ul></ul>
                                        </div>
                                        <span class="input-group-btn">
                                            <button id="ajax-search-btn" type="button" class="btn btn-default btn-lg">{{ __('Search') }}</button>
                                        </span>
                                    </div>

                                    <script>
                                        (function () {
                                            document.getElementById('ajax-search-text').addEventListener('keypress', function (event) {
                                                if (event.keyCode == 13) {
                                                    event.preventDefault();
                                                    document.getElementById('ajax-search-btn').click();
                                                }
                                            });
                                        }());
                                    </script>
                                </form>
                            </div>
                        </div>
                        <div class="header-right col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div id="_desktop_cart">
                                <div class="blockcart">
                                    @include('front.cart-info')
                                </div>
                            </div>
                            <div id="_desktop-contactinfo">
                                <div class="contact-num">
                                    <a href="#">
                                        <div class="call-img">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                <symbol id="email-img" viewBox="0 0 650 650"><title>email-img</title>
                                                    <path d="M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106
												C512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z
												M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787
												L338.213,256L482,112.212V399.787z">
                                                    </path>
                                                </symbol>
                                            </svg>
                                            <svg class="icon" viewBox="0 0 40 40">
                                                <use xlink:href="#email-img" x="11%" y="11%"></use>
                                            </svg>
                                        </div>
                                        <div class="call">
                                            <div class="call-us">{{ __('Email Us') }}</div>
                                            <span class="call-num">{{ $email }}</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-full-width @if(\request()->routeIs('home')) home @else other @endif">
            <div class="container">
                <div class="row">

                    <div id="_desktop_top_menu" class="menu js-top-menu hidden-xs hidden-sm @if(\request()->routeIs('home')) home @else open @endif">
                        <h2 class="home-title hidden-xs hidden-sm">
        <span>
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
               x="0px" y="0px" viewBox="0 0 300 300">
          <rect x="0" y="70.333" width="42.667" height="35.667"/>
          <rect x="0" y="160.667" width="42.667" height="35.667"/>
          <rect x="0" y="250" width="42.667" height="35.667"/>
          <rect x="85.333" y="70.333" width="230.557" height="35.667"/>
          <rect x="85.333" y="160.667" width="230.557" height="35.667"/>
          <rect x="85.333" y="250" width="230.557" height="35.667"/></svg>
        </span>{{ __('Shop By Categories') }}
                        </h2>
                        <ul id="top-menu" class="top-menu" data-depth="0">
                            @foreach($categories as $category)
                            <li class="top_level_category dropdown">
                                <a class="dropdown-item"
                                   href="{{ route('product.index',[app()->getLocale(),'category' => $category['id']]) }}">{{ $category->item->title }}
                                    @if($category->childs->count() > 0)<i class="fa fa-angle-right add hidden-xs hidden-sm"></i>@endif
                                </a>
                                @if($category->childs->count() > 0)
                                    <span class="pull-xs-right hidden-md hidden-lg">
                                          <span data-target="#top_sub_menu_6946" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                            <i class="fa fa-angle-down add"></i>
                                            <i class="fa fa-angle-up remove"></i>
                                          </span>
                                    </span>
                                    <div class="dropdown-menu popover sub-menu collapse">

                                        <ul class="list-unstyled childs_2 category_dropdownmenu  multiple-dropdown-menu "
                                            data-depth="1">
                                            @foreach($category->childs as $sub_category)
                                            <li class="category sub-category">
                                                <a class=""
                                                   href="{{ route('product.index',[app()->getLocale(),'category' => $sub_category->id]) }}">{{ $sub_category->item->title }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div id="mobile_top_menu_wrapper" class="hidden-lg hidden-md" style="display:none;">
                        <div id="top_menu_closer">
                            <i class="fa fa-close"></i>
                        </div>
                        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
                    </div>

                    <script type="text/javascript">
                        $("#_desktop_top_menu").click(function () {
                            $("#top-menu").slideToggle();
                            $('.wrapper').toggleClass('open');
                        });
                    </script>
                    <div id="_desktop_link_menu">
                        <div id="header_ishiheaderlinks" class="header-block">
                            <ul class="bullet link_container">
                                @foreach($menu as $item)
                                    <li ><a class="extra-link @if(request()->path() == substr($item->item->link,1)) active @endif" href="{{ $item->item->link }}">{{ $item->item->title }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div id="view_text">{{ __('View More') }}</div>
                    <div id="menu_text">{{ __('Menu') }}</div>

                </div>
            </div>
        </div>
    </header>
    <div id="spin-wrapper"></div>
    <div id="siteloader">
        <div class="loader loader-3">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ======= Quick view JS ========= -->
    <script>
        function quickbox() {
            if ($(window).width() > 767) {
                $('.quickview-button').magnificPopup({
                    type: 'iframe',
                    delegate: 'a',
                    preloader: true,
                    tLoading: 'Loading image #%curr%...',
                });
            }
        }

        jQuery(document).ready(function () {
            quickbox();
        });
        jQuery(window).resize(function () {
            quickbox();
        });
        $("input[name=\'search\']").keyup(function (event) {
            $('input[name=\'search\']').autocomplete({
                'source': function (request, response) {
                    $.ajax({
                        url: '/search?filter_name=' + encodeURIComponent(request),
                        dataType: 'json',
                        success: function (result) {
                            var products = result.data;
                            $('.ajaxishi-search ul li').remove();
                            $.each(products, function (index, product) {
                                var html = '<li>';
                                html += '<div>';
                                html += '<a href="' + product.url + '" title="' + product.title + '">';
                                html += '<div class="product-image"><img width="85" alt="' + product.title + '" src="' + product.image + '"></div>';
                                html += '<div class="product-desc">';
                                html += '<div class="product-name">' + product.title + '</div>';
                                if (product.discount > 0) {
                                    html += '<div class="product-price"><span class="special">' + product.price + ' MDL</span><span class="price">' + product.discount + ' MDL</span></div>';
                                } else {
                                    html += '<div class="product-price"><span class="price">' + product.price + ' MDL</span></div>';
                                }
                                html += '</div>';
                                html += '</a>';
                                html += '</div>';
                                html += '</li>';
                                $('.ajaxishi-search ul').append(html);
                            });
                            $('.ajaxishi-search').css('display', 'block');
                            return false;
                        }
                    });
                }
            });
        });
    </script>
@yield('content')
    <div id="_mobile_column_right" class="container"></div>
    <footer id="footer" class="@if(\request()->routeIs('home')) home-footer @else other-footer @endif">
        <div class="footer-container">
            <div class="container">
                <div class="row">
                    <div class="block-contact col-lg-3 col-md-3 col-sm-12">
                        <h5 class="hidden-sm hidden-xs">{{ __('Store Information') }}</h5>
                        <div class="footer-title clearfix  hidden-lg hidden-md collapsed"
                             data-target="#contact-info-container" data-toggle="collapse">
                            <span class="h3">{{ __('Store Information') }}</span>
                            <span class="navbar-toggler collapse-icons">
                            <i class="fa fa-angle-down add"></i>
                            <i class="fa fa-angle-up remove"></i>
                          </span>
                        </div>
                        <div id="contact-info-container" class="footer-contact collapse footer-dropdown">
                            <div class="block address col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span class="icon"><i class="fa fa-map-marker"></i></span>
                                <div class="content">{{ $address }}
                                </div>
                            </div>
                            <div class="block phone col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span class="icon phone"><i class="fa fa-phone"></i></span>
                                <div class="content">
                                    <a href="#">{{ $phone }}</a>
                                </div>
                            </div>
                            <div class="block email col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span class="icon"><i class="fa fa-envelope"></i></span>
                                <div class="content">
                                    <a href="mailto:info@example.com">{{ $email }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="information col-lg-3 col-md-3 col-sm-12 footer-block">
                        <h5 class="hidden-sm hidden-xs">{{ __('Information') }}</h5>
                        <div class="footer-title clearfix  hidden-lg hidden-md collapsed"
                             data-target="#information-container" data-toggle="collapse">
                            <span class="h3">{{ __('Information') }}</span>
                            <span class="navbar-toggler collapse-icons">
                          <i class="fa fa-angle-down add"></i>
                          <i class="fa fa-angle-up remove"></i>
                        </span>
                        </div>
                        <div id="information-container" class="collapse footer-dropdown">
                            <ul class="list-unstyled">
                                @foreach($footer_links_1 as $link)
                                    <li><a href="{{ route('page.show', [app()->getLocale(), $link->item->slug]) }}">{{ $link->item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                    <section class="account col-lg-3 col-md-3 col-sm-12 footer-block">
                        <h5 class="hidden-sm hidden-xs">{{ __('My Account') }}</h5>
                        <div class="footer-title clearfix  hidden-lg hidden-md collapsed"
                             data-target="#account-container" data-toggle="collapse">
                            <span class="h3">{{ __('My Account') }}</span>
                            <span class="navbar-toggler collapse-icons">
                          <i class="fa fa-angle-down add"></i>
                          <i class="fa fa-angle-up remove"></i>
                        </span>
                        </div>
                        <div id="account-container" class="collapse footer-dropdown">
                            <ul class="list-unstyled">
                                @foreach($footer_links_2 as $link)
                                    <li><a href="{{ route('page.show', [app()->getLocale(), $link->item->slug]) }}">{{ $link->item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                    <section class="extras col-lg-3 col-md-3 col-sm-12 footer-block">
                        <h5 class="hidden-sm hidden-xs">{{ __('Extras') }}</h5>
                        <div class="footer-title clearfix  hidden-lg hidden-md collapsed"
                             data-target="#extras-container" data-toggle="collapse">
                            <span class="h3">{{ __('Extras') }}</span>
                            <span class="navbar-toggler collapse-icons">
                          <i class="fa fa-angle-down add"></i>
                          <i class="fa fa-angle-up remove"></i>
                        </span>
                        </div>
                        <div id="extras-container" class="collapse footer-dropdown">
                            <ul class="list-unstyled">
                                @foreach($footer_links_3 as $link)
                                    <li><a href="{{ route('page.show', [app()->getLocale(), $link->item->slug]) }}">{{ $link->item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                    <section class="Services col-lg-3 col-md-3 col-sm-12 footer-block">
                        <h5 class="hidden-sm hidden-xs">{{ __('Customer Service') }}</h5>
                        <div class="footer-title clearfix  hidden-lg hidden-md collapsed"
                             data-target="#services-container" data-toggle="collapse">
                            <span class="h3">{{ __('Customer Service') }}</span>
                            <span class="navbar-toggler collapse-icons">
                          <i class="fa fa-angle-down add"></i>
                          <i class="fa fa-angle-up remove"></i>
                        </span>
                        </div>
                        <div id="services-container" class="collapse footer-dropdown">
                            <ul class="list-unstyled">
                                @foreach($footer_links_4 as $link)
                                    <li><a href="{{ route('page.show', [app()->getLocale(), $link->item->slug]) }}">{{ $link->item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </section>

                </div>
            </div>
        </div>
        <div class="footer-after">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div id="ishipayment-549660676" class="ishipaymentblock">
                            <div id="paymentblock">
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/american-express-44x30.png') }}" alt="Paymenticon-1"
                                             class="img-responsive"/>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/discover-44x30.png') }}" alt="Paymenticon-2"
                                             class="img-responsive"/>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/google-wallet-44x30.png') }}" alt="Paymenticon-3"
                                             class="img-responsive"/>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/mastercard-44x30.png') }}" alt="Paymenticon-4"
                                             class="img-responsive"/>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/paypal-44x30.png') }}" alt="Paymenticon-5" class="img-responsive"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12"><p class="footer-aftertext">Powered By <a href="http://www.opencart.com">OpenCart</a> Your Store &copy; 2023</p></div>
                </div>
            </div>
        </div>
        <a id="slidetop" href="#"></a>
        </div>
    </footer>

    @livewireScripts

</body>
</html>
