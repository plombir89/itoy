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
                    <h2 class="page-title">{{ __('My Wish List') }}</h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{ route('account.index') }}">{{ __('Account') }}</a></li>
                        <li><a href="{{ route('account.wishlist') }}">{{ __('My Wish List') }}</a></li>
                    </ul>
                </div>
                @if(count($products->wishlist))
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <td class="text-center">{{ __('Image') }}</td>
                            <td class="text-left">{{ __('Product Name') }}</td>
                            <td class="text-left">{{ __('Code') }}</td>
                            <td class="text-right">{{ __('Stock') }}</td>
                            <td class="text-right">{{ __('Unit Price') }}</td>
                            <td class="text-right">{{ __('Action') }}</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products->wishlist as $product)
                            <tr class="wish">
                                <td class="text-center">
                                    <a href="{{ route('product.show', [app()->getLocale(), $product->item->slug]) }}">
                                        <img width="80" src="{{ asset('storage/'.$product->img) }}" alt="{{ $product->item->title }}" title="{{ $product->item->title }}">
                                    </a>
                                </td>
                                <td class="text-left"><a href="{{ route('product.show', [app()->getLocale(), $product->item->slug]) }}">{{ $product->item->title }}</a></td>
                                <td class="text-left">{{ $product->code }}</td>
                                <td class="text-right">In Stock</td>
                                <td class="text-right">
                                    <p class="price">
                                        @if($product['discount'] > 0)
                                            <span class="price-new">{{ $product['price'] }} MDL</span> <span class="price-old">{{ $product['discount'] }} MDL</span>
                                        @else
                                            {{ $product['price'] }} MDL
                                        @endif
                                    </p>
                                </td>
                                <td class="text-right"><button type="button" onclick="cart.add({{ $product->id }});" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="{{ __('Add to Cart') }}"><i class="fa fa-shopping-cart"></i></button>
                                    <a href="{{ route('account.wishlist.remove', $product) }}" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="{{ __('Remove') }}"><i class="fa fa-times"></i></a></td>
                            </tr>

                        @endforeach

                        </tbody>

                    </table>
                </div>
                @else
                    <p>{{ __('Your wish list is empty.') }}</p>
                @endif
                <div class="buttons clearfix">
                    <div class="pull-right"><a href="{{ route('account.index') }}" class="btn btn-primary">{{ __('Continue') }}</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
