<div id="ishislider-1317781388" class="ishislider">
    <div class="owl-carousel">
        @foreach($slides as $slide)

        <div class="item">
            <a href="#" class="slideshow__link">
                <img src="{{ asset('storage/'.$slide->img) }}" alt="TOY'S WORLD" class="img-responsive"/>
                <div class="container">
                    <div class="slider-content col-lg-6 col-md-6 col-sm-6 col-xs-6 slider-content-left"
                         style="text-align:center">
                        <div class="sub-title" style="color:#fd726d">Discount</div>
                        <div class="main-title" style="color: #f7dc95">TOY'S WORLD</div>
                        <div class="desc" style="border:1px solid rgba(255, 255, 255, 0.9)">
                            <p style="color: #ffffff">SAVE TO 40% OFF TOY</p>
                        </div>
                        <div class="slider-btn"><span class="btn-default btn">SHOP NOW</span></div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach


    </div>
    <script type="text/javascript">
        $('#ishislider-1317781388 .owl-carousel').owlCarousel({
            loop: true,
            nav: true,
            dots: true,
            autoplay: false,
            rtl: $('html').attr('dir') == 'rtl' ? true : false,
            animateOut: 'fadeOut',
            dotsClass: 'owl-dots ishi-style-dot5',
            navClass: ["owl-prev ishi-style-nav2", "owl-next ishi-style-nav2"],
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                }
            }
        });
    </script>
</div>
