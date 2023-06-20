@extends('front.layouts.main')

@section('content')
    <div id="information-contact" class="container">
        <div class="wrapper_container row">		<aside id="column-left" class="col-sm-3 hidden-xs">
                @include('front.blocks.categories')

                @include('front.blocks.banner')

                @include('front.blocks.new-products')
            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="breadcrumb-container">
                    <h1 class="page-title">{{ __('Contact Us') }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li><a href="#">{{ __('Contact Us') }}</a></li>
                    </ul>
                </div>
                <h3>Our Location</h3>
                <div class="panel panel-default contact-location">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-sm-4 store-address">
                                    <div class="location-title"><i class="fa fa-home"></i>Your Store</div>
                                        <address class="location-detail">
                                            1{{ $contacts->item->address }}
                                        </address>
                                    </div>
                                <div class="col-sm-4 store-contact">
                                    <div class="location-title"><i class="fa fa-phone"></i>{{ __('Phone') }}</div>
                                    <address class="location-detail">{{ $contacts->phone }}</address>
                                </div>
                                <div class="col-sm-4 store-contact">
                                    <div class="location-title"><i class="fa fa-envelope"></i>{{ __('Email') }}</div>
                                    <address class="location-detail">{{ $contacts->email }}</address>
                                </div>
                                <div class="col-sm-12 store-fax">
                                </div>
                                <div class="col-sm-12 store-status">
                                </div>
                                <div class="col-sm-12 store-comment">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="map">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <livewire:contacts-form />
            </div>
        </div>
    </div>
@endsection
