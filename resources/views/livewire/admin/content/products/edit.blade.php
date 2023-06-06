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
                                        @foreach($product->items as $index => $item)
                                            <p class="text-dark">
                                                <code>{{ __('Link for lang') }} {{ $item->language->prefix }}</code>
                                                <br>
                                                /{{ $item->language->prefix }}/products/{{ $item->slug }}
                                            </p>
                                        @endforeach
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    @foreach($product->items as $index => $item)
                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Title') }} <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img class="icon-16" src="{{ asset($item->language->icon) }}" alt="">
                                    </span>
                                </span>
                                    <input type="text" wire:model.debounce.lazy="product.items.{{ $index }}.title" class="form-control @error('product.items.'. $index .'.title') error @enderror"/>
                                </div>
                                @error('product.items.'. $index .'.title')
                                <label class="error text-color-danger" for="">{{ $message }}</label>
                                @enderror
                            </div>

                        </div>
                    @endforeach

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-sm-right">{{ __('Model') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" wire:model.debounce.lazy="product.model" class="form-control @error('product.model') error @enderror"/>
                            </div>
                            @error('product.model')
                            <label class="error text-color-danger" for="">{{ $message }}</label>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 control-label"></label>

                        <div class="col-sm-10">
                            <div class="checkbox-custom checkbox-default">
                                <input type="checkbox" wire:model="product.published" id="productp">
                                <label for="productp">{{ __('Published') }}</label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-lg-right pt-2">{{ __('Category') }}</label>
                        <div class="col-sm-2">
                            <select class="form-control mb-3 @error('product.category_id') error @enderror" wire:model="product.category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->category_id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                            @error('product.category_id')
                            <label class="error text-color-danger" for="">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-lg-right pt-2">{{ __('Sub category') }}</label>
                        <div class="col-sm-2">
                            <select class="form-control mb-3 @error('product.sub_category') error @enderror" wire:model="product.sub_category">
                                <option value="">----------</option>
                                @foreach($sub_categories as $category)
                                    <option value="{{ $category->subcategory_id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                            @error('product.sub_category')
                            <label class="error text-color-danger" for="">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-lg-right pt-2">{{ __('Watts') }}</label>
                        <div class="col-sm-2">
                            <select class="form-control mb-3 @error('product.watt') error @enderror" wire:model="product.watt">
                                    <option value="">----------</option>
                                    <option value="5kw">5kw</option>
                                    <option value="7kw">7kw</option>
                                    <option value="10kw">10kw</option>
                                    <option value="15kw">15kw</option>
                            </select>
                            @error('product.watt')
                            <label class="error text-color-danger" for="">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pb-3 offset-2">

                        <div class="tabs p-0 col-md-12">
                            <ul class="nav nav-tabs">
                                @foreach($product->items as $index => $item)
                                    <li class="nav-item @if($tab_active == $index) active @endif">
                                        <a class="nav-link" wire:click.prevent="$set('tab_active', {{ $index }})" href="#desc_{{ $index }}" data-toggle="tab"><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""></a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach($product->items as $index => $item)
                                    <div id="desc_{{ $index }}" class="tab-pane @if($tab_active == $index) active @endif">
                                        <div wire:ignore>
                                            <textarea class="summernote{{ $index }}" wire:model="product.items.{{ $index }}.text" >{!! $item->text !!}</textarea>
                                        </div>
                                    </div>

                                @endforeach

                                @foreach($product->items as $index => $item)
                                    @error('product.items.'.$index.'.text')
                                    <label class="error text-color-danger" for=""><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""> {{ $message }}</label>
                                    <br>
                                    @enderror
                                @endforeach

                            </div>
                        </div>

                    </div>

                    <div class="form-group row pb-3 offset-2">

                        <div class="tabs p-0 col-md-12">
                            <ul class="nav nav-tabs">
                                @foreach($product->items as $index => $item)
                                    <li class="nav-item @if($tab_active_second == $index) active @endif">
                                        <a class="nav-link" wire:click.prevent="$set('tab_active_second', {{ $index }})" href="#desc_info{{ $index }}" data-toggle="tab"><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""></a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach($product->items as $index => $item)
                                    <div id="desc_info{{ $index }}" class="tab-pane @if($tab_active_second == $index) active @endif">
                                        <div wire:ignore>
                                            <textarea class="summernote_info{{ $index }}" wire:model="product.items.{{ $index }}.content" >{!! $item->content !!}</textarea>
                                        </div>
                                    </div>

                                @endforeach

                                @foreach($product->items as $index => $item)
                                    @error('product.items.'.$index.'.content')
                                    <label class="error text-color-danger" for=""><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""> {{ $message }}</label>
                                    <br>
                                    @enderror
                                @endforeach

                            </div>
                        </div>

                    </div>

                    <div class="form-group mg-files row" data-sort-destination data-sort-id="media-gallery">
                        <label class="col-lg-2 control-label text-lg-right pt-2">{{ __('Image') }} ({{ config('admin.products.image_upload_width') }}px - {{ config('admin.products.image_upload_height') }}px)</label>
                        <div class="col-lg-4">
                            <div class="isotope-item document col-sm-12 col-md-12 col-lg-12">
                                <div class="thumbnail">
                                    <div class="thumb-preview">
                                        @if ($img)
                                            <a class="thumb-image" href="{{ $img->temporaryUrl() }}">
                                                <img src="{{ $img->temporaryUrl() }}" class="img-fluid" alt="">
                                            </a>
                                        @else
                                            <a class="thumb-image" href="{{ asset('storage/'.$product->img) }}">
                                                <img src="{{ asset('storage/'.$product->img) }}" class="img-fluid" alt="">
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
            title: '{{ __('Product') }}',
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
        @foreach($product->items as $index => $item)
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
                        url: "/admin/uploadimage/product",
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
                @this.set('product.items.{{ $index }}.text', contents);
                }
            }
        });

        $('.summernote_info{{ $index }}').summernote({
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
                        url: "/admin/uploadimage/product",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(url) {
                            console.log(url);
                            var image = $('<img>').attr('src',url);
                            $('.summernote_info{{ $index }}').summernote("insertNode", image[0]);
                        }
                    });
                },
                onChange: function(contents, $editable) {
                @this.set('product.items.{{ $index }}.content', contents);
                }
            }
        });
        @endforeach


    </script>


@endsection
