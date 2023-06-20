@extends('front.layouts.main')

@section('content')
    <div id="checkout" class="container">
        <div class="wrapper_container row">
            <aside id="column-left" class="col-sm-3 hidden-xs">
                @include('front.blocks.categories')

                @include('front.blocks.banner')

                @include('front.blocks.new-products')
            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="breadcrumb-container">
                    <h1 class="page-title">Checkout</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{ route('basket') }}">{{ __('Shopping Cart') }}</a></li>
                        <li><a href="{{ route('checkout') }}">{{ __('Checkout') }}</a></li>
                    </ul>
                </div>
                <div class="panel-collapse collapse in" id="collapse-checkout-confirm" aria-expanded="true" style="">
                    <div class="panel-body"><div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <td class="text-left">{{ __('Product Name') }}</td>
                                    <td class="text-left">{{ __('Code') }}</td>
                                    <td class="text-right">{{ __('Quantity') }}</td>
                                    <td class="text-right">{{ __('Unit Price') }}</td>
                                    <td class="text-right">{{ __('Total') }}</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->products as $product)
                                <tr>
                                    <td class="text-left"><a href="{{ route('product.show', [app()->getLocale(), $product->item->slug]) }}">{{ $product->item->title }}</a>         </td>
                                    <td class="text-left">{{ $product->code }}</td>
                                    <td class="text-right">{{ $product->pivot->count }}</td>
                                    <td class="text-right">{{ $product->price }} MDL</td>
                                    <td class="text-right">{{ $product->getPriceFrom() }} MDL</td>
                                </tr>
                                @endforeach
                                </tbody>

                                <tfoot>

                                <tr>
                                    <td colspan="4" class="text-right"><strong>{{ __('Sub-Total') }}:</strong></td>
                                    <td class="text-right">{{ $order->getSubPrice() }} MDL</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right"><strong>{{ __('Total') }}:</strong></td>
                                    <td class="text-right">{{ $order->getFullPrice() }} MDL</td>
                                </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                </div>

                <livewire:checkout />

            </div>
        </div>
    </div>
@endsection
