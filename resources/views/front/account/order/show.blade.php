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
                <h1>{{ __('Order History') }}</h1>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td class="text-start" colspan="2">{{ __('Order Details') }}</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start" style="width: 50%;"> <b>{{ __('Order ID') }}:</b> #{{ $order->id }}
                                <br>
                                <b>{{ __('Date Added') }}:</b> {{ $order->date_added }}</td>
                            <td class="text-start" style="width: 50%;"> <b>{{ __('Order status') }}:</b> {{ __('Confirmed') }}</td>
                            </tr>

                    </tbody>
                </table>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td class="text-start" style="width: 50%; vertical-align: top;">{{ __('Shipping Address') }}</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start">asd asd<br>asd<br>asd, Barbuda<br>Antigua and Barbuda</td>
                        </tr>
                    </tbody>
                </table>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td class="text-start">{{ __('Product Name') }}</td>
                                <td class="text-start">{{ __('Code') }}</td>
                                <td class="text-end">{{ __('Quantity') }}</td>
                                <td class="text-end">{{ __('Price') }}</td>
                                <td class="text-end">{{ __('Total') }}</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($order->products as $product)
                            <tr>
                                <td class="text-start"><a href="{{ route('product.show', [app()->getLocale(), $product->item->slug]) }}">{{ $product->item->title }}</a></td>
                                <td class="text-start">{{ $product->code }}</td>
                                <td class="text-end">{{ $product->pivot->count }}</td>
                                <td class="text-end">{{ $product->price }} MDL</td>
                                <td class="text-end">{{ $product->getPriceFrom() }} MDL</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3"></td>
                                <td class="text-end"><b>{{ __('Sub-Total') }}</b></td>
                                <td class="text-end">{{ $order->getSubPrice() }} MDL</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td class="text-end"><b>{{ __('Total') }}</b></td>
                                <td class="text-end">{{ $order->getFullPrice() }} MDL</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="text-end"><a href="{{ route('orders.index') }}" class="btn btn-primary">{{ __('Continue') }}</a></div>
            </div>
        </div>
    </div>
@endsection
