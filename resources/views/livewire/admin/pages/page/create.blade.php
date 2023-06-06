<div class="row media-gallery">
    <div class="col-lg-12 mg-main">
        <form id="form" action="" class="form-horizontal">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title">{{ __('Page add') }}</h2>
                </header>
                <div class="card-body">
                    @foreach($page_data as $index => $item)
                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right">{{ __('Title') }}</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <img class="icon-16" src="{{ asset($item['icon']) }}" alt="">
                                        </span>
                                    </span>
                                    <input type="text" wire:model="page_data.{{ $index }}.title" class="form-control @error('page_data.'. $index .'.title') error @enderror"/>
                                </div>
                                @error('page_data.'. $index .'.title')
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
                    <div class="form-group row pb-3 offset-lg-2 offset-md-2" wire:ignore>

                        <div class="tabs p-0 col-md-12">
                            <ul class="nav nav-tabs">
                                @foreach($page_data as $index => $item)
                                    <li class="nav-item @if($loop->iteration == 1) active @endif">
                                        <a class="nav-link" href="#desc_{{ $index }}" data-toggle="tab"><img class="icon-16" src="{{ asset($item['icon']) }}" alt=""></a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach($page_data as $index => $item)
                                    <div id="desc_{{ $index }}" class="tab-pane @if($loop->iteration == 1) active @endif">
                                        <div wire:ignore>
                                            <textarea class="summernote{{ $index }}" wire:model="page_data.{{ $index }}.text" data-plugin-summernote data-plugin-options='{ "height": 180,"lang":"ro","codemirror": { "theme": "ambiance" } }'></textarea>
                                        </div>
                                    </div>
                                @endforeach

                                @foreach($page_data as $index => $item)
                                    @error('page_data.'.$index.'.text')
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

@section('livewire_scripts')
    @parent
    <script>
        @foreach($page_data as $index => $item)
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
                        url: "/admin/uploadimage/pages",
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
                @this.set('page_data.{{ $index }}.text', contents);
                }
            }
        });
        @endforeach

    </script>
@endsection
