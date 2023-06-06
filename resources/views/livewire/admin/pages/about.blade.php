<div class="row media-gallery">
    <div class="col-lg-12 mg-main p-0">
        <form id="form" action="" class="form-horizontal">
            <section class="card">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-sm-right pt-2"></label>
                        <div class="col-lg-10">
                            <div class="toggle toggle-primary toggle-sm" data-plugin-toggle>
                                <section class="toggle">
                                    <label>{{ __('Links') }}</label>
                                    <div class="toggle-content">
                                        @foreach($about->items as $index => $item)
                                            <p class="text-dark">
                                                <code>{{ __('Link for lang') }} {{ $item->language->prefix }}</code>
                                                <br>
                                                /{{ $item->language->prefix }}/about
                                            </p>
                                        @endforeach
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    @foreach($about->items as $index => $item)
                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Title') }} <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img class="icon-16" src="{{ asset($item->language->icon) }}" alt="">
                                    </span>
                                </span>
                                    <input type="text" wire:model.lazy="about.items.{{ $index }}.title" class="form-control @error('about.items.'. $index .'.title') error @enderror"/>
                                </div>
                                @error('about.items.'. $index .'.title')
                                <label class="error text-color-danger" for="">{{ $message }}</label>
                                @enderror
                            </div>

                        </div>
                    @endforeach

                    <div class="form-group row pb-3">
                        <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Home page text') }} <span class="required">*</span></label>
                        <div class="tabs col-md-10">
                            <ul class="nav nav-tabs">
                                @foreach($about->items as $index => $item)
                                    <li class="nav-item @if($tab_active == $index) active @endif">
                                        <a class="nav-link" wire:click.prevent="$set('tab_active', {{ $index }})" href="#desc_{{ $index }}" data-toggle="tab"><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""></a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach($about->items as $index => $item)
                                    <div id="desc_{{ $index }}" class="tab-pane @if($tab_active == $index) active @endif">
                                        <div wire:ignore>
                                            <textarea class="summernote{{ $index }}" wire:model="about.items.{{ $index }}.text" >{!! $item->text !!}</textarea>
                                        </div>
                                    </div>

                                @endforeach

                                @foreach($about->items as $index => $item)
                                    @error('about.items.'.$index.'.text')
                                    <label class="error text-color-danger" for=""><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""> {{ $message }}</label>
                                    <br>
                                    @enderror
                                @endforeach

                            </div>
                        </div>

                    </div>

                    <div class="form-group row pb-3">
                        <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Content') }} <span class="required">*</span></label>
                        <div class="tabs col-md-10">
                            <ul class="nav nav-tabs">
                                @foreach($about->items as $index => $item)
                                    <li class="nav-item @if($tab_content_active == $index) active @endif">
                                        <a class="nav-link" wire:click.prevent="$set('tab_content_active', {{ $index }})" href="#desc_content_{{ $index }}" data-toggle="tab"><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""></a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach($about->items as $index => $item)
                                    <div id="desc_content_{{ $index }}" class="tab-pane @if($tab_content_active == $index) active @endif">
                                        <div wire:ignore>
                                            <textarea class="content_summernote{{ $index }}" >{!! $item->content !!}</textarea>
                                        </div>
                                    </div>

                                @endforeach

                                @foreach($about->items as $index => $item)
                                    @error('about.items.'.$index.'.content')
                                    <label class="error text-color-danger" for=""><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""> {{ $message }}</label>
                                    <br>
                                    @enderror
                                @endforeach

                            </div>
                        </div>

                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 control-label"></label>

                        <div class="col-sm-10">
                            <div class="checkbox-custom checkbox-default">
                                <input type="checkbox" wire:model="about.why" id="aboutp">
                                <label for="aboutp">{{ __('Show why on homepage') }}</label>
                            </div>

                        </div>
                    </div>

                    @foreach($about->items as $index => $item)
                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Title why') }} <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img class="icon-16" src="{{ asset($item->language->icon) }}" alt="">
                                    </span>
                                </span>
                                    <input type="text" wire:model.lazy="about.items.{{ $index }}.why_title" class="form-control @error('about.items.'. $index .'.why_title') error @enderror"/>
                                </div>
                                @error('about.items.'. $index .'.why_title')
                                <label class="error text-color-danger" for="">{{ $message }}</label>
                                @enderror
                            </div>

                        </div>
                    @endforeach

                    <div class="form-group row pb-3">
                        <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Home page why') }} <span class="required">*</span></label>
                        <div class="tabs col-md-10">
                            <ul class="nav nav-tabs">
                                @foreach($about->items as $index => $item)
                                    <li class="nav-item @if($tab_why_active == $index) active @endif">
                                        <a class="nav-link" wire:click.prevent="$set('tab_why_active', {{ $index }})" href="#desc_why_{{ $index }}" data-toggle="tab"><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""></a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach($about->items as $index => $item)
                                    <div id="desc_why_{{ $index }}" class="tab-pane @if($tab_why_active == $index) active @endif">
                                        <div wire:ignore>
                                            <textarea class="why_summernote{{ $index }}" >{!! $item->why_content !!}</textarea>
                                        </div>
                                    </div>

                                @endforeach

                                @foreach($about->items as $index => $item)
                                    @error('about.items.'.$index.'.why_content')
                                    <label class="error text-color-danger" for=""><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""> {{ $message }}</label>
                                    <br>
                                    @enderror
                                @endforeach

                            </div>
                        </div>

                    </div>

                    <div class="form-group mg-files row" data-sort-destination data-sort-id="media-gallery">
                        <label class="col-lg-2 control-label text-lg-right pt-2">{{ __('Image') }} (600px - 600px)</label>
                        <div class="col-lg-4">
                            <div class="isotope-item document col-sm-12 col-md-12 col-lg-12">
                                <div class="thumbnail">
                                    <div class="thumb-preview">
                                        @if ($img)
                                            <a class="thumb-image" href="{{ $img->temporaryUrl() }}">
                                                <img src="{{ $img->temporaryUrl() }}" class="img-fluid" alt="">
                                            </a>
                                        @else
                                            <a class="thumb-image" href="{{ asset('storage/'.$about->img) }}">
                                                <img src="{{ asset('storage/'.$about->img) }}" class="img-fluid" alt="">
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
@section('page_scripts')
    @parent
    <script>
        @if (session()->has('updated'))
        new PNotify({
            title: '{{ __('About') }}',
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
        @foreach($about->items as $index => $item)
        $('.summernote{{ $index }}').summernote({
            minHeight: 200,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    data = new FormData();
                    data.append("file", files[0]);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: data,
                        type: "POST",
                        url: "/admin/uploadimage",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(url) {
                            console.log(url);
                            var image = $('<img>').attr('src',url);
                            $('.summernote{{ $index }}').summernote("insertNode", image[0]);
                        }
                    });
                },
                onChange: function(contents, $editable) {
                @this.set('about.items.{{ $index }}.text', contents);
                }
            }
        });

        $('.content_summernote{{ $index }}').summernote({
            minHeight: 200,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    data = new FormData();
                    data.append("file", files[0]);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: data,
                        type: "POST",
                        url: "/admin/uploadimage",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(url) {
                            console.log(url);
                            var image = $('<img>').attr('src',url);
                            $('.content_summernote{{ $index }}').summernote("insertNode", image[0]);
                        }
                    });
                },
                onChange: function(contents, $editable) {
                @this.set('about.items.{{ $index }}.content', contents);
                }
            }
        });

        $('.why_summernote{{ $index }}').summernote({
            minHeight: 200,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    data = new FormData();
                    data.append("file", files[0]);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: data,
                        type: "POST",
                        url: "/admin/uploadimage",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(url) {
                            console.log(url);
                            var image = $('<img>').attr('src',url);
                            $('.why_summernote{{ $index }}').summernote("insertNode", image[0]);
                        }
                    });
                },
                onChange: function(contents, $editable) {
                @this.set('about.items.{{ $index }}.why_content', contents);
                }
            }
        });
        @endforeach


    </script>


@endsection
