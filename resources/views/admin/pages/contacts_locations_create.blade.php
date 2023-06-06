@extends('admin.layouts.admin')

@section('layout', __('Pages'))

@section('breadcrumbs')
    <li><span>{{ __('Pages') }}</span></li>
    <li><span>{{ __('Contacts location create') }}</span></li>
@endsection

@section('content')
    <livewire:admin.pages.contacts-locations-create/>
@endsection

@section('specific_page_vendor')
    <!-- Specific Page Vendor -->
    <script src="{{ asset('vendor/select2/js/select2.js') }}"></script>
    <script src="{{ asset('vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
@endsection

@section('page_scripts')
    <script src="{{ asset('js/examples/examples.datatables.default.js') }}"></script>

    @if(session()->has('updated'))
        <script>

            new PNotify({
                title: '{{ __('Contacts') }}',
                text: '{{ session('updated') }}',
                type: 'success',
                hide: true,
                buttons: {
                    sticker: false
                }
            });
        </script>
    @endif

@endsection

@section('specific_page_css')
    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/datatables/media/css/dataTables.bootstrap4.css') }}" />
@endsection
