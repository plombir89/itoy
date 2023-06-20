@extends('front.layouts.main')

@section('content')
    <div id="account-account" class="container">
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
                    <h1 class="page-title">{{ __('My Account') }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{ route('account.index') }}">{{ __('Account') }}</a></li>
                    </ul>
                </div>
                <div class="a-link-list">
                    <div class="a-link-heading"><h2>My Account</h2></div>
                    <div class="a-link-content">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('account.edit') }}">{{ __('Edit your account information') }}</a></li>
                            <li><a href="{{ route('account.password') }}">{{ __('Change your password') }}</a></li>
                            <li><a href="{{ route('account.address') }}">{{ __('Modify your address book entries') }}</a></li>
                            <li><a href="{{ route('account.wishlist') }}">{{ __('Modify your wish list') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="a-link-list">
                    <div class="a-link-heading"><h2>{{ __('My Orders') }}</h2></div>
                    <div class="a-link-content">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('orders.index') }}">{{ __('View your order history') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="a-link-list">
                    <div class="a-link-heading"><h2>{{ __('Newsletter') }}</h2></div>
                    <div class="a-link-content">
                        <ul class="list-unstyled">
                            <li><a href="/newsletter">{{ __('Subscribe / unsubscribe to newsletter') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
