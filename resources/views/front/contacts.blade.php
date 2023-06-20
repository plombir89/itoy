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
                                            {{ $contacts->item->address }}
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
                @if($contacts->map_show)
                    <div id="map"></div>
                @endif
                <livewire:contacts-form />
            </div>
        </div>
    </div>
    @if($contacts->map_show)
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?language={{ app()->getLocale() }}&key=AIzaSyBE9ggkEsrX9Xi7l3IqiCY9up9ke0UA0rE"></script>

        <script type="text/javascript">

            function initialize() {
                var myLatlng = new google.maps.LatLng({{ $contacts->map_lon }}, {{ $contacts->map_lat }});
                var mapOptions = {
                    center: myLatlng,
                    zoom: {{ $contacts->map_zoom }},
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("map"),
                    mapOptions);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    draggable:false,
                    icon: '{{ asset('img/factory.png') }}'
                });

            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <style type="text/css">
            #map{ width: 100%;height:350px;border:2px solid #fff; margin-bottom: 50px;margin-top: 50px }
        </style>
    @endif
@endsection
