@extends('front.layouts.main')

@section('content')

        <div id="common-home">

            <div id="content">
                <div class="slider-banner">
                    <div class="container">

                        @include('front.blocks.slider')

                        @include('front.blocks.four_bannerblock')


                    </div>
                </div>
            </div>
            <div id="wrapper">
                <div class="container">
                    <div class="main-bg">
                        <div class="row">
                            <div id="top_home" class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <section id="ishiproductblock-501401729" class="ishiproductsblock">
                                    <h3 class="home-title">{{ __('Trending Products') }}</h3>
                                    <ul class="ishiproductstab nav nav-tabs clearfix">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#featured-products-block717870357" data-toggle="tab">{{ __('Featured') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#new-products-block717870357" data-toggle="tab">{{ __('Special') }}</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="featured-products-block717870357">
                                            <div class="block_content row">
                                                <div class="owl-carousel">
                                                    @foreach($featured as $product)
                                                    <div class="multilevel-item">
                                                        <div class="product-container">
                                                            <div class="item product-thumb" data-countdowntime="">
                                                                <div class="image">
                                                                    <a href="{{ route('product.show', [app()->getLocale(), $product->item['slug']]) }}">
                                                                        <img src="{{ asset('storage/'.$product['img']) }}" alt="{{ $product->item->title }}"
                                                                             title="{{ $product->item->title }}" class="img-responsive"/>
                                                                    </a>
                                                                    <div class="rating">

                                                                        @for($i = 1;$i <= 5; $i++)
                                                                            <span class="fa fa-stack">
                                                                                <i class="fa fa-star @if($i <= $product->rating) yellow @else gray @endif fa-stack-2x"></i>
                                                                            </span>
                                                                        @endfor
                                                                    </div>


                                                                </div>
                                                                <div class="caption">
                                                                    <h4>
                                                                        <a href="{{ route('product.show', [app()->getLocale(), $product->item['slug']]) }}">{{ $product->item->title }}</a></h4>
                                                                    <p class="description">
                                                                        {{ Str::limit(strip_tags($product->item->text), 150) }}</p>

                                                                    <p class="price">
                                                                        @if($product['discount'] > 0)
                                                                            <span class="price-new">{{ $product['price'] }} MDL</span> <span class="price-old">{{ $product['discount'] }} MDL</span>
                                                                        @else
                                                                            {{ $product['price'] }} MDL
                                                                        @endif
                                                                    </p>

                                                                    <div class="button-group">

                                                                        <div class="btn-wishlist">
                                                                            <button type="button" data-toggle="tooltip"
                                                                                    title="{{ __('Add to Wish List') }}"
                                                                                    onclick="wishlist.add({{ $product->id }});"><i
                                                                                    class="fa fa-heart"></i>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                     style="display: none;">
                                                                                    <symbol id="heart-shape-outline"
                                                                                            viewBox="0 0 1150 1150"><title>
                                                                                            heart-shape-outline</title>
                                                                                        <path d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                                                                    </symbol>
                                                                                </svg>
                                                                                <svg class="icon" viewBox="0 0 30 30">
                                                                                    <use xlink:href="#heart-shape-outline"
                                                                                         x="27%" y="31%"></use>
                                                                                </svg>
                                                                            </button>
                                                                        </div>

                                                                        <div class="btn-cart">
                                                                            <button type="button" data-toggle="tooltip"
                                                                                    title="{{ __('Add to Cart') }}"
                                                                                    onclick="cart.add({{ $product->id }});">
                                                                                <div class="button-cart">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                         style="display: none;">
                                                                                        <symbol id="addtocart"
                                                                                                viewBox="0 0 1050 1050">
                                                                                            <title>addtocart</title>
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
                                                                                        <use xlink:href="#addtocart" x="25%"
                                                                                             y="25%"></use>
                                                                                    </svg>
                                                                                </div>
                                                                                <span class="lblcart">{{ __('Add to Cart') }}</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="bestseller-products-block717870357">
                                            <div class="block_content row">
                                                <div class="owl-carousel">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="new-products-block717870357">
                                            <div class="block_content row">
                                                <div class="owl-carousel">
                                                    @foreach($special as $product)
                                                    <div class="multilevel-item">

                                                        <div class="product-container">
                                                            <div class="item product-thumb" data-countdowntime="">
                                                                <div class="image">
                                                                    <a href="{{ route('product.show', [app()->getLocale(), $product->item['slug']]) }}">
                                                                        <img src="{{ asset('storage/'.$product['img']) }}" alt="{{ $product->item->title }}"
                                                                             title="{{ $product->item->title }}" class="img-responsive"/>
                                                                    </a>
                                                                    <div class="rating">

                                                                        @for($i = 1;$i <= 5; $i++)
                                                                            <span class="fa fa-stack">
                                                                                <i class="fa fa-star @if($i <= $product->rating) yellow @else gray @endif fa-stack-2x"></i>
                                                                            </span>
                                                                        @endfor
                                                                    </div>


                                                                </div>
                                                                <div class="caption">
                                                                    <h4>
                                                                        <a href="{{ route('product.show', [app()->getLocale(), $product->item['slug']]) }}">{{ $product->item->title }}</a></h4>
                                                                    <p class="description">{{ Str::limit(strip_tags($product->item->text), 150) }}</p>
                                                                    <p class="price">
                                                                        @if($product['discount'] > 0)
                                                                            <span class="price-new">{{ $product['price'] }} MDL</span> <span class="price-old">{{ $product['discount'] }} MDL</span>
                                                                        @else
                                                                            {{ $product['price'] }} MDL
                                                                        @endif
                                                                    </p>
                                                                    <div class="button-group">

                                                                        <div class="btn-wishlist">
                                                                            <button type="button" data-toggle="tooltip"
                                                                                    title="{{ __('Add to Wish List') }}"
                                                                                    onclick="wishlist.add({{ $product->id }});"><i
                                                                                    class="fa fa-heart"></i>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                     style="display: none;">
                                                                                    <symbol id="heart-shape-outline"
                                                                                            viewBox="0 0 1150 1150"><title>
                                                                                            heart-shape-outline</title>
                                                                                        <path d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                                                                    </symbol>
                                                                                </svg>
                                                                                <svg class="icon" viewBox="0 0 30 30">
                                                                                    <use xlink:href="#heart-shape-outline"
                                                                                         x="27%" y="31%"></use>
                                                                                </svg>
                                                                            </button>
                                                                        </div>

                                                                        <div class="btn-cart">
                                                                            <button type="button" data-toggle="tooltip"
                                                                                    title="{{ __('Add to Cart') }}"
                                                                                    onclick="cart.add({{ $product->id }});"
                                                                                    class="sold-out" disabled>
                                                                                <div class="button-cart">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                         style="display: none;">
                                                                                        <symbol id="addtocart"
                                                                                                viewBox="0 0 1050 1050">
                                                                                            <title>addtocart</title>
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
                                                                                        <use xlink:href="#addtocart" x="25%"
                                                                                             y="25%"></use>
                                                                                    </svg>
                                                                                </div>
                                                                                <span class="lblcart">{{ __('Add to Cart') }}</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="special-products-block717870357">
                                            <div class="block_content row">
                                                <div class="owl-carousel">

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <script type="text/javascript">
                                        $('#ishiproductblock-501401729 .owl-carousel').owlCarousel({
                                            loop: false,
                                            nav: true,
                                            dots: false,
                                            rewind: true,
                                            rtl: $('html').attr('dir') == 'rtl' ? true : false,
                                            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                                            responsive: {
                                                0: {
                                                    items: 2
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
                                    </script>
                                    <script type="text/javascript"><!--
                                        $('#ishiproductblock-501401729 li a:first').tab('show');
                                        //--></script>
                                </section>
                                <section class="ishiservicesblock clearfix" style="background: #ffffff;">
                                    <div class="services col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <a href="#" class="service-bg">
                                            <div class="service-img"
                                                 style="background-image: url(https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/services/services-1-55x55.png);"></div>
                                            <div class="service-block">
                                                <div class="service-title">Worldwide Delivery</div>
                                                <div class="service-desc">Lorem ipsum Is Dummy Text</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="services col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <a href="#" class="service-bg">
                                            <div class="service-img"
                                                 style="background-image: url(https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/services/services-2-55x55.png);"></div>
                                            <div class="service-block">
                                                <div class="service-title">Gift Voucher</div>
                                                <div class="service-desc">Lorem ipsum Is Dummy Text</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="services col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <a href="#" class="service-bg">
                                            <div class="service-img"
                                                 style="background-image: url(https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/services/services-3-55x55.png);"></div>
                                            <div class="service-block">
                                                <div class="service-title">24X7 Support</div>
                                                <div class="service-desc">Lorem ipsum Is Dummy Text</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="services col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <a href="#" class="service-bg">
                                            <div class="service-img"
                                                 style="background-image: url(https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/services/services-4-55x55.png);"></div>
                                            <div class="service-block">
                                                <div class="service-title">Great Saving</div>
                                                <div class="service-desc">Lorem ipsum Is Dummy Text</div>
                                            </div>
                                        </a>
                                    </div>
                                </section>

                                <section id="ishitwobannerblock-745783984" class="ishitwobannerblock">
                                    <div class="bannerblock col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="image-container">
                                            <a href="#" class="">
                                                <img src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/Twobanner/banner-1-532x299.png"
                                                     alt="Amazing" class="img-responsive">

                                                <div class="banner-data">
                                                    <div class="banner-title">Amazing</div>
                                                    <div class="banner-subtitle">Toy Store</div>
                                                    <div href="#" class="banner-btn btn-primary">Shop Now</div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="bannerblock col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="image-container">
                                            <a href="#" class="">
                                                <img src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/Twobanner/banner-2-532x299.png"
                                                     alt="Big Offer" class="img-responsive">

                                                <div class="banner-data">
                                                    <div class="banner-title">Big Offer</div>
                                                    <div class="banner-subtitle">50% Off</div>
                                                    <div href="#" class="banner-btn btn-primary">Shop Now</div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                </section>
                                <section class="smartblog_block clearfix">
                                    <h3 class="home-title">{{ __('Latest Blog') }}</h3>
                                    <div id="smartblog-carousel" class="owl-carousel">

                                        @foreach($latestBlogs as $blog)
                                        <div class="blog_post item">
                                            <div class="news_module_image_holder">

                                                <a href="{{ route('blog.show', [app()->getLocale(), $blog->item->slug]) }}">
                                                    <img src="{{ asset('storage/'. $blog->img) }}"
                                                         alt="{{ $blog->item->title }}" title="{{ $blog->item->title }}" class="img-responsive"/>
                                                    <div class="blog-hover"></div>
                                                </a>
                                                <a class="blogicons icon readmore_link" title="Click to view Read More "
                                                   href="{{ route('blog.show', [app()->getLocale(), $blog->item->slug]) }}"><i
                                                        class="fa fa-link"></i></a>
                                            </div>
                                            <div class="blog_content">
                                                <div class="date-comment">
                                                    <div class="date-time">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <span class="day_date">{{ $blog->start_date }}</span>
                                                    </div>
                                                </div>
                                                <h4 class="blog_title"><a
                                                        href="{{ route('blog.show', [app()->getLocale(), $blog->item->slug]) }}">{{ $blog->item->title }}</a></h4>
                                                <div class="blog-desc">{{ Str::limit(strip_tags($blog->item->text), 80) }}
                                                </div>
                                                <div class="view-blog">
                                                    <div class="read-more"><a
                                                            href="{{ route('blog.show', [app()->getLocale(), $blog->item->slug]) }}">{{ __('Read more') }}</a></div>
                                                    <i class="fa fa-long-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <script type="text/javascript">
                                        $('.smartblog_block .owl-carousel').owlCarousel({
                                            loop: false,
                                            nav: true,
                                            dots: false,
                                            rewind: true,
                                            margin: 30,
                                            rtl: $('html').attr('dir') == 'rtl' ? true : false,
                                            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                                            autoplay: false,
                                            responsive: {
                                                0: {
                                                    items: 1
                                                },
                                                544: {
                                                    items: 1
                                                },
                                                768: {
                                                    items: 2
                                                },
                                                991: {
                                                    items: 2
                                                },
                                                1200: {
                                                    items: 3
                                                }
                                            }
                                        });
                                    </script>
                                </section>
                                <div id="_mobile_column_left" class="container"></div>
                                <div id="_mobile_column_right" class="container"></div>
                                <div id="_mobile_manufacturerblock"></div>
                                <div id="_desktop_manufacturerblock">
                                    <div id="ishimanufacturer-1071435732" class="manufacturerblock">
                                        <div class="owl-carousel">
                                            <div class="item">
                                                <a href="#">
                                                    <img src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/brand/Brand-Logo-1-194x80.png"
                                                         alt="Apple" class="img-responsive"/>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a href="#">
                                                    <img src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/brand/Brand-Logo-2-194x80.png"
                                                         alt="Canon" class="img-responsive"/>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a href="#">
                                                    <img src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/brand/Brand-Logo-3-194x80.png"
                                                         alt="Hewlett-Packard" class="img-responsive"/>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a href="#">
                                                    <img src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/brand/Brand-Logo-4-194x80.png"
                                                         alt="HTC" class="img-responsive"/>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a href="#">
                                                    <img src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/brand/Brand-Logo-5-194x80.png"
                                                         alt="Palm" class="img-responsive"/>
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a href="#">
                                                    <img src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/brand/Brand-Logo-6-194x80.png"
                                                         alt="Sony" class="img-responsive"/>
                                                </a>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            $('#ishimanufacturer-1071435732 .owl-carousel').owlCarousel({
                                                loop: true,
                                                nav: false,
                                                dots: false,
                                                autoplay: true,
                                                animateOut: 'fadeOut',
                                                rtl: $('html').attr('dir') == 'rtl' ? true : false,
                                                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                                                responsive: {
                                                    0: {
                                                        items: 2
                                                    },
                                                    480: {
                                                        items: 3
                                                    },
                                                    768: {
                                                        items: 4
                                                    },
                                                    992: {
                                                        items: 4
                                                    },
                                                    1200: {
                                                        items: 5
                                                    }
                                                }
                                            });
                                        </script>
                                    </div>
                                </div>

                            </div>
                            <div id="top_left" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <aside id="column-left" class="col-sm-3 hidden-xs">


                                    <section id="ishibannerblock-952355189" class="ishibannerblock one_bannerblock">
                                        <div class="bannerblock col-md-12 col-sm-12 col-xs-12">
                                            <div class="image-container">
                                                <a href="#" class="ishi-customhover-fadeinflip ">
                                                    <img src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/Left-banner-345x417.jpg"
                                                         alt="" class="img-responsive">

                                                </a>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="ishitestimonials">
                                        <h3 class="home-title hidden-sm hidden-xs">Our Client Say</h3>
                                        <div class="block-title clearfix  hidden-lg hidden-md collapsed"
                                             data-target="#testimonials" data-toggle="collapse">
                                            <span class="page-title">Our Client Say</span>
                                            <span class="navbar-toggler collapse-icons">
			<i class="fa fa-angle-down add"></i>
			<i class="fa fa-angle-up remove"></i>
		</span>
                                        </div>
                                        <div id="ishitesimonial-883999752">
                                            <div id="testimonials" class="ishitestimonials-container collapse data-toggler">
                                                <div class="owl-carousel">

                                                    <div class="item">
                                                        <div class="testimonial-img">
                                                            <img src="{{ asset('assets/images/testimonial-1.png') }}"
                                                                 alt="luies charls">
                                                        </div>
                                                        <span class="quote">
						    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
						        <symbol id="quote" viewBox="0 0 300 300"><title>quote</title>
						          <g>
						            <g>
						              <g>
						                <polygon
                                            points="298.7,128 234.7,128 277.3,42.7 213.3,42.7 170.7,128 170.7,256 298.7,256 			"></polygon>
						                <polygon
                                            points="128,256 128,128 64,128 106.7,42.7 42.7,42.7 0,128 0,256 			"></polygon>
						              </g>
						            </g>
						          </g>
						        </symbol>
						  </svg>
						  <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#quote" x="0%" y="0%"></use></svg>
						</span>
                                                        <div class="user-description">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry.
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <div class="user-count">1</div>
                                                            <span class="user-name">
								luies charls
							</span>
                                                            <span class="user-designation">
								Web Designer
							</span>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="testimonial-img">
                                                            <img src="{{ asset('assets/images/testimonial-2.png') }}"
                                                                 alt="luies charls">
                                                        </div>
                                                        <span class="quote">
						    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
						        <symbol id="quote" viewBox="0 0 300 300"><title>quote</title>
						          <g>
						            <g>
						              <g>
						                <polygon
                                            points="298.7,128 234.7,128 277.3,42.7 213.3,42.7 170.7,128 170.7,256 298.7,256 			"></polygon>
						                <polygon
                                            points="128,256 128,128 64,128 106.7,42.7 42.7,42.7 0,128 0,256 			"></polygon>
						              </g>
						            </g>
						          </g>
						        </symbol>
						  </svg>
						  <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#quote" x="0%" y="0%"></use></svg>
						</span>
                                                        <div class="user-description">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry.
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <div class="user-count">2</div>
                                                            <span class="user-name">
								luies charls
							</span>
                                                            <span class="user-designation">
								Web Designer
							</span>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="testimonial-img">
                                                            <img src="{{ asset('assets/images/testimonial-3.png') }}"
                                                                 alt="luies charls">
                                                        </div>
                                                        <span class="quote">
						    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
						        <symbol id="quote" viewBox="0 0 300 300"><title>quote</title>
						          <g>
						            <g>
						              <g>
						                <polygon
                                            points="298.7,128 234.7,128 277.3,42.7 213.3,42.7 170.7,128 170.7,256 298.7,256 			"></polygon>
						                <polygon
                                            points="128,256 128,128 64,128 106.7,42.7 42.7,42.7 0,128 0,256 			"></polygon>
						              </g>
						            </g>
						          </g>
						        </symbol>
						  </svg>
						  <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#quote" x="0%" y="0%"></use></svg>
						</span>
                                                        <div class="user-description">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry.
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <div class="user-count">3</div>
                                                            <span class="user-name">
								luies charls
							</span>
                                                            <span class="user-designation">
								Web Designer
							</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            $('#ishitesimonial-883999752 .owl-carousel').owlCarousel({
                                                loop: true,
                                                nav: true,
                                                dots: false,
                                                autoplay: 1,
                                                rtl: $('html').attr('dir') == 'rtl' ? true : false,
                                                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                                                items: 1
                                            });
                                        </script>
                                        <style>
                                            .ishitestimonials {
                                                background-color: #ffffff
                                            }
                                        </style>
                                    </section>
                                    <div class="block_newsletter">
                                        <div id="boxes" class="newletter-container">
                                            <div style="" id="dialog" class="window">
                                                <div class="box">
                                                    <div id="newsletter-container" class="box-content">
                                                        <div class="newsletter_text">
                                                            <h2 class="home-title">Newsletter</h2>
                                                            <div class="newsletter-content">
                                                                <div class="newsletter-img">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         style="display: none;">
                                                                        <symbol id="mail" viewBox="0 0 700 700"><title>
                                                                                mail</title>
                                                                            <path d="m0 246.724v239.33l149.29-140.88c-130.966-86.37-61.55-40.598-149.29-98.45z"></path>
                                                                            <path d="m360.72 345.174 149.28 140.88v-239.33c-.06.04-149.22 98.411-149.28 98.45z"></path>
                                                                            <path d="m263.26 409.444c-4.996 3.304-11.513 3.311-16.52 0l-71.72-47.3-152.27 143.69h464.5l-152.26-143.69z"></path>
                                                                            <path d="m248.387 6.665-41.727 36.789h96.68l-41.727-36.789c-3.779-3.332-9.447-3.332-13.226 0z"></path>
                                                                            <path d="m53.83 246.284c0-34.385 0-32.474 0-68.1-34.605 30.506-25.145 22.166-44.19 38.96 0 0 22.249 14.676 44.19 29.14z"></path>
                                                                            <path d="m500.36 217.144c-18.72-16.507-7.886-6.956-44.19-38.96v68.1c21.908-14.442 44.19-29.14 44.19-29.14z"></path>
                                                                            <path d="m255 378.954c49.145-32.405 113.848-75.077 171.17-112.88v-182.62c0-5.523-4.477-10-10-10h-322.34c-5.523 0-10 4.477-10 10v182.62c149.534 98.618 92.855 61.242 171.17 112.88zm-77.14-235.84h154.28c8.28 0 15 6.72 15 15 0 8.29-6.72 15-15 15h-154.28c-8.28 0-15-6.71-15-15 0-8.28 6.72-15 15-15zm-15 90.75v-.1c0-7.7 5.82-14.06 13.3-14.9h157.68c7.48.84 13.3 7.2 13.3 14.9v.1c-.05 8.24-6.75 14.9-15 14.9h-154.28c-8.25 0-14.95-6.66-15-14.9z"></path>
                                                                        </symbol>
                                                                    </svg>
                                                                    <svg class="icon" viewBox="0 0 40 40">
                                                                        <use xlink:href="#mail" x="12%" y="0%"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="newsletter-title">
                                                                    <div class="subtitle">Sign Up &amp; Get News</div>
                                                                    <p>Contrary to popular belief, Lorem is not simply
                                                                        random text</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="newsletter">
                                                            <div id="frm_subscribe" class="newsletter_form">
                                                                <form name="subscribe" id="subscribe">
                                                                    <input type="text" class="text-email"
                                                                           placeholder="Your email address" value=""
                                                                           name="subscribe_email" id="subscribe_email">
                                                                    <input type="hidden" class="text-email"
                                                                           placeholder="Your email address" value=""
                                                                           name="subscribe_name" id="subscribe_name"/>
                                                                    <a class="button btn-submit"
                                                                       onclick="email_subscribe()"><span>Subscribe</span>
                                                                    </a>
                                                                    <div id="notification-normal"></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            function email_subscribe() {
                                                $.ajax({
                                                    type: 'post',
                                                    url: 'index.php?route=extension/module/newslettersubscribe/subscribe',
                                                    dataType: 'html',
                                                    data: $("#subscribe").serialize(),
                                                    success: function (html) {
                                                        try {

                                                            eval(html);

                                                        } catch (e) {
                                                        }

                                                    }
                                                });
                                            }

                                            function email_unsubscribe() {
                                                $.ajax({
                                                    type: 'post',
                                                    url: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
                                                    dataType: 'html',
                                                    data: $("#subscribe").serialize(),
                                                    success: function (html) {
                                                        try {

                                                            eval(html);

                                                        } catch (e) {
                                                        }
                                                    }
                                                });
                                                $('html, body').delay(1500).animate({scrollTop: 0}, 'slow');
                                            }
                                        </script>
                                        <script type="text/javascript">
                                            $(document).ready(function () {
                                                $('#subscribe_email').keypress(function (e) {
                                                    if (e.which == 13) {
                                                        e.preventDefault();
                                                        email_subscribe();
                                                    }
                                                    var name = $(this).val();
                                                    $('#subscribe_name').val(name);
                                                });
                                                $('#subscribe_email').change(function () {
                                                    var name = $(this).val();
                                                    $('#subscribe_name').val(name);
                                                });

                                            });
                                        </script>
                                        <style>
                                            .block_newsletter {
                                                background-color: #f6f6f6
                                            }
                                        </style>
                                    </div>
                                </aside>

                            </div>
                            <div id="top_right">

                            </div>
                        </div>
                        <div class="block-social">
                            <div id="block-container" class="footer-contact"
                                 data-source-url="{{ asset('assets/images/social_bg.png') }}"
                                 style="background-image: url({{ asset('assets/images/social_bg.png') }})">
                                <ul>
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


@endsection
