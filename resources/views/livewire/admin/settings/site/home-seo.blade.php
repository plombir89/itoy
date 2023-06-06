<div class="row">
    <div class="col-lg-12">
        <form id="form" action="" class="form-horizontal">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title">{{ __('Home page seo') }}</h2>
                </header>
                <div class="card-body">
                    {{--    TODO: add vaidation errors    --}}
                    @foreach($data->info as $index => $seo)
                    <div class="row pb-4">
                        <label class="col-sm-2 control-label text-sm-right">{{ __('Title') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <img class="icon-16" src="{{ asset($seo->language->icon) }}" alt="">
                                        </span>
                                    </span>
                                <input type="text" wire:model.defer="data.info.{{ $index }}.title" class="form-control"/>
                            </div>
                        </div>

                    </div>
                    @endforeach

                        <hr>

                        @foreach($data->info as $index => $seo)
                    <div class="row">
                        <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Keywords') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <img class="icon-16" src="{{ asset($seo->language->icon) }}" alt="">
                                        </span>
                                    </span>
                                <textarea class="form-control" rows="2" data-plugin-maxlength maxlength="160" wire:model.defer="data.info.{{ $index }}.keywords"></textarea>
                            </div>
                            <p>
                                <code>max-length</code> set to 160.(comma separated)
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Description') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <img class="icon-16" src="{{ asset($seo->language->icon) }}" alt="">
                                        </span>
                                    </span>
                                <textarea class="form-control" rows="2" data-plugin-maxlength maxlength="160" wire:model.defer="data.info.{{ $index }}.description"></textarea>
                            </div>
                            <p>
                                <code>max-length</code> set to 160.
                            </p>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
                <footer class="card-footer">
                    <div class="row justify-content-end">
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-primary" wire:click.prevent="save">{{ __('Save') }}</button>
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
        Livewire.on('seoSaved', event => {
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
