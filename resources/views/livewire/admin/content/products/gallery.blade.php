<div class="media-gallery">
    <div class="mg-main">

        <div class="inner-toolbar clearfix" style="position: initial !important;">
            <ul>
                <li>
                    <a href="#" wire:click.prevent="removeSelected"><i class="far fa-trash-alt mr-1"></i> Delete</a>
                </li>
            </ul>

        </div>
        <div class="col-sm-12 p-0 pt-3 pb-3">
            @if(session()->has('nothing_selected'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>{{ session('nothing_selected') }}</strong>
                </div>
            @endif
        </div>
        <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">

            @foreach($product_images as $image)
            <div class="isotope-item col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail @if(in_array($image->id, $removeSelectedImages)) thumbnail-selected @endif">
                    <div class="thumb-preview">
                        <a class="thumb-image" href="{{ asset('storage/'.$image->img) }}">
                            <img src="{{ asset('storage/'.$image->img) }}" class="img-fluid" alt="">
                        </a>
                        <div class="mg-thumb-options">
                            <div class="mg-zoom"><i class="bx bx-search"></i></div>
                            <div class="mg-toolbar">
                                <div class="mg-option checkbox-custom checkbox-inline">
                                    <input type="checkbox" id="file_{{ $image->id }}" wire:model="removeSelectedImages" value="{{ $image->id }}">
                                    <label for="file_{{ $image->id }}">SELECT</label>
                                </div>
                                <div class="mg-group float-right">
                                    <a href="#" wire:click.prevent="remove({{ $image->id }})"><i class="far fa-trash-alt"></i> Delete</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <div class="col">
        <section class="card card-modern card-big-info" wire:ignore>
            <div class="card-body mt-4 mb-4">
                <div class="row">
                    <div class="col-lg-2-5 col-xl-1-5">
                        <i class="card-big-info-icon bx bx-camera"></i>
                        <h2 class="card-big-info-title">Product Images</h2>
                        <p class="card-big-info-desc">You can add multiple images</p>
                    </div>
                    <div class="col-lg-3-5 col-xl-4-5">
                        <div class="form-group row align-items-center">
                            <div class="col">
                                <div id="dropzone-form-image" data-product="{{ $product->id }}" class="dropzone-modern dz-square">
                                    <span class="dropzone-upload-message text-center">
                                        <i class="bx bxs-cloud-upload"></i>
                                        <b class="text-color-primary">Drag/Upload</b> your images here.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@section('page_scripts')
    <script>
        /*
	Thumbnail: Select
	*/
        $('.mg-option input[type=checkbox]').on('change', function( ev ) {
            var wrapper = $(this).parents('.thumbnail');
            if($(this).is(':checked')) {
                wrapper.addClass('thumbnail-selected');
            } else {
                wrapper.removeClass('thumbnail-selected');
            }
        });

        $('.mg-option input[type=checkbox]:checked').trigger('change');
        /*
	Image Preview: Lightbox
	*/
        $('.thumb-preview > a[href]').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-img-mobile',
            image: {
                verticalFit: true
            }
        });

        $('.thumb-preview .mg-zoom').on('click.lightbox', function( ev ) {
            ev.preventDefault();
            $(this).closest('.thumb-preview').find('a.thumb-image').triggerHandler('click');
        });

        /*
	Thumnail: Dropdown Options
	*/
        $('.thumbnail .mg-toggle').parent()
            .on('show.bs.dropdown', function( ev ) {
                $(this).closest('.mg-thumb-options').css('overflow', 'visible');
            })
            .on('hidden.bs.dropdown', function( ev ) {
                $(this).closest('.mg-thumb-options').css('overflow', '');
            });

        $('.thumbnail').on('mouseenter', function() {
            var toggle = $(this).find('.mg-toggle');
            if ( toggle.parent().hasClass('open') ) {
                toggle.dropdown('toggle');
            }
        });
    </script>
@endsection
