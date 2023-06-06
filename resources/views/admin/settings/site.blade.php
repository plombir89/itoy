@extends('admin.layouts.admin')

@section('layout', __('Settings'))

@section('breadcrumbs')
    <li><span>{{ __('Settings') }}</span></li>
    <li><span>{{ __('Site') }}</span></li>
@endsection

@section('content')
    <div class="row">

        <livewire:admin.settings.site.support />

        <livewire:admin.settings.site.logo />

    </div>


    <livewire:admin.settings.site.copyright />

    <livewire:admin.settings.site.home-seo />

@endsection

@section('specific_page_vendor')
    <script src="{{ asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
@endsection

@section('specific_page_css')
    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}" />
@endsection
