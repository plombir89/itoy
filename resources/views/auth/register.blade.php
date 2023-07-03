@extends('front.layouts.main')

@section('content')
    <div id="account-register" class="container">
        <div class="wrapper_container row">		<aside id="column-left" class="col-sm-3 hidden-xs">

                @include('front.blocks.categories')

                @include('front.blocks.banner')

                @include('front.blocks.new-products')

            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="breadcrumb-container">
                    <h1 class="page-title">{{ __('Register Account') }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{ route('account.index') }}">{{ __('Account') }}</a></li>
                        <li><a href="#">{{ __('Register') }}</a></li>
                    </ul>
                </div>
                <p class="alert alert-warning">{{ __('If you already have an account with us, please login at the') }} <a href="{{ route('login') }}">{{ __('login page') }}</a>.</p>
                <form action="{{ route('register') }}" method="post" class="form-horizontal">
                    @csrf
                    @error('agree')
                    <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ __('Warning: You must agree to the Privacy Policy!') }}</div>
                    @enderror
                    <fieldset id="account">
                        <legend>{{ __('Your Personal Details') }}</legend>

                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">{{ __('First Name, Last Name') }}</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="{{ __('First Name, Last Name') }}" id="input-firstname" class="form-control">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">{{ __('E-Mail') }}</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail') }}" id="input-email" class="form-control">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-telephone">{{ __('Phone') }}</label>
                            <div class="col-sm-10">
                                <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="{{ __('Phone') }}" id="input-telephone" class="form-control">
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>{{ __('Your Password') }}</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-password">{{ __('Password') }}</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-confirm">{{ __('Password Confirm') }}</label>
                            <div class="col-sm-10">
                                <input type="password" name="password_confirmation" value="" placeholder="{{ __('Password Confirm') }}" id="input-confirm" class="form-control">
                            </div>
                        </div>
                    </fieldset>


                    <div class="buttons">
                        <div class="pull-right">{{ __('I have read and agree to the') }} <a href="" class="agree"><b>{{ __('Privacy Policy') }}</b></a>
                            <input type="checkbox" name="agree" value="1">
                            &nbsp;
                            <input type="submit" value="{{ __('Continue') }}" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
