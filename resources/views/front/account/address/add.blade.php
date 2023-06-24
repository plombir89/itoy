@extends('front.layouts.main')

@section('content')
    <div id="account-address" class="container">
        <div class="wrapper_container row">		<aside id="column-left" class="col-sm-3 hidden-xs">
                @include('front.blocks.categories')

                @include('front.blocks.banner')

                @include('front.blocks.new-products')
            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="breadcrumb-container">
                    <h2 class="page-title">{{ __('Add Address') }}</h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{ route('account.index') }}">{{ __('Account') }}</a></li>
                        <li><a href="{{ route('account.address') }}">{{ __('Address Book') }}</a></li>
                        <li><a href="{{ route('account.address.add') }}">{{ __('Add Address') }}</a></li>
                    </ul>
                </div>
                <form action="{{ route('account.address.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <fieldset>
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
                            <label class="col-sm-2 control-label" for="input-firstname">{{ __('Phone') }}</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" value="{{ old('phone') }}" placeholder="{{ __('Phone') }}" id="input-phone" class="form-control">
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-city">{{ __('City') }}</label>
                            <div class="col-sm-10">
                                <input type="text" name="city" value="{{ old('city') }}" placeholder="{{ __('City') }}" id="input-city" class="form-control">
                                @error('city')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-region">{{ __('Region') }}</label>
                            <div class="col-sm-10">
                                 <input type="text" name="region" value="{{ old('region') }}" placeholder="{{ __('Region') }}" id="input-region" class="form-control">
                                @error('region')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-address-1">{{ __('Address') }}</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" value="{{ old('address') }}" placeholder="{{ __('Address') }}" id="input-address-1" class="form-control">
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-postcode">{{ __('Post Code') }}</label>
                            <div class="col-sm-10">
                                <input type="text" name="postal_code" value="{{ old('postal_code') }}" placeholder="{{ __('Post Code') }}" id="input-postcode" class="form-control">
                                @error('postal_code')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">{{ __('Default Address') }}</label>
                            <div class="col-sm-10">
                                <label class="radio-inline">
                                    <input type="radio" name="default" value="1" {{ old('default') == true ? 'checked' : '' }} >
                                    {{ __('Yes') }}</label>
                                <label class="radio-inline">
                                    <input type="radio" name="default" value="0" {{ old('default') == false ? 'checked' : '' }}>
                                    {{ __('No') }}</label>
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
