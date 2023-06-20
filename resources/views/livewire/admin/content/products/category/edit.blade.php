<div class="row media-gallery">
    <div class="col-lg-12 mg-main p-0">
        <form id="form" action="" class="form-horizontal">
            <section class="card">
                <div class="card-body">

                    @foreach($category->admin_items as $index => $item)
                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Title') }} <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img class="icon-16" src="{{ asset($item->language->icon) }}" alt="">
                                    </span>
                                </span>
                                    <input type="text" wire:model.lazy="category.admin_items.{{ $index }}.title" class="form-control @error('category.admin_items.'. $index .'.title') error @enderror"/>
                                </div>
                                @error('category.admin_items.'. $index .'.title')
                                <label class="error text-color-danger" for="">{{ $message }}</label>
                                @enderror
                            </div>

                        </div>
                    @endforeach
                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right">{{ __('Parent') }}</label>
                            <div class="col-sm-10">
                                <select wire:model="category.parent_id" class="form-control">
                                    <option value="">No parent</option>

                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->item->title }}</option>
                                    @endforeach

                                </select>
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
