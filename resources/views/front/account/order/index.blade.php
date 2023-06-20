@extends('front.layouts.main')

@section('content')
    <div id="account-wishlist" class="container">
        @if(session('message'))
            <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        @endif
        <div class="wrapper_container row">		<aside id="column-left" class="col-sm-3 hidden-xs">
                @include('front.blocks.categories')

                @include('front.blocks.banner')

                @include('front.blocks.new-products')
            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="breadcrumb-container">
                    <h2 class="page-title">{{ __('Order History') }}</h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{ route('account.index') }}">{{ __('Account') }}</a></li>
                        <li><a href="{{ route('account.wishlist') }}">{{ __('Order History') }}</a></li>
                    </ul>
                </div>
                @if(count($orders))
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <td class="text-end">{{ __('Order ID') }}</td>
                            <td class="text-start">{{ __('Customer') }}</td>
                            <td class="text-end">{{ __('No. of Products') }}</td>
                            <td class="text-start">{{ __('Status') }}</td>
                            <td class="text-end">{{ __('Total') }}</td>
                            <td class="text-start">{{ __('Date Added') }}</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td class="text-end">#{{ $order->id }}</td>
                                <td class="text-start">{{ $order->name }}</td>
                                <td class="text-end">{{ $order->products->count() }}</td>
                                <td class="text-start">{{ $order->status }}</td>
                                <td class="text-end">{{ $order->getFullPrice() }} MDL</td>
                                <td class="text-start">{{ $order->date_added }}</td>
                                <td class="text-end"><a href="{{ route('orders.show', $order) }}" data-bs-toggle="tooltip" class="btn btn-info" aria-label="{{ __('View') }}" data-bs-original-title="{{ __('View') }}"><i class="fa fa-eye"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <p>{{ __('You have not made any previous orders!') }}</p>
                @endif
                <div class="buttons clearfix">
                    <div class="pull-right"><a href="{{ route('account.index') }}" class="btn btn-primary">{{ __('Continue') }}</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
