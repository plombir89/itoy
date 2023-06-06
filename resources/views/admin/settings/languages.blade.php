@extends('admin.layouts.admin')

@section('layout', __('Settings'))

@section('breadcrumbs')
    <li><span>{{ __('Settings') }}</span></li>
    <li><span>{{ __('Languages') }}</span></li>
@endsection

@section('content')

    <livewire:admin.settings.languages />

@endsection
