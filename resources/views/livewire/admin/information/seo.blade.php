<div class="row">
    <div class="col-lg-12">
        <form action="#" class="form-horizontal">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title">{{ __('Google Analytics,Facebook scripts, etc.') }}</h2>
                </header>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="control-label col-sm-12">{{ __('Head scripts') }}</label>
                        <div class="col-sm-12">
                            <textarea wire:model="scripts.head_scripts" class="form-control" id="" cols="30" rows="10">{!! $scripts->head_scripts !!}</textarea>
                            @error('scripts.head_scripts')
                                <label class="error text-color-danger" for="">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-12">{{ __('Footer scripts') }}</label>
                        <div class="col-sm-12">
                            <textarea wire:model="scripts.footer_scripts" class="form-control" id="" cols="30" rows="10">{!! $scripts->footer_scripts !!}</textarea>
                            @error('scripts.footer_scripts')
                            <label class="error text-color-danger" for="">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-primary" wire:click.prevent="save"><i class='fa fa-spinner fa-spin mr-2' wire:loading wire:target="save"></i>{{ __('Save') }}</button>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
    <!-- col-lg-6 -->
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
