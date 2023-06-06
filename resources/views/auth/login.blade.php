@extends('layouts.app')

@section('content')
    <section class="body-sign">
        <div class="center-sign">
            <a href="/" class="logo float-left">
                <img src="/img/logo.png" height="54" alt="Porto Admin" />
            </a>

            <div class="panel card-sign">
                <div class="card-title-sign mt-3 text-end">
                    <h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> {{ __('Login') }}</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label>{{ __('Email Address') }}</label>
                            <div class="input-group">
                                <input name="username" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror @error('email') is-invalid @enderror" value="{{ old('username') }}" />
                                <span class="input-group-text">
                            <i class="bx bx-user text-4"></i>
                        </span>
                            </div>
                            @error('username')
                            <label id="email-error" class="error" for="email">{{ $message }}</label>
                            @enderror

                            @error('email')
                            <label id="email-error" class="error" for="email">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <div class="clearfix">
                                <label class="float-left">{{ __('Password') }}</label>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="float-end">{{ __('Forgot Your Password?') }}</a>
                                    </a>
                                @endif

                            </div>
                            <div class="input-group">
                                <input name="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" />
                                <span class="input-group-text">
                            <i class="bx bx-lock text-4"></i>
                        </span>
                            </div>
                            @error('password')
                            <label id="password-error" class="error" for="password">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="RememberMe" name="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox"/>
                                    <label for="RememberMe">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                            <div class="col-sm-4 text-end">
                                <button type="submit" class="btn btn-primary btn-sm mt-2">{{ __('Login') }}</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2017. All Rights Reserved.</p>
        </div>
    </section>
@endsection
