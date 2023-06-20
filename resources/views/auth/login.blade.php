@extends('front.layouts.main')

@section('content')
    <div id="account-login" class="container">
        <div class="wrapper_container row">
            <aside id="column-left" class="col-sm-3 hidden-xs">

                @include('front.blocks.categories')

                @include('front.blocks.banner')

                @include('front.blocks.new-products')

            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="breadcrumb-container">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{ route('account.index') }}">Account</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well">
                            <h2>New Customer</h2>
                            <p><strong>Register Account</strong></p>
                            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                            <a href="{{ route('register') }}" class="btn btn-primary">Continue</a></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="well">
                            <h2>Returning Customer</h2>
                            <p><strong>I am a returning customer</strong></p>
                            @error('email')
                            <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i>{{ $message }}</div>
                            @enderror
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label" for="input-email">E-Mail Address</label>
                                    <input type="text" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" id="input-email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="input-password">Password</label>
                                    <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="float-end">{{ __('Forgot Your Password?') }}</a>
                                        </a>
                                    @endif

                                </div>
                                <input type="submit" value="Login" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
