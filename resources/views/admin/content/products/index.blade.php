@extends('admin.layouts.admin')

@section('layout', __('Content'))

@section('breadcrumbs')
    <li><span>{{ __('Content') }}</span></li>
    <li><span>{{ __('Products') }}</span></li>
@endsection

@section('content')

    <livewire:admin.content.products.index />

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
                        <p class="mb-0">{{ __('Are you sure that you want to delete this product item?') }}</p>
                    </div>
                </div>
            </div>
            <footer class="card-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-primary modal-confirm" onClick="window.livewire.emit('removeProductItem');">{{ __('Confirm') }}</button>
                        <button class="btn btn-default modal-dismiss">{{ __('Cancel') }}</button>
                    </div>
                </div>
            </footer>
        </section>
    </div>
@endsection


@section('page_scripts')
    <script src="{{ asset('js/examples/examples.datatables.default.js') }}"></script>
    <script src="{{ asset('js/examples/examples.modals.js') }}"></script>
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

@section('specific_page_vendor')
    <script src="{{ asset('vendor/select2/js/select2.js') }}"></script>
    <script src="{{ asset('vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
@endsection

@section('specific_page_css')
    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/datatables/media/css/dataTables.bootstrap4.css') }}" />
@endsection
