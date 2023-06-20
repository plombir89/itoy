<div class="row media-gallery">
    <div class="col-lg-12 mg-main p-0">
        <form id="form" action="" class="form-horizontal">
            <input type="hidden" id='lon' wire:model="contacts.map_lon" >
            <input type="hidden" id='lat' wire:model="contacts.map_lat" >
            <input type="hidden" id='zoom' wire:model="contacts.map_zoom">
            <section class="card">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-sm-right pt-2"></label>
                        <div class="col-lg-10">
                            <div class="toggle toggle-primary toggle-sm" data-plugin-toggle>
                                <section class="toggle">
                                    <label>{{ __('Links') }}</label>
                                    <div class="toggle-content">
                                        @foreach($contacts->items as $index => $item)
                                            <p class="text-dark">
                                                <code>{{ __('Link for lang') }} {{ $item->language->prefix }}</code>
                                                <br>
                                                /{{ $item->language->prefix }}/contacts
                                            </p>
                                        @endforeach
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    @foreach($contacts->items as $index => $item)
                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Title') }} <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img class="icon-16" src="{{ asset($item->language->icon) }}" alt="">
                                    </span>
                                </span>
                                    <input type="text" wire:model="contacts.items.{{ $index }}.title" class="form-control @error('contacts.items.'. $index .'.title') error @enderror"/>
                                </div>
                                @error('contacts.items.'. $index .'.title')
                                <label class="error text-color-danger" for="">{{ $message }}</label>
                                @enderror
                            </div>

                        </div>
                    @endforeach

                    <div class="form-group row">
                        <label class="col-sm-2 text-sm-right control-label pt-2">{{ __('Phone') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                </span>
                                <input type="text" wire:model="contacts.phone" class="form-control @error('contacts.phone') error @enderror"/>
                            </div>
                            @error('contacts.phone')
                            <label class="error text-color-danger" for="">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 text-sm-right control-label pt-2">{{ __('Email') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </span>
                                <input type="text" wire:model="contacts.email" class="form-control @error('contacts.email') error @enderror"/>
                            </div>
                            @error('contacts.email')
                            <label class="error text-color-danger" for="">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pb-3 offset-2">

                        <div class="tabs p-0 col-md-12">
                            <ul class="nav nav-tabs">
                                @foreach($contacts->items as $index => $item)
                                    <li class="nav-item @if($tab_active == $index) active @endif">
                                        <a class="nav-link" wire:click.prevent="$set('tab_active', {{ $index }})" href="#desc_{{ $index }}" data-toggle="tab"><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""></a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach($contacts->items as $index => $item)


                                    <div id="desc_{{ $index }}" class="tab-pane @if($tab_active == $index) active @endif">
                                        <div class="form-group row">
                                            <label class="col-sm-12 control-label pt-2">{{ __('Address') }}</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <input type="text" wire:model="contacts.items.{{ $index }}.address" class="form-control @error('contacts.items.'. $index .'.address') error @enderror"/>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                                @foreach($contacts->items as $index => $item)

                                        @error('contacts.items.'. $index .'.address')
                                        <label class="error text-color-danger" for=""><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""> {{ $message }}</label>
                                        @enderror
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="form-group row pb-3 offset-2" wire:ignore>


                        <script type="text/javascript" src="https://maps.google.com/maps/api/js?language={{ app()->getLocale() }}&key=AIzaSyBE9ggkEsrX9Xi7l3IqiCY9up9ke0UA0rE"></script>

                        <script type="text/javascript">

                            function initialize() {
                                var myLatlng = new google.maps.LatLng({{ $contacts->map_lon }}, {{ $contacts->map_lat }});
                                var mapOptions = {
                                    center: myLatlng,
                                    zoom: {{ $contacts->map_zoom }},
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
                                @this.set('contacts.map_lon', evt.latLng.lat().toFixed(14));
                                @this.set('contacts.map_lat', evt.latLng.lng().toFixed(14));
                                });
                                google.maps.event.addListener(map, 'zoom_changed', function() {
                                @this.set('contacts.map_zoom', map.getZoom());
                                });

                            }
                            google.maps.event.addDomListener(window, 'load', initialize);
                        </script>

                        <style type="text/css">
                            #map_canvas { width: 100%;height:400px;border:2px solid #fff; }
                        </style>
                        <div class="col-sm-12">
                            <p class="pt-2">{{ __('Map') }}</p>
                            <div id="map_canvas"></div>
                        </div>

                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 control-label"></label>

                        <div class="col-sm-10">
                            <div class="checkbox-custom checkbox-default">
                                <input type="checkbox" wire:model="contacts.map_show" id="map_show">
                                <label for="map_show">{{ __('Show map') }}</label>
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
@section('contacts_scripts')
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
