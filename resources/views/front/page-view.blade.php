@extends('front.layouts.main')

@section('title', $page->title)

@section('description', $page->description)

@section('keywords', $page->keywords)

@section('content')
    <div id="information-information" class="container">
        <div class="wrapper_container row">
            <aside id="column-left" class="col-sm-3 hidden-xs">
                @include('front.blocks.categories')

                @include('front.blocks.banner')

                @include('front.blocks.new-products')
            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="breadcrumb-container">
                    <h1 class="page-title">{{ $page->title }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li><a href="#">{{ $page->title }}</a></li>
                    </ul>
                </div>
                {!! $page->text !!}
            </div>
        </div>
    </div>
@endsection
