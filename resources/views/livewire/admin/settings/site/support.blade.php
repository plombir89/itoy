<div class="col-lg-6">
    <form id="form" action="" class="form-horizontal">

        <section class="card">
            <header class="card-header">
                <h2 class="card-title">{{ __('Support') }}</h2>
            </header>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 control-label text-sm-right pt-2">{{ __('Site name') }}</label>
                    <div class="col-sm-9">
                        <input type="text" wire:model="site_name" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 control-label text-sm-right pt-2">{{ __('Site status') }}</label>
                    <div class="col-sm-9">
                        <div class="radio-custom radio-primary">
                            <input id="on" wire:model="status" value="1" type="radio" />
                            <label for="on">{{ __('Online') }}</label>
                        </div>
                        <div class="radio-custom ">
                            <input id="off" wire:model="status" value="0" type="radio"/>
                            <label for="off">{{ __('Offline') }}</label>
                        </div>
                        <label class="error" for="porto_is"></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2">{{ __('Start date') }}</label>
                    <div class="col-lg-3">
                        <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-calendar-alt"></i>
                                        </span>
                                    </span>
                            <input type="text" wire:model="start_date" id="start_date" data-plugin-datepicker class="form-control">
                            <script>
                                document.addEventListener('livewire:load', function () {

                                    $('#start_date').on('change', function (e) {

                                    @this.set('start_date', e.target.value);
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2">{{ __('Favicon') }} {{ config('admin.favicon.image_upload_width') }}px - {{ config('admin.favicon.image_upload_height') }}px (.{{ config('admin.favicon.image_format') }})</label>
                    <div class="col-lg-6">
                        <div class="fileupload fileupload-new">
                            <div class="input-append">
                                @if ($favicon)
                                    <img style="max-height: 50px;" class="pr-3" src="{{ $favicon->temporaryUrl() }}"  alt="">
                                @else
                                    <img style="max-height: 50px;" class="pr-3" src="{{ asset('storage/'.$show_favicon) }}" alt="">
                                @endif

                                <span class="btn btn-default btn-file">
                                    <span class="fileupload-new">{{ __('Select file') }}</span>
                                    <input type="file" wire:model="favicon" accept=".png,.ico" />
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($errors->any())

                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        @foreach ($errors->all() as $error)
                            <p class="error">{{ $error }}</p>
                        @endforeach

                    </div>

                @endif
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

@section('livewire_scripts')
    @parent
    <script>
        Livewire.on('supportSaved', event => {
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
