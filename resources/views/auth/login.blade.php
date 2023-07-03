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
                        <li><a href="{{ route('account.index') }}">{{ __('Account') }}</a></li>
                        <li><a href="#">{{ __('Login') }}</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well">
                            <h2>{{ __('New Customer') }}</h2>
                            <p><strong>{{ __('Register Account') }}</strong></p>
                            <p>{{ __('By creating an account you will be able to shop faster, be up to date on an order\'s status, and keep track of the orders you have previously made.') }}</p>
                            <a href="{{ route('register') }}" class="btn btn-primary">{{ __('Continue') }}</a></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="well">
                            <h2>{{ __('Returning Customer') }}</h2>
                            <p><strong>{{ __('I am a returning customer') }}</strong></p>
                            @error('email')
                            <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i>{{ $message }}</div>
                            @enderror
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label" for="input-email">{{ __('E-Mail') }}</label>
                                    <input type="text" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail') }}" id="input-email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="input-password">{{ __('Password') }}</label>
                                    <input type="password" name="password" value="" placeholder="{{ __('Password') }}" id="input-password" class="form-control">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="float-end">{{ __('Forgot Your Password?') }}</a>
                                        </a>
                                    @endif

                                </div>
                                <input type="submit" value="{{ __('Login') }}" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
