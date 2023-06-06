<div class="row media-gallery">
    <div class="col-lg-12 mg-main">
        <form id="form" action="" class="form-horizontal">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title">{{ __('News add') }}</h2>
                </header>
                <div class="card-body">
                    @foreach($news_data as $index => $item)
                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right">{{ __('Title') }}</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <img class="icon-16" src="{{ asset($item['icon']) }}" alt="">
                                        </span>
                                    </span>
                                    <input type="text" wire:model.lazy="news_data.{{ $index }}.title" class="form-control @error('news_data.'. $index .'.title') error @enderror"/>
                                </div>
                                @error('news_data.'. $index .'.title')
                                    <label class="error text-color-danger" for="">{{ $message }}</label>
                                @enderror
                            </div>

                        </div>
                    @endforeach

                    <div class="form-group row">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <div class="checkbox-custom checkbox-default">
                                <input type="checkbox" wire:model="news.published" id="newsp">
                                <label for="newsp">{{ __('Published') }}</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 control-label text-lg-right pt-2">{{ __('Start date') }}</label>
                        <div class="col-lg-2">
                            <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-calendar-alt"></i>
                                        </span>
                                    </span>
                                <input type="text" wire:model="news.start_date" id="start_date" data-plugin-datepicker class="form-control">
                                <script>
                                    document.addEventListener('livewire:load', function () {

                                        $('#start_date').on('change', function (e) {

                                        @this.set('news.start_date', e.target.value);
                                        });
                                    });
                                </script>
                            </div>
                            @error('news.start_date')
                                <label class="error text-color-danger" for="">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pb-3 offset-2" wire:ignore>

                        <div class="tabs p-0 col-md-12">
                            <ul class="nav nav-tabs">
                                @foreach($news_data as $index => $item)
                                    <li class="nav-item @if($loop->iteration == 1) active @endif">
                                        <a class="nav-link" href="#desc_{{ $index }}" data-toggle="tab"><img class="icon-16" src="{{ asset($item['icon']) }}" alt=""></a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach($news_data as $index => $item)
                                    <div id="desc_{{ $index }}" class="tab-pane @if($loop->iteration == 1) active @endif">
                                        <div wire:ignore>
                                            <textarea class="summernote{{ $index }}" wire:model="news_data.{{ $index }}.text" data-plugin-summernote data-plugin-options='{ "height": 180,"lang":"ro","codemirror": { "theme": "ambiance" } }'></textarea>
                                        </div>
                                    </div>
                                @endforeach

                                @foreach($news_data as $index => $item)
                                    @error('news_data.'.$index.'.text')
                                        <label class="error text-color-danger" for=""><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""> {{ $message }}</label>
                                        <br>
                                    @enderror
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="form-group mg-files row" data-sort-destination data-sort-id="media-gallery">
                        <label class="col-lg-2 control-label text-lg-right pt-2">{{ __('Image') }} ({{ config('admin.news.image_upload_width') }}px - {{ config('admin.news.image_upload_height') }}px)</label>
                        <div class="col-lg-4">
                            <div class="isotope-item document col-sm-12 col-md-12 col-lg-12">
                                <div class="thumbnail">
                                    <div class="thumb-preview">
                                        @if ($img)
                                            <a class="thumb-image" href="{{ $img->temporaryUrl() }}">
                                                <img src="{{ $img->temporaryUrl() }}" class="img-fluid" alt="">
                                            </a>
                                        @else
                                            <a class="thumb-image" href="{{ asset('img/blog-image-1.jpg') }}">
                                                <img src="{{ asset('img/blog-image-1.jpg') }}" class="img-fluid" alt="">
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
                            <button class="btn btn-primary" wire:click.prevent="save">Submit</button>
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
        @foreach($news_data as $index => $item)
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
                @this.set('news_data.{{ $index }}.text', contents);
                }
            }
        });
        @endforeach

    </script>
@endsection
