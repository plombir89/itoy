@extends('front.layouts.main')

@section('content')
    <div id="checkout" class="container">
        <div class="wrapper_container row">
            <aside id="column-left" class="col-sm-3 hidden-xs">
                <div class="box">
                    <h2 class="page-title hidden-sm hidden-xs">
                        Categories
                    </h2>
                    <div class="block-title clearfix  hidden-lg hidden-md collapsed" data-target="#box-container" data-toggle="collapse">
                        <span class="page-title">Categories</span>
                        <span class="navbar-toggler collapse-icons">
                          <i class="fa fa-angle-down add"></i>
                          <i class="fa fa-angle-up remove"></i>
                    </span>
                    </div>
                    <div id="box-container" class="collapse data-toggler">
                        <ul class="category-top-menu">
                            @include('front.blocks.categories')
                        </ul>
                    </div>
                </div>

                <section id="ishibannerblock-1684559940" class="ishibannerblock one_bannerblock">
                    <div class="bannerblock col-md-12 col-sm-12 col-xs-12">
                        <div class="image-container">
                            <a href="#" class="ishi-customhover-fadeinflip ">
                                <img src="https://demo.ishithemes.com/opencart/OPC073/image/cache/catalog/Left-banner-345x417.jpg" alt="" class="img-responsive">

                            </a>
                        </div>
                    </div>
                </section>
                @include('front.blocks.new-products')
            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="breadcrumb-container">
                    <h1 class="page-title">Checkout</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{ route('basket') }}">Shopping Cart</a></li>
                        <li><a href="{{ route('checkout') }}">Checkout</a></li>
                    </ul>
                </div>
                <div class="panel-collapse collapse in" id="collapse-checkout-confirm" aria-expanded="true" style="">
                    <div class="panel-body"><div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <td class="text-left">Product Name</td>
                                    <td class="text-left">Code</td>
                                    <td class="text-right">Quantity</td>
                                    <td class="text-right">Unit Price</td>
                                    <td class="text-right">Total</td>
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
                                    <td colspan="4" class="text-right"><strong>Sub-Total:</strong></td>
                                    <td class="text-right">{{ $order->getSubPrice() }} MDL</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right"><strong>Total:</strong></td>
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
