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
                                        @foreach($page->items as $index => $item)
                                            <p class="text-dark">
                                                <code>{{ __('Link for lang') }} {{ $item->language->prefix }}</code>
                                                <br>
                                                /{{ $item->language->prefix }}/page/{{ $item->slug }}
                                            </p>
                                        @endforeach
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    @foreach($page->items as $index => $item)
                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Title') }} <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img class="icon-16" src="{{ asset($item->language->icon) }}" alt="">
                                    </span>
                                </span>
                                    <input type="text" wire:model="page.items.{{ $index }}.title" class="form-control @error('page.items.'. $index .'.title') error @enderror"/>
                                </div>
                                @error('page.items.'. $index .'.title')
                                <label class="error text-color-danger" for="">{{ $message }}</label>
                                @enderror
                            </div>

                        </div>
                    @endforeach

                    @if($use_footer_columns)
                        <div class="form-group row">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                                <div class="checkbox-custom checkbox-default">
                                    <input type="checkbox" wire:model="page.bottom" id="pagep">
                                    <label for="pagep">{{ __('Show on footer links') }}</label>
                                </div>
                            </div>
                        </div>
                        @if($page->bottom)
                            <div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Column') }}</label>
                                    <div class="col-sm-1">
                                        <select id="column" wire:model="page.column" class="form-control @error('page.column') error @enderror">
                                            @for($column = 1;$column <= $footer_columns_count;$column++)
                                                <option value="{{ $column }}">{{ $column }}</option>
                                            @endfor
                                        </select>

                                    </div>
                                    @error('page.column')
                                    <label class="error text-color-danger" for="column">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Order') }}</label>
                                    <div class="col-sm-1">
                                        <input type="text" wire:model="page.order" class="form-control @error('page.order') error @enderror"/>

                                    </div>
                                    @error('page.order')
                                    <label class="error text-color-danger" for="">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                        @endif
                    @endif
                    <hr>


                    <div class="form-group row pb-3 offset-2">

                        <div class="tabs p-0 col-md-12">
                            <ul class="nav nav-tabs">
                                @foreach($page->items as $index => $item)
                                    <li class="nav-item @if($tab_active == $index) active @endif">
                                        <a class="nav-link" wire:click.prevent="$set('tab_active', {{ $index }})" href="#desc_{{ $index }}" data-toggle="tab"><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""></a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach($page->items as $index => $item)
                                    <div id="desc_{{ $index }}" class="tab-pane @if($tab_active == $index) active @endif">
                                        <div wire:ignore>
                                            <textarea class="summernote{{ $index }}" wire:model="page.items.{{ $index }}.text" >{!! $item->text !!}</textarea>
                                        </div>
                                    </div>

                                @endforeach

                                @foreach($page->items as $index => $item)
                                    @error('page.items.'.$index.'.text')
                                    <label class="error text-color-danger" for=""><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""> {{ $message }}</label>
                                    <br>
                                    @enderror
                                @endforeach

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
                title: '{{ __('Page') }}',
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
        @foreach($page->items as $index => $item)
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
                        url: "/admin/uploadimage/page",
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
                @this.set('page.items.{{ $index }}.text', contents);
                }
            }
        });
        @endforeach


    </script>


@endsection
