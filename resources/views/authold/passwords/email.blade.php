@extends('layouts.app')

@section('content')
    <section class="body-sign">
        <div class="center-sign">
            <a href="/" class="logo float-left">
                <img src="{{ asset('img/logo.png') }}" height="54" alt="Porto Admin" />
            </a>

            <div class="panel card-sign">
                <div class="card-title-sign mt-3 text-right">
                    <h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle mr-1 text-6 position-relative top-5"></i> Recover Password</h2>
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        <p class="m-0">Enter your e-mail below and we will send you reset instructions!</p>
                    </div>

                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group">
                                <input name="username" type="email" placeholder="E-mail" class="form-control form-control-lg" />
                                <span class="input-group-append">
										<button class="btn btn-primary btn-lg" type="submit">Reset!</button>
									</span>
                            </div>
                        </div>

                        <p class="text-center mt-3">Remembered? <a href="{{ route('login') }}">Sign In!</a></p>
                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2017. All Rights Reserved.</p>
        </div>
    </section>
@endsection
