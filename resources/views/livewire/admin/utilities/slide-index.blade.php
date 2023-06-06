<div class="row media-gallery">
    @foreach($slides as $slide)
        <livewire:admin.utilities.slide :slide="$slide" :wire:key="$slide->id" />
    @endforeach

    <livewire:admin.utilities.slide-create />

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
                            <p class="mb-0">{{ __('Are you sure that you want to delete this slide?') }}</p>
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button class="btn btn-primary modal-confirm" onClick="window.livewire.emit('removeSlide');">{{ __('Confirm') }}</button>
                            <button class="btn btn-default modal-dismiss">{{ __('Cancel') }}</button>
                        </div>
                    </div>
                </footer>
            </section>
        </div>

</div>

@section('livewire_scripts')
    @parent
    <script>
        Livewire.on('slideCreatedMessage', event => {
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

        Livewire.on('slideDeletedMessage', event => {
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


