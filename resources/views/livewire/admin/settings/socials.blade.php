<section class="card">
    <header class="card-header">
        <h2 class="card-title">{{ __('Socials') }}</h2>
    </header>
    <div class="card-body pl-5 pr-5">
        <div class="row">
            <p class="mt-3">Porto Admin uses Box Icons, the comple list can be found in this link: <a href="https://boxicons.com/" target="_blank">https://boxicons.com/</a>.</p>
        </div>
        <div class="card-body">
            <form class="form-horizontal form-bordered" method="get">

                @forelse($socials as $index => $social)
                    <div class="row">
                        <label class="col-lg-3 col-xl-2 control-label text-lg-right pt-2">{{ $social->title }}</label>
                        <div class="col-lg-9 col-xl-6">
                            <div class="input-group mb-3 error">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <input type="checkbox" wire:model.defer="socials.{{ $index }}.published"/>
                                    </span>
                                </span>
                                <input type="text" class="form-control @error('socials.' . $index . '.link') error @enderror" wire:model.defer="socials.{{ $index }}.link">
                                <span class="input-group-append">
                                    <span class="input-group-text">
                                        <i class='{{ $social->icon }}'></i>
                                    </span>

                                </span>
                                <button class="btn btn-danger ml-3" wire:click.prevent="remove({{ $index }})"><i class='bx bx-trash' ></i></button>

                            </div>
                            @error('socials.' . $index . '.link')
                                <label class="error" for="">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>

                @empty
                    <h2>{{ __('No socials, add one') }}</h2>
                @endforelse
                @if($socials->count())
                    <div class="col-lg-9 text-center">
                        <div class="form-group">
                            <button class="btn btn-primary mt-md-5 mt-sm-3 mt-3" wire:click.prevent="save" >Save</button>
                        </div>
                    </div>
                @endif
{{--@json($socials)--}}
                <hr>

                    <livewire:admin.settings.add-socials />

            </form>
        </div>
    </div>
</section>

@section('livewire_scripts')

    <script>
        Livewire.on('socialsSaved', event => {
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

        Livewire.on('socialAdded', event => {
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

        Livewire.on('socialDeleted', event => {
            new PNotify({
                title: event.title,
                text: event.text,
                type: 'notice',
                hide: true,
                buttons: {
                    sticker: false
                }
            });
        })
    </script>

@endsection
