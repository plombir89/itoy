@extends('front.layouts.main')

@section('title', $news->title)

@section('description', $news->description)

@section('keywords', $news->keywords)

@section('content')
    <div class="container">
        <div class="wrapper_container row">
            <aside id="column-left" class="col-sm-3 hidden-xs">
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

                @include('front.blocks.banner')

                @include('front.blocks.new-products')
            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12 single-blog">
                <div class="breadcrumb-container">
                    <h2 class="page-title">{{ $news->title }}</h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{ route('blog.index', app()->getLocale()) }}">{{ __('Blog') }}</a></li>
                        <li><a href="#">{{ $news->title }}</a></li>
                    </ul>
                </div>
                <div class="page-item-title">
                    <h1>{{ $news->title }}</h1>
                </div>

                <div class="blog-img">
                    <img src="{{ asset('storage/'.$news->news->img) }}" alt="{{ $news->title }}" title="{{ $news->title }}" class="img-responsive">
                </div>
                <div class="blog-date">{{ $news->news->start_date }}</div>
                <div class="blog-desc"> {!! $news->text !!} </div>



            </div>
        </div>
    </div>
@endsection
