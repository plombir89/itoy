@extends('front.layouts.main')

@section('content')
    <div class="container">
        <div class="wrapper_container row">		<aside id="column-left" class="col-sm-3 hidden-xs">
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

                <section id="ishibannerblock-1489771398" class="ishibannerblock one_bannerblock">
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
                    <h1 class="page-title">Shopping Cart</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{ route('basket') }}">Shopping Cart</a></li>
                    </ul>
                </div>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td class="text-center">Image</td>
                                <td class="text-left">Product Name</td>
                                <td class="text-left">Code</td>
                                <td class="text-left">Quantity</td>
                                <td class="text-right">Unit Price</td>
                                <td class="text-right">Total</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->products as $product)
                            <tr>
                                <td class="text-center">
                                    <a href="{{ route('product.show', [app()->getLocale(), $product->item->slug]) }}">
                                        <img width="60" src="{{ asset('storage/'. $product->img) }}" alt="{{ $product->item->title }}" title="{{ $product->item->title }}" class="img-thumbnail"></a> </td>
                                <td class="text-left"><a href="{{ route('product.show', [app()->getLocale(), $product->item->slug]) }}">{{ $product->item->title }}</a>                                  <br>
                                    </td>
                                <td class="text-left">{{ $product->code }}</td>
                                <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
                                        <span class="input-group-btn">
                                        <form style="float: left" action="{{ route('basket.remove', $product) }}" method="post">
                                            @csrf
                                            <button type="submit" data-toggle="tooltip" class="btn btn-danger"> <i class="fa fa-minus"></i></button>
                                        </form>
                                        <input type="text" name="quantity[94]" value="{{ $product->pivot->count }}" size="1" class="form-control">

                                            <form action="{{ route('basket.add', $product) }}" method="get">
                                                @csrf
                                                <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary"> <i class="fa fa-plus"></i></button>
                                            </form>
                  </span></div></td>
                                <td class="text-right unit-price">{{ $product->price }} MDL</td>
                                <td class="text-right total-price">{{ $product->getPriceFrom() }} MDL</td>
                            </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                <div class="row">

                    <div class="col-sm-8"></div>
                    <div class="col-sm-4 sub-total-table">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <td class="text-right"><strong>Sub-Total:</strong></td>
                                <td class="text-right total-amount">{{ $order->getSubPrice() }} MDL</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Total:</strong></td>
                                <td class="text-right total-amount">{{ $order->getFullPrice() }} MDL</td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="buttons clearfix">
                    <div class="pull-left"><a href="{{ route('product.index', app()->getLocale()) }}" class="btn btn-default">Continue Shopping</a></div>
                    <div class="pull-right"><a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
