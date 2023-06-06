@extends('front.layouts.main')

@section('content')
    <div class="container">
        <div class="wrapper_container row">		<aside id="column-left" class="col-sm-3 ">
                <div class="box">
                    <h2 class="page-title hidden-sm hidden-xs">
                        {{ __('Categories') }}
                    </h2>
                    <div class="block-title clearfix  hidden-lg hidden-md collapsed" data-target="#box-container" data-toggle="collapse">
                        <span class="page-title">{{ __('Categories') }}</span>
                        <span class="navbar-toggler collapse-icons">
                      <i class="fa fa-angle-down add"></i>
                      <i class="fa fa-angle-up remove"></i>
                    </span>
                    </div>
                    <div id="box-container" class="collapse data-toggler">
                        <ul class="category-top-menu blog-categories">
                            @foreach($newscategories as $category)
                                <li><a class="list-group-item @if(request()->has('category') && request()->input('category') == $category->id) active @endif"  href="{{ route('blog.index', [$lang,'category' => $category->id]) }}">{{ $category->item->title }}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <section id="ishibannerblock-258977651" class="ishibannerblock one_bannerblock">
                    <div class="bannerblock col-md-12 col-sm-12 col-xs-12">
                        <div class="image-container">
                            <a href="#" class="ishi-customhover-fadeinflip ">
                                <img src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/Left-banner-345x417.jpg" alt="" class="img-responsive">

                            </a>
                        </div>
                    </div>
                </section>

                @include('front.blocks.new-products')

            </aside>




            <div id="content" class="col-md-9 col-sm-12 col-xs-12 all-blog">
                <div class="breadcrumb-container">
                    <h2 class="page-title">{{ __('Blog') }}</h2>
                    <ul class="breadcrumb">

                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>

                        <li><a href="{{ route('blog.index', app()->getLocale()) }}">{{ __('Blog') }}</a></li>

                    </ul>
                </div>
                <h1>{{ __('Blog') }}</h1>


                <div class="sdsarticleCat clearfix row">

                    @foreach($news as $item)
                    <div class="blog-content">

                        <div class="blog-left-content articleContent col-lg-6 col-md-12 col-sm-12">
                            <div class="blog-image">
                                <img src="{{ asset('storage/'.$item->img) }}" alt="{{ $item->item->title }}" title="{{ $item->item->title }}" class="img-responsive">
                            </div>
                        </div>

                        <div class="blog-right-content smartblog-desc col-lg-6 col-md-12 col-sm-12">
                            <div class="blog-date-comment">
                                <div class="blog-title"><a href="{{ route('blog.show', [$lang, $item->item->slug]) }}">{{ $item->item->title }}</a></div>
                                <div class="blog-date">{{ $item->start_date }}</div>

                            </div>
                            <div class="blog-desc">{{ Str::limit(strip_tags($item->item->text), 200) }}</div>
                            <div class="read-more"><a href="{{ route('blog.show', [$lang, $item->item->slug]) }}" class="btn btn-default">{{ __('Read more') }}</a></div>
                        </div>
                    </div>
                    @endforeach
                        {{ $news->withQueryString()->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
