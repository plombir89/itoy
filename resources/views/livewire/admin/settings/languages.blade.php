<div class="row">
    <div class="col-md-3">
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">{{ __('Add Language') }}</h2>
            </header>
            <div class="card-body">
                <form action="" method="post">
                    <select class="form-control" wire:model="addlang">
                        <option value="">{{ __('Select language') }}</option>
                        @foreach($newlanguages as $lang)
                            <option value="{{ $lang->prefix }}">{{ $lang->title }} - {{ $lang->prefix }}</option>
                        @endforeach
                    </select>

                </form>
            </div>
            <footer class="card-footer">
                <div class="row">
                    <div class="col-md-12 center">
                        <button class="btn btn-primary " wire:click.prevent="add">{{ __('Add') }}</button>
                    </div>
                </div>
            </footer>
        </section>
    </div>
    <div class="col-md-9">
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">{{ __('Language setup') }}</h2>
            </header>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table mb-none mb-0" >
                        <thead>
                        <tr>
                            <th class="text-center">{{ __('Flag') }}</th>
                            <th>{{ __('Lang') }}</th>
                            <th class="text-center">{{ __('Prefix') }}</th>
                            <th class="text-center">{{ __('Position') }}</th>
                            <th class="text-center">{{ __('Default') }}</th>
                            <th class="text-center">{{ __('Visibility') }}</th>
                            <th class="text-center">{{ __('Action') }}</th>
                        </tr>
                        </thead>
                        <tbody>

                                @foreach($languages as $lang)
                                    <tr>
                                        <td class="text-center"><img style="width: 16px" src="{{ asset($lang->icon) }}"></td>
                                        <td>{{ $lang->title }}</td>
                                        <td class="text-center">{{ $lang->prefix }}</td>
                                        <td class="text-center"><input type="text" class="form-control text-center"  style="width:20%;margin-left: 40%" wire:model="langs.{{ $lang->prefix }}.listorder" ></td>
                                        <td class="text-center"><input type="radio" wire:model="langs.default" value="{{ $lang->prefix }}" ></td>
                                        <td class="text-center"><input type="checkbox" wire:model="langs.{{ $lang->prefix }}.active"></td>
                                        <td class="text-center"><a class="modal-with-zoom-anim" wire:click.prevent="setLangToRemove('{{ $lang->prefix }}')" href="#"><i class='bx bx-trash'></i></a></td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

    <!-- Modal Animation -->
    <div id="modalAnim" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">{{ __('Are you sure?') }}</h2>
            </header>
            <div class="card-body">
                <div class="modal-wrapper">
                    <div class="modal-icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <div class="modal-text">
                        <p class="mb-0">{{ __('Are you sure that you want to delete this language?') }}</p>
                    </div>
                </div>
            </div>
            <footer class="card-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-primary modal-confirm" onClick="window.livewire.emit('removeLang');">{{ __('Confirm') }}</button>
                        <button class="btn btn-default modal-dismiss">{{ __('Cancel') }}</button>
                    </div>
                </div>
            </footer>
        </section>
    </div>
</div>


<script>
    window.addEventListener('selectLang', event => {
        new PNotify({
            title: event.detail.title,
            text: event.detail.text,
            type: 'error',
            hide: true,
            buttons: {
                sticker: false
            }
        });
    })

    window.addEventListener('langAdded', event => {
        new PNotify({
            title: event.detail.title,
            text: event.detail.text,
            type: 'success',
            hide: true,
            buttons: {
                sticker: false
            }
        });
    })

    window.addEventListener('langRemoved', event => {
        new PNotify({
            title: event.detail.title,
            text: event.detail.text,
            type: 'notice',
            hide: true,
            buttons: {
                sticker: false
            }
        });
    })

    window.addEventListener('cantDelete', event => {
        new PNotify({
            title: event.detail.title,
            text: event.detail.text,
            type: 'error',
            hide: true,
            buttons: {
                sticker: false
            }
        });
    })

    window.addEventListener('error', event => {
        new PNotify({
            title: event.detail.title,
            text: event.detail.text,
            type: 'error',
            hide: true,
            buttons: {
                sticker: false
            }
        });
    })

</script>

@section('page_scripts')
    <script>

        window.addEventListener('openmodal', event => {
            $.magnificPopup.open({
                items: {
                    src: '#modalAnim'
                },
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in',
                modal: true
            });
        })


        /*
            Modal Dismiss
        */
        $(document).on('click', '.modal-dismiss', function (e) {
            e.preventDefault();
            $.magnificPopup.close();
        });

        /*
            Modal Confirm
        */
        $(document).on('click', '.modal-confirm', function (e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    </script>
@endsection
