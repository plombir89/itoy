@extends('front.layouts.main')

@section('content')
    <div id="account-edit" class="container">
        <div class="wrapper_container row">
            <aside id="column-left" class="col-sm-3 hidden-xs">
                @include('front.blocks.categories')

                @include('front.blocks.banner')

                @include('front.blocks.new-products')
            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="breadcrumb-container">
                    <h1 class="page-title">{{ __('My Account Information') }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{ route('account.index') }}">{{ __('Account') }}</a></li>
                        <li><a href="{{ route('account.edit') }}">{{ __('Edit Information') }}</a></li>
                    </ul>
                </div>
                <form action="{{ route('account.update') }}" method="post" class="form-horizontal">
                    @csrf
                    @method('PATCH')
                    <fieldset>
                        <legend>{{ __('Your Personal Details') }}</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-name">{{ __('First Name, Last Name') }} </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="{{ __('First Name, Last Name') }}" id="input-name" class="form-control">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">{{ __('E-Mail') }}</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="{{ __('E-Mail') }}" id="input-email" class="form-control">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-phone">{{ __('Phone') }}</label>
                            <div class="col-sm-10">
                                <input type="tel" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="{{ __('Phone') }}" id="input-phone" class="form-control">
                                @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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
