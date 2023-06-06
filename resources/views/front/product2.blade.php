<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Apple Cinema</title>
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
</head>
<body>
<main class="other-page">
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
                            <p>Welcome To Our Toy Store</p>
                        </div>


                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 right-nav">
                        <div class="language-selector">
                            <form
                                action="index.php?route=common/language/language"
                                method="post" enctype="multipart/form-data" id="form-language">
                                <div class="btn-group dropdown">
                                    <span class="language-selector-label">Language :</span>
                                    <a title="Language" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="expand-more">Language</span> <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <button class="btn btn-link btn-block language-select" type="button"
                                                    name="en-gb"><img src="{{ asset('assets/images/en-gb.png') }}"
                                                                      alt="English" title="English"/> English
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn btn-link btn-block language-select" type="button"
                                                    name="ar"><img src="{{ asset('assets/images/ar.png') }}"
                                                                   alt="Arabic" title="Arabic"/> Arabic
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <input type="hidden" name="code" value=""/>
                                <input type="hidden" name="redirect"
                                       value="index.php?route=product/product&amp;product_id=42"/>
                            </form>
                        </div>
                        <div class="currency-selector">
                            <form
                                action="index.php?route=common/currency/currency"
                                method="post" enctype="multipart/form-data" id="form-currency">
                                <div class="btn-group dropdown">
                                    <span class="currency-selector-label">Currency :</span>
                                    <a title="Currency" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="expand-more">Currency</span> <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button"
                                                    name="EUR">€ Euro
                                            </button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button"
                                                    name="GBP">£ Pound Sterling
                                            </button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button"
                                                    name="USD">$ US Dollar
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <input type="hidden" name="code" value=""/>
                                <input type="hidden" name="redirect"
                                       value="index.php?route=product/product&amp;product_id=42"/>
                            </form>
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a title="Account" class="dropdown-toggle" data-toggle="dropdown">
                                    <div class="user-logo"></div>
                                    <span class="expand-more">Account</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="index.php?route=account/register">
                                            Register</a></li>
                                    <li>
                                        <a href="index.php?route=account/login">
                                            Login</a></li>
                                    <li>
                                        <a href="index.php?route=account/wishlist"
                                           id="wishlist-total" title="Wish List (0)"><span class="wishlist-text">Wish List (0)</span></a>
                                    </li>
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
                                <a href="index.php?route=common/home"><img
                                        src="image/catalog/Logo.png"
                                        title="Your Store" alt="Your Store" class="img-responsive"/></a>
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
                                               placeholder="Search Our Catalog" class="form-control input-lg"/>
                                        <div class="ajaxishi-search" style="display: none;">
                                            <ul></ul>
                                        </div>
                                        <span class="input-group-btn">
    <button id="ajax-search-btn" type="button" class="btn btn-default btn-lg">Search</button>
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
                                    <div id="cart" class="btn-group btn-block">
                                        <button type="button" data-loading-text="Loading..."
                                                class="btn btn-inverse btn-block btn-lg">
    <span class="cart-link">
      <span class="cart-img hidden-xs hidden-sm">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
          <symbol id="shopping-bag" viewBox="0 0 590 590"><title>shopping-bag</title><path
                  d="M258.005,218.355c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5l73.9-73.9c4.7-4.7,4.7-12.3,0-17s-12.3-4.7-17,0l-65.4,65.5l-26.4-26.4c-4.7-4.7-12.3-4.7-17,0s-4.7,12.3,0,17L258.005,218.355z"/><path
                  d="M145.005,318.355h268.9c29.7,0,53.8-24.2,53.8-53.8v-113.3c0-6.6-5.4-12-12-12s-12,5.4-12,12v113.2c0,16.5-13.4,29.8-29.8,29.8h-268.9c-16.5,0-29.8-13.4-29.8-29.8v-66.7v-74.6v-9.7v-70.2c0-0.4,0-0.9-0.1-1.3c0-0.1,0-0.2,0-0.3c0-0.3-0.1-0.6-0.1-0.8s-0.1-0.5-0.2-0.7c0-0.1-0.1-0.3-0.1-0.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.2-0.2-0.5-0.3-0.7c-0.1-0.1-0.1-0.3-0.2-0.4c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.1-0.2-0.3-0.3-0.4c-0.1-0.2-0.3-0.4-0.4-0.5s-0.2-0.2-0.3-0.3c-0.2-0.2-0.3-0.4-0.5-0.6c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.2-0.4-0.4-0.6-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.1-0.4-0.3-0.6-0.4c-0.2-0.2-0.5-0.3-0.7-0.5c-0.1,0-0.2-0.1-0.2-0.2c-0.4-0.2-0.8-0.4-1.2-0.6l-73.9-31c-6.1-2.6-13.1,0.3-15.7,6.4c-2.6,6,0.3,13.1,6.4,15.7l66.5,28.1v62.3v9.7v74.6v66.7v84.3c0,28.2,21.7,51.3,49.3,53.6c-5.6,8.4-8.9,18.5-8.9,29.4c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2c0-10.8-3.2-20.8-8.7-29.2h127.3c-5.5,8.4-8.7,18.4-8.7,29.2c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2s-23.9-53.2-53.2-53.2h-256c-16.5,0-29.8-13.4-29.8-29.8v-39.5C123.705,314.955,134.005,318.355,145.005,318.355z M213.905,431.755c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S213.905,415.655,213.905,431.755z M430.105,431.755c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S430.105,415.655,430.105,431.755z"/></symbol>
        </svg>
        <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#shopping-bag" x="8%" y="7%"></use></svg>
      </span>
      <span class="cart-img hidden-lg hidden-md">
          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="cart-responsive" viewBox="0 0 510 510"><title>cart-responsive</title>
                <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6
                v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4
                C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4
                C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z
                 M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4
                L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2
                V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2
                H270l22.4,209.2H30z"></path>
            </symbol>
        </svg>
        <svg class="icon" viewBox="0 0 40 40"><use xlink:href="#cart-responsive" x="13%" y="13%"></use></svg>
      </span>
      <span class="cart-content">
        <span class="cart-name">Shopping Cart</span>
        <span class="cart-products-count hidden-sm hidden-xs">0 item</span>
        <span class="cart-products-count hidden-lg hidden-md">0</span>
      </span>
    </span>
                                        </button>
                                        <ul class="cart-dropdown">
                                            <li>
                                                <p class="empty text-left">Your shopping cart is empty!</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="_desktop-contactinfo">
                                <div class="contact-num">
                                    <a href="index.php?route=information/contact">
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
                                            <div class="call-us">Email Us</div>
                                            <span class="call-num">info@example.com</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-full-width other">
            <div class="container">
                <div class="row">

                    <div id="_desktop_top_menu" class="menu js-top-menu hidden-xs hidden-sm open">
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
        </span>Shop By Categories
                        </h2>
                        <ul id="top-menu" class="top-menu" data-depth="0">
                            <li class="top_level_category dropdown">
                                <a class="dropdown-item"
                                   href="index.php?route=product/category&amp;path=20">Toys
                                    <i class="fa fa-angle-right add hidden-xs hidden-sm"></i>
                                </a>
                                <span class="pull-xs-right hidden-md hidden-lg">
                  <span data-target="#top_sub_menu_5785" data-toggle="collapse" class="navbar-toggler collapse-icons">
                    <i class="fa fa-angle-down add"></i>
                    <i class="fa fa-angle-up remove"></i>
                  </span>
              </span>
                                <div id="top_sub_menu_5785" class="dropdown-menu popover sub-menu collapse">
                                    <ul class="list-unstyled childs_1 category_dropdownmenu  multiple-dropdown-menu "
                                        data-depth="1">

                                        <li class="category dropdown sub-category">
                                            <a class="dropdown-item dropdown-submenu"
                                               href="index.php?route=product/category&amp;path=20_26">Buster
                                                suit</a>
                                            <span class="pull-xs-right hidden-md hidden-lg">
                            <span data-target="#top_sub_menu_3713" data-toggle="collapse"
                                  class="navbar-toggler collapse-icons">
                              <i class="fa fa-angle-down add"></i>
                              <i class="fa fa-angle-up remove"></i>
                            </span>
                        </span>
                                            <div id="top_sub_menu_3713" class="dropdown-inner collapse">
                                                <ul class="list-unstyled childs_2 top-menu" data-depth="2">
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=20_26_60">FunGals</a>
                                                    </li>
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=20_26_59">Infant
                                                            bodysuit</a>
                                                    </li>
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=20_26_61">Showtoons</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled childs_1 category_dropdownmenu  multiple-dropdown-menu "
                                        data-depth="1">

                                        <li class="category dropdown sub-category">
                                            <a class="dropdown-item dropdown-submenu"
                                               href="index.php?route=product/category&amp;path=20_27">Alice
                                                band</a>
                                            <span class="pull-xs-right hidden-md hidden-lg">
                            <span data-target="#top_sub_menu_2346" data-toggle="collapse"
                                  class="navbar-toggler collapse-icons">
                              <i class="fa fa-angle-down add"></i>
                              <i class="fa fa-angle-up remove"></i>
                            </span>
                        </span>
                                            <div id="top_sub_menu_2346" class="dropdown-inner collapse">
                                                <ul class="list-unstyled childs_2 top-menu" data-depth="2">
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=20_27_63">Blanket
                                                            sleeper</a>
                                                    </li>
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=20_27_64">Sailor
                                                            dress</a>
                                                    </li>
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=20_27_62">Skeleton
                                                            suit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled childs_1 category_dropdownmenu  multiple-dropdown-menu "
                                        data-depth="1">

                                        <li class="category dropdown sub-category">
                                            <a class="dropdown-item dropdown-submenu"
                                               href="index.php?route=product/category&amp;path=20_77">Cloth
                                                diaper</a>
                                            <span class="pull-xs-right hidden-md hidden-lg">
                            <span data-target="#top_sub_menu_7051" data-toggle="collapse"
                                  class="navbar-toggler collapse-icons">
                              <i class="fa fa-angle-down add"></i>
                              <i class="fa fa-angle-up remove"></i>
                            </span>
                        </span>
                                            <div id="top_sub_menu_7051" class="dropdown-inner collapse">
                                                <ul class="list-unstyled childs_2 top-menu" data-depth="2">
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=20_77_80">Abercrombie</a>
                                                    </li>
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=20_77_79">OshKosh</a>
                                                    </li>
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=20_77_78">Tootsa
                                                            MacGinty</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="maintitle"><a
                                    href="index.php?route=product/category&amp;path=96">Toy
                                    Box</a></li>
                            <li class="top_level_category dropdown">
                                <a class="dropdown-item"
                                   href="index.php?route=product/category&amp;path=18">Accesories
                                    <i class="fa fa-angle-right add hidden-xs hidden-sm"></i>
                                </a>
                                <span class="pull-xs-right hidden-md hidden-lg">
                  <span data-target="#top_sub_menu_6964" data-toggle="collapse" class="navbar-toggler collapse-icons">
                    <i class="fa fa-angle-down add"></i>
                    <i class="fa fa-angle-up remove"></i>
                  </span>
              </span>
                                <div id="top_sub_menu_6964" class="dropdown-menu popover sub-menu collapse">
                                    <ul class="list-unstyled childs_1 category_dropdownmenu  multiple-dropdown-menu "
                                        data-depth="1">

                                        <li class="category dropdown sub-category">
                                            <a class="dropdown-item dropdown-submenu"
                                               href="index.php?route=product/category&amp;path=18_45">Premier
                                                Baby</a>
                                            <span class="pull-xs-right hidden-md hidden-lg">
                            <span data-target="#top_sub_menu_7527" data-toggle="collapse"
                                  class="navbar-toggler collapse-icons">
                              <i class="fa fa-angle-down add"></i>
                              <i class="fa fa-angle-up remove"></i>
                            </span>
                        </span>
                                            <div id="top_sub_menu_7527" class="dropdown-inner collapse">
                                                <ul class="list-unstyled childs_2 top-menu" data-depth="2">
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=18_45_83">Cushion
                                                            Seat</a>
                                                    </li>
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=18_45_82">Fun
                                                            Guns</a>
                                                    </li>
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=18_45_81">Hanky
                                                            Set</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled childs_1 category_dropdownmenu  multiple-dropdown-menu "
                                        data-depth="1">

                                        <li class="category dropdown sub-category">
                                            <a class="dropdown-item dropdown-submenu"
                                               href="index.php?route=product/category&amp;path=18_57">Bath
                                                Accesories</a>
                                            <span class="pull-xs-right hidden-md hidden-lg">
                            <span data-target="#top_sub_menu_5380" data-toggle="collapse"
                                  class="navbar-toggler collapse-icons">
                              <i class="fa fa-angle-down add"></i>
                              <i class="fa fa-angle-up remove"></i>
                            </span>
                        </span>
                                            <div id="top_sub_menu_5380" class="dropdown-inner collapse">
                                                <ul class="list-unstyled childs_2 top-menu" data-depth="2">
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=18_57_84">Bath
                                                            Safety</a>
                                                    </li>
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=18_57_85">Bath
                                                            Toys</a>
                                                    </li>
                                                    <li class="category">
                                                        <a class="dropdown-item"
                                                           href="index.php?route=product/category&amp;path=18_57_86">Face
                                                            Cloth</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="maintitle"><a
                                    href="index.php?route=product/category&amp;path=87">Components</a>
                            </li>
                            <li class="maintitle"><a
                                    href="index.php?route=product/category&amp;path=88">Outfits</a>
                            </li>
                            <li class="maintitle"><a
                                    href="index.php?route=product/category&amp;path=89">Brands</a>
                            </li>
                            <li class="maintitle"><a
                                    href="index.php?route=product/category&amp;path=33">Collection</a>
                            </li>
                            <li class="maintitle"><a
                                    href="index.php?route=product/category&amp;path=97">Fun
                                    Guns</a></li>
                            <li class="maintitle"><a
                                    href="index.php?route=product/category&amp;path=98">Teddies</a>
                            </li>
                            <li class="maintitle"><a
                                    href="index.php?route=product/category&amp;path=99">Toy
                                    Car</a></li>
                            <li class="maintitle"><a
                                    href="index.php?route=product/category&amp;path=100">Teddy</a>
                            </li>

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
                                <li><a class="extra-link" href="#">Home</a></li>
                                <li><a class="extra-link" href="#">Shop</a></li>
                                <li><a class="extra-link" href="#">Services</a></li>
                                <li><a class="extra-link" href="#">Contact</a></li>
                                <li><a class="extra-link" href="#">About Us</a></li>
                                <li><a class="extra-link" href="#">Blog</a></li>
                                <li><a class="extra-link" href="#">Login</a></li>
                                <li><a class="extra-link" href="#">CheckOut</a></li>
                                <li><a class="extra-link" href="#">Testimonial</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="view_text">View More</div>
                    <div id="menu_text">Menu</div>

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
                        url: 'index.php?route=product/search/autocomplete&filter_name=' + encodeURIComponent(request),
                        dataType: 'json',
                        success: function (result) {
                            var products = result.products;
                            $('.ajaxishi-search ul li').remove();
                            $.each(products, function (index, product) {
                                var html = '<li>';
                                html += '<div>';
                                html += '<a href="' + product.url + '" title="' + product.name + '">';
                                html += '<div class="product-image"><img alt="' + product.name + '" src="' + product.image + '"></div>';
                                html += '<div class="product-desc">';
                                html += '<div class="product-name">' + product.name + '</div>';
                                if (product.special) {
                                    html += '<div class="product-price"><span class="special">' + product.price + '</span><span class="price">' + product.special + '</span></div>';
                                } else {
                                    html += '<div class="product-price"><span class="price">' + product.price + '</span></div>';
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
                },
                'select': function (product) {
                    $('input[name=\'filter_name\']').val(product.name);
                }
            });
        });
    </script>
    <div id="product-product" class="container">
        <div class="wrapper_container row">
            <aside id="column-left" class="col-sm-3 hidden-xs">
                <div class="box">
                    <h2 class="page-title hidden-sm hidden-xs">
                        Categories
                    </h2>
                    <div class="block-title clearfix  hidden-lg hidden-md collapsed" data-target="#box-container"
                         data-toggle="collapse">
                        <span class="page-title">Categories</span>
                        <span class="navbar-toggler collapse-icons">
          <i class="fa fa-angle-down add"></i>
          <i class="fa fa-angle-up remove"></i>
        </span>
                    </div>
                    <div id="box-container" class="collapse data-toggler">
                        <ul class="category-top-menu">
                            <li>

                                <a href="index.php?route=product/category&amp;path=20"
                                   class="list-group-item">Toys (15)</a>
                            </li>
                            <li>

                                <a href="index.php?route=product/category&amp;path=96"
                                   class="list-group-item">Toy Box (0)</a>
                            </li>
                            <li>

                                <a href="index.php?route=product/category&amp;path=18"
                                   class="list-group-item">Accesories (12)</a>
                            </li>
                            <li>

                                <a href="index.php?route=product/category&amp;path=87"
                                   class="list-group-item">Components (3)</a>
                            </li>
                            <li>

                                <a href="index.php?route=product/category&amp;path=88"
                                   class="list-group-item">Outfits (3)</a>
                            </li>
                            <li>

                                <a href="index.php?route=product/category&amp;path=89"
                                   class="list-group-item">Brands (3)</a>
                            </li>
                            <li>

                                <a href="index.php?route=product/category&amp;path=33"
                                   class="list-group-item">Collection (3)</a>
                            </li>
                            <li>

                                <a href="index.php?route=product/category&amp;path=97"
                                   class="list-group-item">Fun Guns (0)</a>
                            </li>
                            <li>

                                <a href="index.php?route=product/category&amp;path=98"
                                   class="list-group-item">Teddies (0)</a>
                            </li>
                            <li>

                                <a href="index.php?route=product/category&amp;path=99"
                                   class="list-group-item">Toy Car (0)</a>
                            </li>
                            <li>

                                <a href="index.php?route=product/category&amp;path=100"
                                   class="list-group-item">Teddy (0)</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <section id="ishibannerblock-1815552175" class="ishibannerblock one_bannerblock">
                    <div class="bannerblock col-md-12 col-sm-12 col-xs-12">
                        <div class="image-container">
                            <a href="#" class="ishi-customhover-fadeinflip ">
                                <img
                                    src="image/cache/catalog/Left-banner-345x417.jpg"
                                    alt="" class="img-responsive">

                            </a>
                        </div>
                    </div>
                </section>
                <section class="featured-products">
                    <h3 class="page-title hidden-sm hidden-xs">
                        New Products
                    </h3>
                    <div class="block-title clearfix  hidden-lg hidden-md collapsed" data-target="#latest-container"
                         data-toggle="collapse">
                        <span class="h3">New Products</span>
                        <span class="navbar-toggler collapse-icons">
          <i class="fa fa-angle-down add"></i>
          <i class="fa fa-angle-up remove"></i>
        </span>
                    </div>
                    <div id="latest-container" class="collapse in data-toggler">
                        <div class="product-thumb transition">
                            <div class="image"><a
                                    href="index.php?route=product/product&amp;product_id=49"><img
                                        src="{{ asset('assets/images/6-370x370.jpg') }}" alt="Samsung Galaxy"
                                        title="Samsung Galaxy" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4>
                                    <a href="index.php?route=product/product&amp;product_id=49">Samsung
                                        Galaxy</a></h4>
                                <p class="description">Samsung Galaxy Tab 10.1, is the world&rsquo;s thinnest tablet,
                                    measuring 8.6 mm thickness, running w..</p>
                                <p class="price">
                                    <span class="price-new">$20.00</span> <span class="price-old">$241.99</span>
                                    <span class="price-tax">Ex Tax: $15.00</span>
                                </p>
                            </div>
                        </div>
                        <div class="product-thumb transition">
                            <div class="image"><a
                                    href="index.php?route=product/product&amp;product_id=48"><img
                                        src="{{ asset('assets/images/15-370x370.jpg') }}" alt="iPod Classic"
                                        title="iPod Classic" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4>
                                    <a href="index.php?route=product/product&amp;product_id=48">iPod
                                        Classic</a></h4>
                                <p class="description">More room to move.

                                    With 80GB or 160GB of storage and up to 40 hours of battery life, the new..</p>
                                <p class="price">
                                    <span class="price-new">$38.00</span> <span class="price-old">$122.00</span>
                                    <span class="price-tax">Ex Tax: $30.00</span>
                                </p>
                            </div>
                        </div>
                        <div class="product-thumb transition">
                            <div class="image"><a
                                    href="index.php?route=product/product&amp;product_id=47"><img
                                        src="{{ asset('assets/images/11-370x370.jpg') }}" alt="HP LP3065"
                                        title="HP LP3065" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4>
                                    <a href="index.php?route=product/product&amp;product_id=47">HP
                                        LP3065</a></h4>
                                <p class="description">Stop your co-workers in their tracks with the stunning new
                                    30-inch diagonal HP LP3065 Flat Panel Mon..</p>
                                <p class="price">
                                    $122.00
                                    <span class="price-tax">Ex Tax: $100.00</span>
                                </p>
                            </div>
                        </div>
                        <div class="product-thumb transition">
                            <div class="image"><a
                                    href="index.php?route=product/product&amp;product_id=46"><img
                                        src="{{ asset('assets/images/8-370x370.jpg') }}" alt="Sony VAIO"
                                        title="Sony VAIO" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4>
                                    <a href="index.php?route=product/product&amp;product_id=46">Sony
                                        VAIO</a></h4>
                                <p class="description">Unprecedented power. The next generation of processing technology
                                    has arrived. Built into the newest..</p>
                                <p class="price">
                                    $1,202.00
                                    <span class="price-tax">Ex Tax: $1,000.00</span>
                                </p>
                            </div>
                        </div>

                    </div>
                </section>
            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="breadcrumb-container">
                    <h1 class="page-title">Apple Cinema</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php?route=common/home"><i
                                    class="fa fa-home"></i></a></li>
                        <li>
                            <a href="index.php?route=product/product&amp;product_id=42">Apple
                                Cinema</a></li>
                    </ul>
                </div>
                <div class="product_carousel">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 product-left">
                            <div class="product-left-title hidden-lg hidden-md hidden-sm">
                                <h2 class="product-title">Apple Cinema</h2>
                                <ul class="list-unstyled price">
                                    <li>
                                        <h2 class="product-price">$122.00</h2>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-image thumbnails_horizontal">
                                <div class="carousel-container">
                                    <a class="thumbnail" href="{{ asset('assets/images/1-1000x1000.jpg') }}"
                                       title="Apple Cinema">
                                        <img src="{{ asset('assets/images/1-1000x1000.jpg') }}" title="Apple Cinema"
                                             alt="Apple Cinema"/>
                                    </a>
                                </div>
                                <div class="image_show">
                                    <div id="slider_carousel" class="owl-carousel">
                                        <div class="image-additional item">
                                            <a class="thumbnail" href="{{ asset('assets/images/10-1000x1000.jpg') }}"
                                               title="Apple Cinema">
                                                <img src="{{ asset('assets/images/10-370x370.jpg') }}"
                                                     title="Apple Cinema" alt="Apple Cinema"/>
                                            </a>
                                        </div>
                                        <div class="image-additional item">
                                            <a class="thumbnail" href="{{ asset('assets/images/11-1000x1000.jpg') }}"
                                               title="Apple Cinema">
                                                <img src="{{ asset('assets/images/11-370x370.jpg') }}"
                                                     title="Apple Cinema" alt="Apple Cinema"/>
                                            </a>
                                        </div>
                                        <div class="image-additional item">
                                            <a class="thumbnail" href="{{ asset('assets/images/12-1000x1000.jpg') }}"
                                               title="Apple Cinema">
                                                <img src="{{ asset('assets/images/12-370x370.jpg') }}"
                                                     title="Apple Cinema" alt="Apple Cinema"/>
                                            </a>
                                        </div>
                                        <div class="image-additional item">
                                            <a class="thumbnail" href="{{ asset('assets/images/13-1000x1000.jpg') }}"
                                               title="Apple Cinema">
                                                <img src="{{ asset('assets/images/13-370x370.jpg') }}"
                                                     title="Apple Cinema" alt="Apple Cinema"/>
                                            </a>
                                        </div>
                                        <div class="image-additional item">
                                            <a class="thumbnail" href="{{ asset('assets/images/14-1000x1000.jpg') }}"
                                               title="Apple Cinema">
                                                <img src="{{ asset('assets/images/14-370x370.jpg') }}"
                                                     title="Apple Cinema" alt="Apple Cinema"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_info clearfix">
                                <div id="accordion" class="panel-group" role="tablist">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <a data-toggle="collapse" href="#tab-description" data-parent="#accordion"
                                               aria-expanded="true"> Description </a>
                                        </div>
                                        <div id="tab-description" class="panel-collapse collapse in" role="tabpanel"
                                             aria-labelledby="headingOne">
                                            <div class="tab-description"><p>
                                                    The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600
                                                    pixel resolution. Designed specifically for the creative
                                                    professional, this display provides more space for easier access to
                                                    all the tools and palettes needed to edit, format and composite your
                                                    work. Combine this display with a Mac Pro, MacBook Pro, or PowerMac
                                                    G5 and there's no limit to what you can achieve. <br>
                                                    <br>
                                                    The Cinema HD features an active-matrix liquid crystal display that
                                                    produces flicker-free images that deliver twice the brightness,
                                                    twice the sharpness and twice the contrast ratio of a typical CRT
                                                    display. Unlike other flat panels, it's designed with a pure digital
                                                    interface to deliver distortion-free images that never need
                                                    adjusting. With over 4 million digital pixels, the display is
                                                    uniquely suited for scientific and technical applications such as
                                                    visualizing molecular structures or analyzing geological data.</p>
                                                <br>
                                                <p>
                                                    <b>System Requirements</b></p>
                                                <ul>
                                                    <li>
                                                        Mac Pro, all graphic options
                                                    </li>
                                                    <li>
                                                        MacBook Pro
                                                    </li>
                                                    <li>
                                                        Power Mac G5 (PCI-X) with ATI Radeon 9650 or better or NVIDIA
                                                        GeForce 6800 GT DDL or better
                                                    </li>
                                                    <li>
                                                        Power Mac G5 (PCI Express), all graphics options
                                                    </li>
                                                    <li>
                                                        PowerBook G4 with dual-link DVI support
                                                    </li>
                                                    <li>
                                                        Windows PC and graphics card that supports DVI ports with
                                                        dual-link digital bandwidth and VESA DDC standard for
                                                        plug-and-play setup
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default tab_review">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <a data-toggle="collapse" href="#tab-review" data-parent="#accordion"
                                               aria-expanded="false">Reviews (1)</a>
                                        </div>
                                        <div id="tab-review" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <form class="form-horizontal" id="form-review">
                                                    <div id="review"></div>
                                                    <h2>Write a review</h2>
                                                    <div class="form-group required">
                                                        <div class="col-sm-12">
                                                            <label class="control-label" for="input-name">Your
                                                                Name</label>
                                                            <input type="text" name="name" value="" id="input-name"
                                                                   class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <div class="col-sm-12">
                                                            <label class="control-label" for="input-review">Your
                                                                Review</label>
                                                            <textarea name="text" rows="5" id="input-review"
                                                                      class="form-control"></textarea>
                                                            <div class="help-block"><span
                                                                    class="text-danger">Note:</span> HTML is not
                                                                translated!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <div class="col-sm-12">
                                                            <label class="control-label radio-title">Rating</label>&nbsp;&nbsp;&nbsp;
                                                            <div class="form-radio">
                                                                <span>Bad</span>&nbsp;
                                                                <input type="radio" name="rating" value="1"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="2"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="3"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="4"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="5"/>
                                                                &nbsp;<span>Good</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="buttons clearfix">
                                                        <div class="pull-right">
                                                            <button type="button" id="button-review"
                                                                    data-loading-text="Loading..."
                                                                    class="btn btn-primary">Continue
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <a data-toggle="collapse" href="#tab-specification" data-parent="#accordion"
                                               aria-expanded="false">Specification</a>
                                        </div>
                                        <div id="tab-specification" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td colspan="2"><strong>Processor</strong></td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Clockspeed</td>
                                                        <td>100mhz</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 product-right">
                            <div class="product-left-title hidden-xs">
                                <h1 class="product-title">Apple Cinema</h1>
                            </div>

                            <div class="rating-wrapper">

                    <span class="fa fa-stack">
                      <i class="fa fa-star yellow fa-stack-2x"></i>
                    </span>

                                <span class="fa fa-stack">
                      <i class="fa fa-star yellow fa-stack-2x"></i>
                    </span>

                                <span class="fa fa-stack">
                      <i class="fa fa-star yellow fa-stack-2x"></i>
                    </span>

                                <span class="fa fa-stack">
                      <i class="fa fa-star gray fa-stack-2x"></i>
                    </span>

                                <span class="fa fa-stack">
                      <i class="fa fa-star gray fa-stack-2x"></i>
                    </span>
                                <a class="review-count" href="" onclick="customclick(); return false;">1 reviews</a> /
                                <a class="write-review" href="" onclick="customclick(); return false;"><i
                                        class="fa fa-pencil"></i> Write a review</a>
                            </div>

                            <ul class="list-unstyled price">
                                <li>
                                    <h2 class="product-price hidden-xs">$122.00</h2>
                                </li>
                                <li class="product-tax">Ex Tax: $100.00</li>
                                <li class="product-tax">Price in reward points: 400</li>
                                <hr>
                                <li>
                                </li>
                                <li>10 or more $107.60</li>
                                <li>20 or more $94.40</li>
                                <li>30 or more $81.20</li>
                            </ul>

                            <hr>
                            <div id="product">
                                <h3>Available Options</h3>
                                <div class="row">

                                    <div class="product_option col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group required ">
                                            <label class="control-label radio-text">Radio</label>
                                            <div id="input-option218">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="option[218]" value="5"/>

                                                        Small
                                                        (+$12.00)
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="option[218]" value="6"/>

                                                        Medium
                                                        (+$24.00)
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="product_option col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group required ">
                                            <label class="control-label checkbox-text">Checkbox</label>
                                            <div id="input-option234">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="option[234][]" value="18"/>
                                                        Checkbox 1
                                                        (+$24.00)
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="option[234][]" value="17"/>
                                                        Checkbox 1
                                                        (+$12.00)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product_option col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group required ">
                                            <label class="control-label" for="input-option217">Select</label>
                                            <select name="option[217]" id="input-option217" class="form-control">
                                                <option value=""> --- Please Select ---</option>
                                                <option value="4">Red
                                                    (+$4.80)
                                                </option>
                                                <option value="3">Blue
                                                    (+$3.60)
                                                </option>
                                                <option value="1">Green
                                                    (+$1.20)
                                                </option>
                                                <option value="2">Yellow
                                                    (+$2.40)
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="product_option col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group required ">
                                            <label class="control-label" for="input-option227">Date</label>
                                            <div class="input-group date">
                                                <input type="text" name="option[227]" value=""
                                                       data-date-format="YYYY-MM-DD" id="input-option227"
                                                       class="form-control"/>
                                                <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-info col-lg-12 col-md-12 col-sm-12 col-xs-12"><i
                                        class="fa fa-info-circle"></i> This product has a minimum quantity of 2
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-quantity">Qty</label>
                                <input type="text" name="quantity" value="2" size="2" id="input-quantity"
                                       class="form-control"/>
                                <input type="hidden" name="product_id" value="42"/>
                                <button type="button" id="button-cart" data-loading-text="Loading..."
                                        class="btn btn-primary btn-lg btn-block">Add to Cart
                                </button>
                                <button type="button" data-toggle="tooltip" class="btn btn-default wishlist"
                                        title="Add to Wish List" onclick="wishlist.add('42');">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <symbol id="heart-shape-outline" viewBox="0 0 1030 1030"><title>
                                                heart-shape-outline</title>
                                            <path
                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                        </symbol>
                                    </svg>
                                    <svg class="icon" viewBox="0 0 28 28">
                                        <use xlink:href="#heart-shape-outline" x="25%" y="26%"></use>
                                    </svg>
                                    <i class="fa fa-heart"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" class="btn btn-default compare"
                                        title="Compare this Product" onclick="compare.add('42');">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <symbol id="report1" viewBox="0 0 1190 1190"><title>report</title>
                                            <path
                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                            <path
                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                            <path d="m480 258.667969h60v220h-60zm0 0"/>
                                            <path
                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                            <path
                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                            <path
                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                            <path d="m200 118.667969h60v360h-60zm0 0"/>
                                            <path d="m340-1.332031h60v480h-60zm0 0"/>
                                            <path d="m60 358.667969h60v120h-60zm0 0"/>
                                            <path
                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                            <path
                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                            <path
                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                            <path
                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                            <path
                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                            <path
                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                            <path
                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                            <path
                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                        </symbol>
                                    </svg>
                                    <svg class="icon" viewBox="0 0 28 28">
                                        <use xlink:href="#report1" x="25%" y="26%"></use>
                                    </svg>
                                    <i class="fa fa-exchange"></i>
                                </button>
                            </div>

                            <ul class="list-unstyled attr">
                                <li><span>Brand:</span> <a
                                        href="index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                </li>
                                <li><span>Product Code:</span> Product 15</li>
                                <li><span>Reward Points:</span> 100</li>
                                <li><span>Availability:</span> In Stock</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="related-product">
                    <h3 class="home-title">Related Products</h3>
                    <div class="row">
                        <div class="related-carousel owl-carousel">
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image">
                                        <a href="index.php?route=product/product&amp;product_id=28">
                                            <img src="{{ asset('assets/images/12-370x370.jpg') }}" alt="HTC Touch HD"
                                                 title="HTC Touch HD" class="img-responsive"/>
                                        </a>
                                        <div class="rating">

                              <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="index.php?route=product/product&amp;product_id=28">HTC
                                                Touch HD</a></h4>
                                        <p class="description">HTC Touch - in High Definition. Watch music videos and
                                            streaming content in awe-inspiring high defin..</p>
                                        <p class="price">
                                            $122.00
                                            <span class="price-tax">Ex Tax: $100.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip"
                                                     title=" Quick View">
                                                    <a class="quickbox"
                                                       href="index.php?route=product/quick_view&amp;product_id=28">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                        onclick="wishlist.add('28');"><i class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                        onclick="compare.add('28');"><i class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="compare1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#compare1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Add to Cart"
                                                        onclick="cart.add('28');">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image">
                                        <a href="index.php?route=product/product&amp;product_id=30">
                                            <img src="{{ asset('assets/images/10-370x370.jpg') }}" alt="Canon EOS 5D"
                                                 title="Canon EOS 5D" class="img-responsive"/>
                                        </a>
                                        <div class="rating">

                              <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="index.php?route=product/product&amp;product_id=30">Canon
                                                EOS 5D</a></h4>
                                        <p class="description">Canon's press material for the EOS 5D states that it
                                            'defines (a) new D-SLR category', while we're n..</p>
                                        <p class="price">
                                            $122.00
                                            <span class="price-tax">Ex Tax: $100.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip"
                                                     title=" Quick View">
                                                    <a class="quickbox"
                                                       href="index.php?route=product/quick_view&amp;product_id=30">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                        onclick="wishlist.add('30');"><i class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                        onclick="compare.add('30');"><i class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="compare1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#compare1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Add to Cart"
                                                        onclick="cart.add('30');">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-countdowntime="2023-12-28">
                                <div class="product-thumb transition">
                                    <div class="image">
                                        <a href="index.php?route=product/product&amp;product_id=32">
                                            <img src="{{ asset('assets/images/18-370x370.jpg') }}" alt="iPod Touch"
                                                 title="iPod Touch" class="img-responsive"/>
                                        </a>
                                        <div class="rating">

                              <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>
                                        </div>

                                        <div class='countdown-container'>
                                            <div class='countdown-days counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Days</span>
                                            </div>
                                            <div class='countdown-hours counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Hours</span>
                                            </div>
                                            <div class='countdown-minutes counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Min</span>
                                            </div>
                                            <div class='countdown-seconds counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Sec</span>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="index.php?route=product/product&amp;product_id=32">iPod
                                                Touch</a></h4>
                                        <p class="description">Revolutionary multi-touch interface.
                                            iPod touch features the same multi-touch screen technology as..</p>
                                        <p class="price">
                                            <span class="price-new">$38.00</span> <span class="price-old">$122.00</span>
                                            <span class="price-tax">Ex Tax: $30.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip"
                                                     title=" Quick View">
                                                    <a class="quickbox"
                                                       href="index.php?route=product/quick_view&amp;product_id=32">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                        onclick="wishlist.add('32');"><i class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                        onclick="compare.add('32');"><i class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="compare1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#compare1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Add to Cart"
                                                        onclick="cart.add('32');">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image">
                                        <a href="index.php?route=product/product&amp;product_id=33">
                                            <img src="{{ asset('assets/images/7-370x370.jpg') }}"
                                                 alt="Samsung SyncMaster" title="Samsung SyncMaster"
                                                 class="img-responsive"/>
                                        </a>
                                        <div class="rating">
                                                    <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                            </span>
                                            <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                            </span>
                                            <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                            </span>
                                            <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                            </span>
                                            <span class="fa fa-stack">
                            <i class="fa fa-star gray fa-stack-2x"></i>
                            </span>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="index.php?route=product/product&amp;product_id=33">Samsung
                                                SyncMaster</a></h4>
                                        <p class="description">Imagine the advantages of going big without slowing down.
                                            The big 19&quot; 941BW monitor combines wi..</p>
                                        <p class="price">
                                            $242.00
                                            <span class="price-tax">Ex Tax: $200.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip"
                                                     title=" Quick View">
                                                    <a class="quickbox"
                                                       href="index.php?route=product/quick_view&amp;product_id=33">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                        onclick="wishlist.add('33');"><i class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                        onclick="compare.add('33');"><i class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="compare1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#compare1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Add to Cart"
                                                        onclick="cart.add('33');">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image">
                                        <a href="index.php?route=product/product&amp;product_id=34">
                                            <img src="{{ asset('assets/images/17-370x370.jpg') }}" alt="iPod Shuffle"
                                                 title="iPod Shuffle" class="img-responsive"/>
                                        </a>
                                        <div class="rating">

                              <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="index.php?route=product/product&amp;product_id=34">iPod
                                                Shuffle</a></h4>
                                        <p class="description">Born to be worn.

                                            Clip on the worlds most wearable music player and take up to 240 songs with
                                            y..</p>
                                        <p class="price">
                                            $122.00
                                            <span class="price-tax">Ex Tax: $100.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip"
                                                     title=" Quick View">
                                                    <a class="quickbox"
                                                       href="index.php?route=product/quick_view&amp;product_id=34">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                        onclick="wishlist.add('34');"><i class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                        onclick="compare.add('34');"><i class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="compare1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#compare1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Add to Cart"
                                                        onclick="cart.add('34');">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image">
                                        <a href="index.php?route=product/product&amp;product_id=36">
                                            <img src="{{ asset('assets/images/16-370x370.jpg') }}" alt="iPod Nano"
                                                 title="iPod Nano" class="img-responsive"/>
                                        </a>
                                        <div class="rating">

                              <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="index.php?route=product/product&amp;product_id=36">iPod
                                                Nano</a></h4>
                                        <p class="description">Video in your pocket.

                                            Its the small iPod with one very big idea: video. The worlds most
                                            popula..</p>
                                        <p class="price">
                                            $122.00
                                            <span class="price-tax">Ex Tax: $100.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip"
                                                     title=" Quick View">
                                                    <a class="quickbox"
                                                       href="index.php?route=product/quick_view&amp;product_id=36">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                        onclick="wishlist.add('36');"><i class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                        onclick="compare.add('36');"><i class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="compare1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#compare1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Add to Cart"
                                                        onclick="cart.add('36');">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-countdowntime="2023-12-28">
                                <div class="product-thumb transition">
                                    <div class="image">
                                        <a href="index.php?route=product/product&amp;product_id=40">
                                            <img src="{{ asset('assets/images/14-370x370.jpg') }}" alt="iPhone"
                                                 title="iPhone" class="img-responsive"/>
                                        </a>
                                        <div class="rating">

                              <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>
                                        </div>

                                        <div class='countdown-container'>
                                            <div class='countdown-days counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Days</span>
                                            </div>
                                            <div class='countdown-hours counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Hours</span>
                                            </div>
                                            <div class='countdown-minutes counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Min</span>
                                            </div>
                                            <div class='countdown-seconds counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Sec</span>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="index.php?route=product/product&amp;product_id=40">iPhone</a>
                                        </h4>
                                        <p class="description">iPhone is a revolutionary new mobile phone that allows
                                            you to make a call by simply tapping a name o..</p>
                                        <p class="price">
                                            <span class="price-new">$50.00</span> <span class="price-old">$123.20</span>
                                            <span class="price-tax">Ex Tax: $40.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip"
                                                     title=" Quick View">
                                                    <a class="quickbox"
                                                       href="index.php?route=product/quick_view&amp;product_id=40">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                        onclick="wishlist.add('40');"><i class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                        onclick="compare.add('40');"><i class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="compare1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#compare1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Add to Cart"
                                                        onclick="cart.add('40');">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-countdowntime="2023-12-27">
                                <div class="product-thumb transition">
                                    <div class="image">
                                        <a href="index.php?route=product/product&amp;product_id=41">
                                            <img src="{{ asset('assets/images/13-370x370.jpg') }}" alt="iMac"
                                                 title="iMac" class="img-responsive"/>
                                        </a>
                                        <div class="rating">

                              <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>
                                        </div>

                                        <div class='countdown-container'>
                                            <div class='countdown-days counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Days</span>
                                            </div>
                                            <div class='countdown-hours counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Hours</span>
                                            </div>
                                            <div class='countdown-minutes counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Min</span>
                                            </div>
                                            <div class='countdown-seconds counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Sec</span>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="index.php?route=product/product&amp;product_id=41">iMac</a>
                                        </h4>
                                        <p class="description">Just when you thought iMac had everything, now there´s
                                            even more. More powerful Intel Core 2 Duo pro..</p>
                                        <p class="price">
                                            <span class="price-new">$50.00</span> <span class="price-old">$122.00</span>
                                            <span class="price-tax">Ex Tax: $40.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip"
                                                     title=" Quick View">
                                                    <a class="quickbox"
                                                       href="index.php?route=product/quick_view&amp;product_id=41">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                        onclick="wishlist.add('41');"><i class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                        onclick="compare.add('41');"><i class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="compare1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#compare1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Add to Cart"
                                                        onclick="cart.add('41');">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image">
                                        <a href="index.php?route=product/product&amp;product_id=46">
                                            <img src="{{ asset('assets/images/8-370x370.jpg') }}" alt="Sony VAIO"
                                                 title="Sony VAIO" class="img-responsive"/>
                                        </a>
                                        <div class="rating">

                              <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="index.php?route=product/product&amp;product_id=46">Sony
                                                VAIO</a></h4>
                                        <p class="description">Unprecedented power. The next generation of processing
                                            technology has arrived. Built into the newest..</p>
                                        <p class="price">
                                            $1,202.00
                                            <span class="price-tax">Ex Tax: $1,000.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip"
                                                     title=" Quick View">
                                                    <a class="quickbox"
                                                       href="index.php?route=product/quick_view&amp;product_id=46">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                        onclick="wishlist.add('46');"><i class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                        onclick="compare.add('46');"><i class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="compare1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#compare1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Add to Cart"
                                                        onclick="cart.add('46');">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image">
                                        <a href="index.php?route=product/product&amp;product_id=47">
                                            <img src="{{ asset('assets/images/11-370x370.jpg') }}" alt="HP LP3065"
                                                 title="HP LP3065" class="img-responsive"/>
                                        </a>
                                        <div class="rating">

                              <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="index.php?route=product/product&amp;product_id=47">HP
                                                LP3065</a></h4>
                                        <p class="description">Stop your co-workers in their tracks with the stunning
                                            new 30-inch diagonal HP LP3065 Flat Panel Mon..</p>
                                        <p class="price">
                                            $122.00
                                            <span class="price-tax">Ex Tax: $100.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip"
                                                     title=" Quick View">
                                                    <a class="quickbox"
                                                       href="index.php?route=product/quick_view&amp;product_id=47">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                        onclick="wishlist.add('47');"><i class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                        onclick="compare.add('47');"><i class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="compare1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#compare1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Add to Cart"
                                                        onclick="cart.add('47');">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-countdowntime="2023-12-27">
                                <div class="product-thumb transition">
                                    <div class="image">
                                        <a href="index.php?route=product/product&amp;product_id=48">
                                            <img src="{{ asset('assets/images/15-370x370.jpg') }}" alt="iPod Classic"
                                                 title="iPod Classic" class="img-responsive"/>
                                        </a>
                                        <div class="rating">

                              <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>

                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>
                                        </div>

                                        <div class='countdown-container'>
                                            <div class='countdown-days counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Days</span>
                                            </div>
                                            <div class='countdown-hours counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Hours</span>
                                            </div>
                                            <div class='countdown-minutes counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Min</span>
                                            </div>
                                            <div class='countdown-seconds counter'>
                                                <span class="data"></span>
                                                <span class="lbl">Sec</span>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="caption">
                                        <h4>
                                            <a href="index.php?route=product/product&amp;product_id=48">iPod
                                                Classic</a></h4>
                                        <p class="description">More room to move.

                                            With 80GB or 160GB of storage and up to 40 hours of battery life, the
                                            new..</p>
                                        <p class="price">
                                            <span class="price-new">$38.00</span> <span class="price-old">$122.00</span>
                                            <span class="price-tax">Ex Tax: $30.00</span>
                                        </p>
                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip"
                                                     title=" Quick View">
                                                    <a class="quickbox"
                                                       href="index.php?route=product/quick_view&amp;product_id=48">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1100 1100"><title>
                                                                    eye-open</title>
                                                                <path
                                                                    d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="27%" y="28%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                        onclick="wishlist.add('48');"><i class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                                heart-shape-outline</title>
                                                            <path
                                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                        onclick="compare.add('48');"><i class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="compare1" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                            <path
                                                                d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                            <path
                                                                d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                            <path
                                                                d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                            <path
                                                                d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                            <path
                                                                d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#compare1" x="28%" y="34%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Add to Cart"
                                                        onclick="cart.add('48');">
                                                    <div class="button-cart">
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="addtocart" viewBox="0 0 1050 1050"><title>
                                                                    addtocart</title>
                                                                <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                                                <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                                                <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                                        </svg>
                                                    </div>
                                                    <span class="lblcart">Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript"><!--
        $('select[name=\'recurring_id\'], input[name="quantity"]').change(function () {
            $.ajax({
                url: 'index.php?route=product/product/getRecurringDescription',
                type: 'post',
                data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
                dataType: 'json',
                beforeSend: function () {
                    $('#recurring-description').html('');
                },
                success: function (json) {
                    $('.alert-dismissible, .text-danger').remove();

                    if (json['success']) {
                        $('#recurring-description').html(json['success']);
                    }
                }
            });
        });
        //--></script>
    <script type="text/javascript"><!--
        $('#button-cart').on('click', function () {
            $.ajax({
                url: 'index.php?route=checkout/cart/add',
                type: 'post',
                data: $('input[type=\'text\'], input[type=\'hidden\'], input[type=\'radio\']:checked, input[type=\'checkbox\']:checked, select, textarea'),
                dataType: 'json',
                beforeSend: function () {
                    $('#button-cart').button('loading');
                },
                complete: function () {
                    $('#button-cart').button('reset');
                },
                success: function (json) {
                    $('.alert-dismissible, .text-danger').remove();
                    $('.form-group').removeClass('has-error');

                    if (json['error']) {
                        if (json['error']['option']) {
                            for (i in json['error']['option']) {
                                var element = $('#input-option' + i.replace('_', '-'));

                                if (element.parent().hasClass('input-group')) {
                                    element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                                } else {
                                    element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                                }
                            }
                        }

                        if (json['error']['recurring']) {
                            $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                        }

                        // Highlight any found errors
                        $('.text-danger').parent().addClass('has-error');
                    }

                    if (json['success']) {

                        $('#cart > button').html('<span class="cart-link"><span class="cart-img hidden-xs hidden-sm"><svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="shopping-bag" viewBox="0 0 590 590"><title>shopping-bag</title><path d="M258.005,218.355c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5l73.9-73.9c4.7-4.7,4.7-12.3,0-17s-12.3-4.7-17,0l-65.4,65.5l-26.4-26.4c-4.7-4.7-12.3-4.7-17,0s-4.7,12.3,0,17L258.005,218.355z"/><path d="M145.005,318.355h268.9c29.7,0,53.8-24.2,53.8-53.8v-113.3c0-6.6-5.4-12-12-12s-12,5.4-12,12v113.2c0,16.5-13.4,29.8-29.8,29.8h-268.9c-16.5,0-29.8-13.4-29.8-29.8v-66.7v-74.6v-9.7v-70.2c0-0.4,0-0.9-0.1-1.3c0-0.1,0-0.2,0-0.3c0-0.3-0.1-0.6-0.1-0.8s-0.1-0.5-0.2-0.7c0-0.1-0.1-0.3-0.1-0.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.2-0.2-0.5-0.3-0.7c-0.1-0.1-0.1-0.3-0.2-0.4c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.1-0.2-0.3-0.3-0.4c-0.1-0.2-0.3-0.4-0.4-0.5s-0.2-0.2-0.3-0.3c-0.2-0.2-0.3-0.4-0.5-0.6c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.2-0.4-0.4-0.6-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.1-0.4-0.3-0.6-0.4c-0.2-0.2-0.5-0.3-0.7-0.5c-0.1,0-0.2-0.1-0.2-0.2c-0.4-0.2-0.8-0.4-1.2-0.6l-73.9-31c-6.1-2.6-13.1,0.3-15.7,6.4c-2.6,6,0.3,13.1,6.4,15.7l66.5,28.1v62.3v9.7v74.6v66.7v84.3c0,28.2,21.7,51.3,49.3,53.6c-5.6,8.4-8.9,18.5-8.9,29.4c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2c0-10.8-3.2-20.8-8.7-29.2h127.3c-5.5,8.4-8.7,18.4-8.7,29.2c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2s-23.9-53.2-53.2-53.2h-256c-16.5,0-29.8-13.4-29.8-29.8v-39.5C123.705,314.955,134.005,318.355,145.005,318.355z M213.905,431.755c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S213.905,415.655,213.905,431.755z M430.105,431.755c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S430.105,415.655,430.105,431.755z"/></symbol></svg><svg class="icon" viewBox="0 0 30 30"><use xlink:href="#shopping-bag" x="8%" y="7%"></use></svg></span><span class="cart-img hidden-lg hidden-md"><svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="cart-responsive" viewBox="0 0 510 510"><title>cart-responsive</title><path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6zM98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2H270l22.4,209.2H30z"></path></symbol></svg><svg class="icon" viewBox="0 0 40 40"><use xlink:href="#cart-responsive" x="13%" y="13%"></use></svg></span><span class="cart-content"><span class="cart-name">' + $('#cart .cart-name').text() + '</span><span class="cart-products-count hidden-sm hidden-xs">' + json['text_items_small'] + ' ' + json['total'] + '</span><span class="cart-products-count hidden-lg hidden-md">' + json['text_items_small'] + '</span></span></span>');

                        $.notify({message: json.success}, {
                            type: "success",
                            offset: 0,
                            placement: {from: "top", align: "center"},
                            animate: {enter: "animated fadeInDown", exit: "animated fadeOutUp"},
                            template: '<div data-notify="container" class="col-xs-12 alert alert-{0}" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>'
                        });


                        $('#cart > ul').load('index.php?route=common/cart/info ul li');
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });
        //--></script>
    <script type="text/javascript"><!--
        $('.date').datetimepicker({
            language: 'en-gb',
            pickTime: false
        });

        $('.datetime').datetimepicker({
            language: 'en-gb',
            pickDate: true,
            pickTime: true
        });

        $('.time').datetimepicker({
            language: 'en-gb',
            pickDate: false
        });

        $('button[id^=\'button-upload\']').on('click', function () {
            var node = this;

            $('#form-upload').remove();

            $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

            $('#form-upload input[name=\'file\']').trigger('click');

            if (typeof timer != 'undefined') {
                clearInterval(timer);
            }

            timer = setInterval(function () {
                if ($('#form-upload input[name=\'file\']').val() != '') {
                    clearInterval(timer);

                    $.ajax({
                        url: 'index.php?route=tool/upload',
                        type: 'post',
                        dataType: 'json',
                        data: new FormData($('#form-upload')[0]),
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function () {
                            $(node).button('loading');
                        },
                        complete: function () {
                            $(node).button('reset');
                        },
                        success: function (json) {
                            $('.text-danger').remove();

                            if (json['error']) {
                                $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                            }

                            if (json['success']) {
                                alert(json['success']);

                                $(node).parent().find('input').val(json['code']);
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        }
                    });
                }
            }, 500);
        });
        //--></script>
    <script type="text/javascript"><!--



        function customclick() {
            $('a[href=\'#tab-review .panel-default\']').trigger('click');
            $('html, body').animate({scrollTop: $(".tab_review").offset().top}, 2000);
            $('.tab_review .collapse').removeClass('in');
            $('#tab-review').addClass('in');
        }

        $(document).ready(function () {
            $('.thumbnails').magnificPopup({
                type: 'image',
                delegate: '.image_popup',
                gallery: {
                    enabled: true
                }
            });
            $('.thumbnails_horizontal').magnificPopup({
                type: 'image',
                delegate: 'a',
                gallery: {
                    enabled: true
                }
            });
            $('.related-carousel').owlCarousel({
                loop: false,
                nav: true,
                dots: false,
                rewind: true,
                rtl: $('html').attr('dir') == 'rtl' ? true : false,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 2,
                    },
                    544: {
                        items: 2
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 2
                    },
                    1200: {
                        items: 4
                    }
                }
            });
            $('.additional-carousel .item').click(function () {
                var a = parseInt($('.additional-carousel .item').index(this)) + 1;
                var selector = ".number_" + a;
                $('html, body').animate({
                    scrollTop: $(selector).offset().top
                }, 500);
            });

            var positions = [];
            $(".item_image").each(function (counter) {
                positions[counter] = $(this).offset().top + $(".number_1").outerHeight();
            });

            $(window).scroll(function (event) {
                var scroll = $(window).scrollTop();
                $('.additional-carousel .item').removeClass('active');    // Do something
                for (var i = 0; i < positions.length; i++) { //console.log();
                    if (scroll < positions[i]) {
                        $('.additional-carousel .item:nth-child(' + (i + 1) + ')').addClass('active');
                        break;
                    }
                }
            });
        });
        //--></script>
    <script>
        $('.image_show').magnificPopup({
            type: 'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
        $('#slider_carousel').owlCarousel({
            loop: false,
            nav: true,
            margin: 15,
            dots: false,
            rewind: true,
            rtl: $('html').attr('dir') == 'rtl' ? true : false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 2
                },
                443: {
                    items: 3
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1199: {
                    items: 4
                }
            }
        });
    </script>

    <div id="_mobile_column_right" class="container"></div>
    <footer id="footer" class="other-footer">
        <div class="footer-container">
            <div class="container">
                <div class="row">
                    <div class="block-contact col-lg-3 col-md-3 col-sm-12">
                        <h5 class="hidden-sm hidden-xs">Store Information</h5>
                        <div class="footer-title clearfix  hidden-lg hidden-md collapsed"
                             data-target="#contact-info-container" data-toggle="collapse">
                            <span class="h3">Store Information</span>
                            <span class="navbar-toggler collapse-icons">
                            <i class="fa fa-angle-down add"></i>
                            <i class="fa fa-angle-up remove"></i>
                          </span>
                        </div>
                        <div id="contact-info-container" class="footer-contact collapse footer-dropdown">
                            <div class="block address col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span class="icon"><i class="fa fa-map-marker"></i></span>
                                <div class="content">151, Demo Store
                                    United States
                                </div>
                            </div>
                            <div class="block phone col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span class="icon phone"><i class="fa fa-phone"></i></span>
                                <div class="content">
                                    <a href="#">9898976767</a>
                                </div>
                            </div>
                            <div class="block email col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span class="icon"><i class="fa fa-envelope"></i></span>
                                <div class="content">
                                    <a href="mailto:info@example.com">info@example.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="information col-lg-3 col-md-3 col-sm-12 footer-block">
                        <h5 class="hidden-sm hidden-xs">Information</h5>
                        <div class="footer-title clearfix  hidden-lg hidden-md collapsed"
                             data-target="#information-container" data-toggle="collapse">
                            <span class="h3">Information</span>
                            <span class="navbar-toggler collapse-icons">
                          <i class="fa fa-angle-down add"></i>
                          <i class="fa fa-angle-up remove"></i>
                        </span>
                        </div>
                        <div id="information-container" class="collapse footer-dropdown">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="index.php?route=information/information&amp;information_id=4">About
                                        Us</a></li>
                                <li>
                                    <a href="index.php?route=information/information&amp;information_id=6">Delivery</a>
                                </li>
                                <li>
                                    <a href="index.php?route=information/information&amp;information_id=3">Privacy
                                        Policy</a></li>
                                <li>
                                    <a href="index.php?route=information/information&amp;information_id=5">Terms
                                        &amp; Conditions</a></li>
                            </ul>
                        </div>
                    </section>
                    <section class="account col-lg-3 col-md-3 col-sm-12 footer-block">
                        <h5 class="hidden-sm hidden-xs">My Account</h5>
                        <div class="footer-title clearfix  hidden-lg hidden-md collapsed"
                             data-target="#account-container" data-toggle="collapse">
                            <span class="h3">My Account</span>
                            <span class="navbar-toggler collapse-icons">
                          <i class="fa fa-angle-down add"></i>
                          <i class="fa fa-angle-up remove"></i>
                        </span>
                        </div>
                        <div id="account-container" class="collapse footer-dropdown">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="index.php?route=account/account">My
                                        Account</a></li>
                                <li><a href="index.php?route=account/order">Order
                                        History</a></li>
                                <li>
                                    <a href="index.php?route=information/sitemap">Site
                                        Map</a></li>
                                <li>
                                    <a href="index.php?route=account/wishlist">Wish
                                        List</a></li>
                            </ul>
                        </div>
                    </section>
                    <section class="extras col-lg-3 col-md-3 col-sm-12 footer-block">
                        <h5 class="hidden-sm hidden-xs">Extras</h5>
                        <div class="footer-title clearfix  hidden-lg hidden-md collapsed"
                             data-target="#extras-container" data-toggle="collapse">
                            <span class="h3">Extras</span>
                            <span class="navbar-toggler collapse-icons">
                          <i class="fa fa-angle-down add"></i>
                          <i class="fa fa-angle-up remove"></i>
                        </span>
                        </div>
                        <div id="extras-container" class="collapse footer-dropdown">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="index.php?route=product/manufacturer">Brands</a>
                                </li>
                                <li>
                                    <a href="index.php?route=account/voucher">Gift
                                        Certificates</a></li>
                                <li>
                                    <a href="index.php?route=information/contact">Contact
                                        Us</a></li>
                                <li>
                                    <a href="index.php?route=affiliate/login">Affiliate</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="Services col-lg-3 col-md-3 col-sm-12 footer-block">
                        <h5 class="hidden-sm hidden-xs">Customer Service</h5>
                        <div class="footer-title clearfix  hidden-lg hidden-md collapsed"
                             data-target="#services-container" data-toggle="collapse">
                            <span class="h3">Customer Service</span>
                            <span class="navbar-toggler collapse-icons">
                          <i class="fa fa-angle-down add"></i>
                          <i class="fa fa-angle-up remove"></i>
                        </span>
                        </div>
                        <div id="services-container" class="collapse footer-dropdown">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="index.php?route=account/return/add">Returns</a>
                                </li>
                                <li>
                                    <a href="index.php?route=account/newsletter">Newsletter</a>
                                </li>
                                <li>
                                    <a href="index.php?route=product/special">Specials</a>
                                </li>
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
                        <div id="ishipayment-1307621991" class="ishipaymentblock">
                            <div id="paymentblock">
                                <div class="item">
                                    <a href="#">
                                        <img
                                            src="image/cache/catalog/Payment/american-express-44x30.png"
                                            alt="Paymenticon-1" class="img-responsive"/>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img
                                            src="image/cache/catalog/Payment/discover-44x30.png"
                                            alt="Paymenticon-2" class="img-responsive"/>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img
                                            src="image/cache/catalog/Payment/google-wallet-44x30.png"
                                            alt="Paymenticon-3" class="img-responsive"/>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img
                                            src="image/cache/catalog/Payment/mastercard-44x30.png"
                                            alt="Paymenticon-4" class="img-responsive"/>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <img
                                            src="image/cache/catalog/Payment/paypal-44x30.png"
                                            alt="Paymenticon-5" class="img-responsive"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12"><p class="footer-aftertext">Powered By <a
                                href="http://www.opencart.com">OpenCart</a> Your Store &copy; 2023</p></div>
                </div>
            </div>
        </div>
        <a id="slidetop" href="#"></a>
        </div>
    </footer>
</body>
</html>
