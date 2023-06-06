@extends('admin.layouts.admin')

@section('layout', __('Settings'))

@section('breadcrumbs')
    <li><span>{{ __('Settings') }}</span></li>
    <li><span>{{ __('Menu') }}</span></li>
@endsection

@section('content')
    <livewire:admin.settings.menu.index />
@endsection

@section('specific_page_vendor')
    <script src="{{ asset('vendor/jquery-nestable/jquery.nestable.js') }}"></script>
@endsection

@section('page_scripts')
    <script src="{{ asset('js/examples/examples.nestable.js') }}"></script>
@endsection()
