@extends('admin.layouts.admin')

@section('layout', __('Information'))

@section('breadcrumbs')
    <li><span>{{ __('Information') }}</span></li>
    <li><span>{{ __('Activity') }}</span></li>
@endsection

@section('content')
    Activity
@endsection
