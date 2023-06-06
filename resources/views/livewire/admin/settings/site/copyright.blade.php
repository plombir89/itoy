<div class="row">
    <div class="col-lg-12">
        <form id="form" action="" class="form-horizontal">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title">{{ __('Copyright') }}</h2>
                </header>
                <div class="card-body">

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <textarea type="text" rows="2" data-plugin-maxlength maxlength="255" class="form-control @error('text.text') error @enderror" wire:model="text.text"></textarea>
                            </div>

                            @error('text.text')

                                <label class="error"> {{ $message }} </label>

                            @enderror
                        </div>
                    </div>
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
        Livewire.on('copyrightSaved', event => {
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
