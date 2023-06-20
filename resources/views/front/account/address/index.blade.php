@extends('front.layouts.main')

@section('content')
    <div id="account-address" class="container">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ session('message') }}</div>
        @endif

        <div class="wrapper_container row">		<aside id="column-left" class="col-sm-3 hidden-xs">
                @include('front.blocks.categories')

                @include('front.blocks.banner')

                @include('front.blocks.new-products')
            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="breadcrumb-container">
                    <h2 class="page-title">{{ __('Address Book Entries') }}</h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{ route('account.index') }}">{{ __('Account') }}</a></li>
                        <li><a href="{{ route('account.address') }}">{{ __('Address Book') }}</a></li>
                    </ul>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tbody>
                        @forelse($addresses as $address)
                            <tr>
                                <td class="text-left">{{ $address->name }}<br>{{ $address->city }}<br>{{ $address->region }}<br>{{ $address->postal_code }}<br>{{ $address->address }}</td>
                                <td class="text-right"><a href="{{ route('account.address.edit', $address) }}" class="btn btn-info">Edit</a> &nbsp;
                                    <a href="{{ route('account.address.delete', $address) }}" data-toggle="tooltip" title="" class="btn btn-danger" onclick="return confirm('{{ __('Are you sure?') }}')" data-original-title="{{ __('Delete') }}">{{ __('Delete') }}</a></td>
                            </tr>
                        @empty
                            <p>{{ __('No addresses') }}</p>
                        @endforelse


                        </tbody></table>
                </div>
                <div class="buttons clearfix">
                    <div class="pull-left"><a href="{{ route('account.index') }}" class="btn btn-default">{{ __('Back') }}</a></div>
                    <div class="pull-right"><a href="{{ route('account.address.add') }}" class="btn btn-primary">{{ __('New Address') }}</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
