<div class="col-lg-6 mb-5">
    <form action="" class="form-horizontal" method="post">
        @csrf
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">{{ __('Upload new image') }} {{ config('admin.slider.image_upload_width') }}px - {{ config('admin.slider.image_upload_height') }}px</h2>
            </header>
            <div class="card-body">
                <div class="form-group mg-files row" data-sort-destination data-sort-id="media-gallery">
                    <div class="col-lg-12">
                        <div class="isotope-item document">
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
                        </div>
                    </div>
                    @error('img')
                        <label class="error text-color-danger" for="">{{ $message }}</label>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <div class="checkbox-custom checkbox-default">
                                <input type="checkbox" wire:model="slide.published" id="createslide">
                                <label for="createslide">{{ __('Published') }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        Order
                                    </span>
                                </span>
                                <input type="text" wire:model="slide.order" class="form-control text-center @error('order') error @enderror">
                            </div>
                            @error('slide.order')
                                <label class="error text-color-danger" for="">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="toggle toggle-primary toggle-sm" data-plugin-toggle="">
                            <section class="toggle" wire:click="$set('expanded', {{ !$expanded }})">
                                <label>{{ __('Links') }}</label>
                                <div class="toggle-content"  @if($expanded) style="display: block" @endif wire:click.stop="">
                                    @foreach($langs as $index => $lang)
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Link') }}</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <img class="icon-16" src="{{ asset($lang->icon) }}" alt="">
                                                                </span>
                                                            </span>
                                                    <input type="text" wire:model="slide.links.{{ $lang->id }}.link" class="form-control @error('slide.links.' . $lang->id . '.link') error @enderror"/>
                                                </div>
                                                @error('slide.links.' . $lang->id . '.link')
                                                    <label class="error text-color-danger" for="">{{ $message }}</label>
                                                @enderror
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="card-footer">
                <div class="row justify-content-center">
                    <div class="col-sm-12 text-center">
                        <button class="btn btn-primary" wire:click.prevent="save">{{ __('Add') }}</button>
                    </div>
                </div>
            </footer>
        </section>
    </form>
</div>



