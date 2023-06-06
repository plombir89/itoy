<div class="col-lg-6">
    <form id="chk-radios-form" action="">
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">{{ __('Logo') }}</h2>
            </header>
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-lg-3 control-label"></label>
                    <div class="col-lg-9">
                        @if ($logo)
                            <img src="{{ $logo->temporaryUrl() }}" class="img-fluid" alt="">
                        @else
                            <img class="mw-100" src="{{ asset('storage/logo/logo.png') }}" alt="">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2">{{ __('Image') }}</label>
                    <div class="col-lg-9">
                        <div class="fileupload fileupload-new">
                            <div class="input-append">
                                <span class="btn btn-default btn-file">
                                    <span class="fileupload-new">{{ __('Select file') }}</span>
                                    <input type="file" wire:model="logo" accept=".png">
                                </span>
                            </div>

                            <span class="help-block">{{ config('admin.logo.image_upload_width') }}px - {{ config('admin.logo.image_upload_height') }}px  *.{{ config('admin.logo.image_format') }}</span>
                        </div>
                    </div>
                </div>
                @error('logo')

                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <span class="error">{{ $message }}</span>
                    </div>

                @enderror
            </div>
            <footer class="card-footer">
                <div class="row justify-content-end">
                    <div class="col-sm-12 text-center">
                        <button @if($disabled) disabled @endif class="btn btn-primary" wire:click.prevent="save">{{ __('Save') }}</button>
                    </div>
                </div>
            </footer>
        </section>
    </form>
</div>

@section('livewire_scripts')
    @parent
    <script>
        Livewire.on('logoChanged', event => {
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
@endsection()
