<div class="row media-gallery">
    <div class="col-lg-12 mg-main p-0">
        <form id="form" action="" class="form-horizontal">
            <input type="hidden" id='lon'  wire:model="location.lon" >
            <input type="hidden" id='lat'  wire:model="location.lat" >
            <input type="hidden" id='zoom' wire:model="location.zoom">
            <section class="card">
                <div class="card-body">

                    @foreach($location->items as $index => $item)
                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Country') }} <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img class="icon-16" src="{{ asset($item->language->icon) }}" alt="">
                                    </span>
                                </span>
                                    <input type="text" wire:model.lazy="location.items.{{ $index }}.country" class="form-control @error('location.items.'. $index .'.country') error @enderror"/>
                                </div>
                                @error('location.items.'. $index .'.country')
                                <label class="error text-color-danger" for="">{{ $message }}</label>
                                @enderror
                            </div>

                        </div>
                    @endforeach

                        <div class="form-group row">
                            <label class="col-sm-2 control-label"></label>

                            <div class="col-sm-10">
                                <div class="checkbox-custom checkbox-default">
                                    <input type="checkbox" wire:model="location.default" id="defaultp">
                                    <label for="defaultp">{{ __('Default') }}</label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label"></label>

                            <div class="col-sm-10">
                                <div class="checkbox-custom checkbox-default">
                                    <input type="checkbox" wire:model="location.published" id="locationp">
                                    <label for="locationp">{{ __('Published') }}</label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Order') }} <span class="required">*</span></label>
                            <div class="col-sm-4">
                                <input type="text" wire:model="location.order" class="form-control @error('location.order') error @enderror"/>
                                @error('location.order')
                                <label class="error text-color-danger" for="">{{ $message }}</label>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row pb-3">
                            <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Address') }}</label>
                            <div class="tabs col-md-10">
                                <ul class="nav nav-tabs">
                                    @foreach($location->items as $index => $item)
                                        <li class="nav-item @if($tab_address_active == $index) active @endif">
                                            <a class="nav-link" wire:click.prevent="$set('tab_address_active', {{ $index }})" href="#address_{{ $index }}" data-toggle="tab"><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""></a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content">
                                    @foreach($location->items as $index => $item)
                                        <div id="address_{{ $index }}" class="tab-pane @if($tab_address_active == $index) active @endif">
                                            <textarea class="form-control" wire:model.lazy="location.items.{{ $index }}.address"></textarea>
                                        </div>
                                    @endforeach

                                    @foreach($location->items as $index => $item)

                                        @error('location.items.'.$index.'.address')
                                        <label class="error text-color-danger" for="">
                                            <img class="icon-16" src="{{ asset($item['icon']) }}" alt=""> {{ $message }}
                                        </label>
                                        <br>
                                        @enderror
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="form-group row pb-3">
                            <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Contacts') }}</label>
                            <div class="tabs col-md-10">
                                <ul class="nav nav-tabs">
                                    @foreach($location->items as $index => $item)
                                        <li class="nav-item @if($tab_contacts_active == $index) active @endif">
                                            <a class="nav-link" wire:click.prevent="$set('tab_contacts_active', {{ $index }})" href="#desc_{{ $index }}" data-toggle="tab"><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""></a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content">
                                    @foreach($location->items as $index => $item)
                                        <div id="desc_{{ $index }}" class="tab-pane @if($tab_contacts_active == $index) active @endif">
                                            <textarea class="form-control" wire:model.lazy="location.items.{{ $index }}.contacts"></textarea>
                                        </div>
                                    @endforeach

                                    @foreach($location->items as $index => $item)

                                        @error('location.items.'.$index.'.contacts')
                                        <label class="error text-color-danger" for="">
                                            <img class="icon-16" src="{{ asset($item['icon']) }}" alt=""> {{ $message }}
                                        </label>
                                        <br>
                                        @enderror
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="form-group row pb-3">
                            <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Working hours') }}</label>
                            <div class="tabs col-md-10">
                                <ul class="nav nav-tabs">
                                    @foreach($location->items as $index => $item)
                                        <li class="nav-item @if($tab_hours_active == $index) active @endif">
                                            <a class="nav-link" wire:click.prevent="$set('tab_hours_active', {{ $index }})" href="#hours_{{ $index }}" data-toggle="tab"><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""></a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content">
                                    @foreach($location->items as $index => $item)
                                        <div id="hours_{{ $index }}" class="tab-pane @if($tab_hours_active == $index) active @endif">
                                            <textarea class="form-control" wire:model.lazy="location.items.{{ $index }}.hours"></textarea>
                                        </div>
                                    @endforeach

                                    @foreach($location->items as $index => $item)

                                        @error('location.items.'.$index.'.hours')
                                        <label class="error text-color-danger" for="">
                                            <img class="icon-16" src="{{ asset($item['icon']) }}" alt=""> {{ $message }}
                                        </label>
                                        <br>
                                        @enderror
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    <div class="form-group row pb-3 offset-2" wire:ignore>


                    <script type="text/javascript" src="https://maps.google.com/maps/api/js?language={{ app()->getLocale() }}&key=AIzaSyBE9ggkEsrX9Xi7l3IqiCY9up9ke0UA0rE"></script>

                    <script type="text/javascript">

                        function initialize() {
                            var myLatlng = new google.maps.LatLng({{ $location->lon }}, {{ $location->lat }});
                            var mapOptions = {
                                center: myLatlng,
                                zoom: {{ $location->zoom }},
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            var map = new google.maps.Map(document.getElementById("map_canvas"),
                                mapOptions);
                            var marker = new google.maps.Marker({
                                position: myLatlng,
                                map: map,
                                draggable:true,
                                icon: '{{ asset('img/factory.png') }}'
                            });


                            google.maps.event.addListener(marker, 'dragend', function(evt){
                                @this.set('location.lon', evt.latLng.lat().toFixed(14));
                                @this.set('location.lat', evt.latLng.lng().toFixed(14));
                            });
                            google.maps.event.addListener(map, 'zoom_changed', function() {
                                @this.set('location.zoom', map.getZoom());
                            });

                        }
                        google.maps.event.addDomListener(window, 'load', initialize);
                    </script>

                    <style type="text/css">
                        #map_canvas { width: 100%;height:400px;border:2px solid #fff; }
                    </style>

                    <div id="map_canvas"></div>

                    </div>

                        <div class="form-group mg-files row" data-sort-destination data-sort-id="media-gallery">
                            <label class="col-lg-2 control-label text-lg-right pt-2">{{ __('Image') }} ({{ config('admin.contacts_locations.image_upload_width') }}px - {{ config('admin.contacts_locations.image_upload_height') }}px)</label>
                            <div class="col-lg-4">
                                <div class="isotope-item document col-sm-12 col-md-12 col-lg-12">
                                    <div class="thumbnail">
                                        <div class="thumb-preview">
                                            @if ($img)
                                                <a class="thumb-image" href="{{ $img->temporaryUrl() }}">
                                                    <img src="{{ $img->temporaryUrl() }}" class="img-fluid" alt="">
                                                </a>
                                            @else
                                                <a class="thumb-image" href="{{ asset('storage/'.$location->img) }}">
                                                    <img src="{{ asset('storage/'.$location->img) }}" class="img-fluid" alt="">
                                                </a>
                                            @endif
                                            <div class="mg-thumb-options">
                                                <div class="mg-zoom"><i class="bx bx-search"></i></div>
                                                <div class="mg-toolbar">
                                                    <div class="mg-group float-right">
                                                        <a href="#" wire:click.prevent="" onclick="$(this).next().click()">{{ __('Image upload') }}</a>
                                                        <input type="file" wire:model="img" class="hidden" accept=".png, .jpg, .jpeg"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    @error('img')
                                    <label class="error text-color-danger" for="">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                        </div>
                </div>
                <footer class="card-footer">
                    <div class="row justify-content-end">
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-primary" wire:click.prevent="save"><i class='fa fa-spinner fa-spin mr-2' wire:loading wire:target="save"></i>{{ __('Save') }}</button>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>

</div>
@section('location_scripts')
    @parent
    <script>
        @if (session()->has('updated'))
        new PNotify({
            title: '{{ __('Contacts') }}',
            text: '{{ session('updated') }}',
            type: 'success',
            hide: true,
            buttons: {
                sticker: false
            }
        });
        @endif
    </script>
@endsection

@section('livewire_scripts')
    @parent

    <script>

        Livewire.on('updated', event => {
            new PNotify({
                title: event.title,
                text: event.text,
                type: 'success',
                hide: true,
                buttons: {
                    sticker: false
                }
            });
        })


    </script>


@endsection
