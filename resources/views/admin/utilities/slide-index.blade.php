@extends('admin.layouts.admin')

@section('layout', __('Utilities'))

@section('breadcrumbs')
    <li><span>{{ __('Utilities') }}</span></li>
    <li><span>{{ __('Slider') }}</span></li>
@endsection

@section('content')

    <livewire:admin.utilities.slide-index />

@endsection

@section('page_scripts')

    <script src="{{ asset('js/examples/examples.advanced.form.js') }}"></script>
    <script src="{{ asset('js/examples/examples.mediagallery.js') }}"></script>

@endsection

