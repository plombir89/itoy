@extends('front.layouts.main')

@section('title', $about->title)

@section('description', $about->description)

@section('keywords', $about->keywords)

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
                    <h1 class="page-title">{{ $about->item->title }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li><a href="#">{{ $about->item->title }}</a></li>
                    </ul>
                </div>
                {!! $about->item->text !!}
            </div>
        </div>
    </div>
@endsection
