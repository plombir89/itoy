@extends('admin.layouts.admin')

@section('layout', __('Information'))

@section('breadcrumbs')
    <li><span>{{ __('Information') }}</span></li>
    <li><span>{{ __('Seo') }}</span></li>
@endsection

@section('content')
    <livewire:admin.information.seo :scripts="$scripts"/>
@endsection
