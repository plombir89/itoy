@extends('front.layouts.main')

@section('content')
    <div id="account-password" class="container">

        <div class="wrapper_container row">		<aside id="column-left" class="col-sm-3 hidden-xs">
                @include('front.blocks.categories')

                @include('front.blocks.banner')

                @include('front.blocks.new-products')
            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="breadcrumb-container">
                    <h1 class="page-title">{{ __('Change Password') }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{ route('account.index') }}">{{ __('Account') }}</a></li>
                        <li><a href="{{ route('account.password') }}">{{ __('Change Password') }}</a></li>
                    </ul>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif

                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ session('message') }}</div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible"><i class="fa fa-check-circle"></i> {{ session('error') }}</div>
                @endif

                <form action="{{ route('account.password.update') }}" method="post" class="form-horizontal">
                    @csrf
                    @method('PATCH')
                    <fieldset>
                        <legend>{{ __('Your Password') }}</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-password">{{ __('Current password') }}</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" value="" placeholder="{{ __('Password') }}" id="input-password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-new_password">{{ __('New password') }}</label>
                            <div class="col-sm-10">
                                <input type="password" name="new_password" value="" placeholder="{{ __('New password') }}" id="input-new_password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-confirm">{{ __('New password Confirm') }}</label>
                            <div class="col-sm-10">
                                <input type="password" name="new_password_confirmation" value="" placeholder="{{ __('Password Confirm') }}" id="input-confirm" class="form-control">
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons clearfix">
                        <div class="pull-left"><a href="{{ route('account.index') }}" class="btn btn-default">{{ __('Back') }}</a></div>
                        <div class="pull-right">
                            <input type="submit" value="{{ __('Continue') }}" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
