<div class="row" wire:ignore>
    <div class="col">
        <section class="card">
            <header class="card-header">
                <a href="{{ route('admin.pages.contacts.locations.create') }}" class="btn btn-primary btn-sm">{{ __('Add') }} <i class="fas fa-plus"></i></a>
            </header>
            <div class="card-body">
                <table class="table table-bordered table-striped mb-0" id="datatable-contacts-locations">
                    <thead>
                    <th>ID</th>
                    <th>{{ __('Country') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Created') }}</th>
                    <th>{{ __('Actions') }}</th>
                    </thead>
                </table>
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
                        <p class="mb-0">{{ __('Are you sure that you want to delete this location item?') }}</p>
                    </div>
                </div>
            </div>
            <footer class="card-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-primary modal-confirm" onClick="window.livewire.emit('remove');">{{ __('Confirm') }}</button>
                        <button class="btn btn-default modal-dismiss">{{ __('Cancel') }}</button>
                    </div>
                </div>
            </footer>
        </section>
    </div>
</div>

@section('page_scripts')
    @parent

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

        @if(session()->has('location_added'))
        new PNotify({
            title: '{{ __('Contact locations') }}',
            text: '{{ session('location_added') }}',
            type: 'success',
            hide: true,
            buttons: {
                sticker: false
            }
        });
        @endif

    </script>

    <script>


        $(document).ready(function () {
            $(".filter").submit(function (e) {
                e.preventDefault();

                var $this = this;
                var inputs = $(this).serializeArray();
                $.each(inputs, function (i, input) {
                    $($this).data(input.name, input.value);
                });

                $('#' + $($this).attr('data-table-id')).DataTable().draw();
            });
        });
    </script>
@endsection

@section('livewire_scripts')
    @parent
    <script>
        function emit(id){
            Livewire.emit('openmodal', id)
        }
        window.addEventListener('updatetable', event => {
            $('#datatable-contacts-locations').DataTable().draw();
        })
    </script>
@endsection
