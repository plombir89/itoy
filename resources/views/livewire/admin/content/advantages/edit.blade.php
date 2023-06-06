<div class="row media-gallery">
    <div class="col-lg-12 mg-main p-0">
        <form id="form" action="" class="form-horizontal">
            <section class="card">
                <div class="card-body">
                    @foreach($advantages->items as $index => $item)
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Title') }} <span class="required">*</span></label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img class="icon-16" src="{{ asset($item->language->icon) }}" alt="">
                                    </span>
                                </span>
                                <input type="text" wire:model.lazy="advantages.items.{{ $index }}.title" class="form-control @error('advantages.items.'. $index .'.title') error @enderror"/>
                            </div>
                            @error('advantages.items.'. $index .'.title')
                                <label class="error text-color-danger" for="">{{ $message }}</label>
                            @enderror
                        </div>

                    </div>
                    @endforeach
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"></label>

                        <div class="col-sm-10">
                            <div class="checkbox-custom checkbox-default">
                                <input type="checkbox" wire:model="advantages.published" id="advantagesp">
                                <label for="advantagesp">{{ __('Published') }}</label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-sm-right">{{ __('Order') }}</label>
                        <div class="col-sm-2">

                            <input type="text" wire:model.lazy="advantages.order" class="form-control @error('advantages.order') error @enderror"/>

                            @error('advantages.order')
                            <label class="error text-color-danger" for="">{{ $message }}</label>
                            @enderror
                        </div>

                    </div>

                        <div class="form-group row pb-3 offset-2" wire:ignore>

                            <div class="tabs p-0 col-md-12">
                                <ul class="nav nav-tabs">
                                    @foreach($advantages['items'] as $index => $item)
                                        <li class="nav-item @if($loop->iteration == 1) active @endif">
                                            <a class="nav-link" href="#desc_{{ $index }}" data-toggle="tab"><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""></a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content">
                                    @foreach($advantages['items'] as $index => $item)
                                        <div id="desc_{{ $index }}" class="tab-pane @if($loop->iteration == 1) active @endif">
                                            <textarea class="form-control" wire:model.lazy="advantages.items.{{ $index }}.content"></textarea>
                                        </div>
                                    @endforeach

                                    @foreach($advantages['items'] as $index => $item)
                                        @error('advantages.'.$index.'.text')
                                        <label class="error text-color-danger" for=""><img class="icon-16" src="{{ asset($item->language->icon) }}" alt=""> {{ $message }}</label>
                                        <br>
                                        @enderror
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right">{{ __('Icon') }}</label>
                            <div class="col-sm-10">

                                <textarea wire:model.lazy="advantages.icon" class="form-control @error('advantages.icon') error @enderror"></textarea>

                                @error('advantages.icon')
                                <label class="error text-color-danger" for="">{{ $message }}</label>
                                @enderror

                                <p class="mt-4">{!! $advantages->icon !!}</p>
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
@section('page_scripts')
    @parent
    <script>
        @if (session()->has('updated'))
            new PNotify({
                title: '{{ __('Advantages') }}',
                text: '{{ session('updated') }}',
                type: 'success',
                hide: true,
                buttons: {
                    sticker: false
                }
            });
        @endif
    </script>
@endsection

@section('livewire_scripts')
    @parent

    <script>

        Livewire.on('updated', event => {
            new PNotify({
                title: event.title,
                text: event.content,
                type: 'success',
                hide: true,
                buttons: {
                    sticker: false
                }
            });
        })
    </script>


@endsection
