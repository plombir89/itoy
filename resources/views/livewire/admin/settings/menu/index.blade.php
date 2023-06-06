<div class="row">
    <div class="col">
        <section class="card">
            <header class="card-header">
                <a href="{{ route('admin.settings.menu.create') }}" class="btn btn-primary btn-sm">Add <i class="fas fa-plus"></i></a>
            </header>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dd" id="nestable">
                            <ol class="dd-list">
                                @foreach($menu as $item)
                                    <li class="dd-item" data-id="{{ $item->id }}">
                                        <div class="dd-handle">
                                            {{ $item->item->title }}
                                        </div>
                                        @if($item->child->count())
                                            <ol class="dd-list">
                                                @foreach($item->child as $child)
                                                    <li class="dd-item" data-id="{{ $child->id }}">
                                                        <div class="dd-handle">{{ $child->item->title }}</div>
                                                        <span class="sortable-links">
                                                            @if($child->published)
                                                                <span class="badge badge-success mr-3">{{ __('Published') }}</span>
                                                            @else
                                                                <span class="badge badge-danger mr-3">{{ __('Unpublished') }}</span>
                                                            @endif
                                                    <a href="{{ route('admin.settings.menu.edit', $child->id) }}" class="mr-2"><i class='bx bx-pencil'></i></a>
                                                    <a href="#" wire:click.prevent="openmodal({{ $child->id }})"><i class='bx bx-trash text-color-danger'></i></a>
                                                </span>
                                                    </li>
                                                @endforeach
                                            </ol>
                                        @endif
                                        <span class="sortable-links">
                                            @if($item->published)
                                                <span class="badge badge-success mr-3">{{ __('Published') }}</span>
                                            @else
                                                <span class="badge badge-danger mr-3">{{ __('Unpublished') }}</span>
                                            @endif
                                        <a href="{{ route('admin.settings.menu.edit', $item->id) }}" class="mr-2"><i class='bx bx-pencil'></i></a>
                                        <a href="#" wire:click.prevent="openmodal({{ $item->id }})"><i class='bx bx-trash text-color-danger'></i></a>
                                    </span>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
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
                        <p class="mb-0">{{ __('Are you sure that you want to delete this menu item?') }}</p>
                    </div>
                </div>
            </div>
            <footer class="card-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-primary modal-confirm" onClick="window.livewire.emit('removeMenuItem');">{{ __('Confirm') }}</button>
                        <button class="btn btn-default modal-dismiss">{{ __('Cancel') }}</button>
                    </div>
                </div>
            </footer>
        </section>
    </div>

</div>

@section('livewire_scripts')
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
