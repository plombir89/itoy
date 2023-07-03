<div class="related-product">
    <h3 class="home-title">{{ __('Related Products') }}</h3>
    <div class="row">
        <div class="related-carousel owl-carousel">
            @foreach($related as $product)
                <div class="item"
                     data-countdowntime="">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="{{ route('product.show', [app()->getLocale(), $product->item['slug']]) }}">
                                <img src="{{ asset('storage/'.$product['img']) }}" alt="{{ $product->item->title }}"
                                     title="{{ $product->item->title }}" class="img-responsive">
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
                                    <button type="button" data-toggle="tooltip" title=""
                                            onclick="wishlist.add({{ $product->id }});"
                                            data-original-title="{{ __('Add to Wish List') }}"><i
                                            class="fa fa-heart"></i>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                            <symbol id="heart-shape-outline" viewBox="0 0 1150 1150"><title>
                                                    heart-shape-outline</title>
                                                <path
                                                    d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"></path>
                                            </symbol>
                                        </svg>
                                        <svg class="icon" viewBox="0 0 30 30">
                                            <use xlink:href="#heart-shape-outline" x="27%" y="31%"></use>
                                        </svg>
                                    </button>
                                </div>


                                <div class="btn-cart">
                                    <button type="button" data-toggle="tooltip" title=""
                                            onclick="cart.add({{ $product->id }});" data-original-title="{{ __('Add to Cart') }}">
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
                                        <span class="lblcart">{{ __('Add to Cart') }}</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
