@extends('admin.layouts.admin')

@section('layout', __('Utilities'))

@section('breadcrumbs')
    <li><span>{{ __('Utilities') }}</span></li>
    <li><span>{{ __('Slider') }}</span></li>
@endsection

@section('content')
    <div class="row media-gallery">
    @foreach($slides as $slide)
        <livewire:admin.utilities.slide :slide="$slide" :wire:key="$slide->id" />
    @endforeach

        <livewire:admin.utilities.slide-create />

    </div>
@endsection

@section('page_scripts')

    <script src="{{ asset('js/examples/examples.advanced.form.js') }}"></script>
    <script src="{{ asset('js/examples/examples.mediagallery.js') }}"></script>

@endsection
