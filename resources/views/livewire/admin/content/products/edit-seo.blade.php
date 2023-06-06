<div class="col-lg-12">
    <section class="card">
        <div class="card-body">
            <form class="form-horizontal form-bordered form-bordered" action="#">
                @foreach($product->items as $index => $item)
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Keywords') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img class="icon-16" src="{{ asset($item->language->icon) }}" alt="">
                                    </span>
                                </span>
                                <textarea wire:model.lazy="product.items.{{ $index }}.keywords" class="form-control" rows="2" data-plugin-maxlength maxlength="255">{{ $item->keywords }}</textarea>
                            </div>
                            <p>
                                <code>max-length</code> set to 255.
                            </p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Description') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <img class="icon-16" src="{{ asset($item->language->icon) }}" alt="">
                                        </span>
                                    </span>
                                <textarea wire:model.lazy="product.items.{{ $index }}.description" class="form-control" rows="2" data-plugin-maxlength maxlength="255">{{ $item->description }}</textarea>
                            </div>
                            <p>
                                <code>max-length</code> set to 255.
                            </p>
                        </div>
                    </div>
                @endforeach
                <div class="col-sm-12 text-center">
                    <button class="btn btn-primary" wire:click.prevent="save"><i class='fa fa-spinner fa-spin mr-2' wire:loading wire:target="save"></i>{{ __('Save') }}</button>
                </div>
            </form>
        </div>

    </section>
</div>
