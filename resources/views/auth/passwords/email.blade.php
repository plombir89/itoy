@extends('front.layouts.main')

@section('content')
    <div id="account-forgotten" class="container">
        <div class="wrapper_container row">
            <aside id="column-left" class="col-sm-3 hidden-xs">
                @include('front.blocks.categories')

                @include('front.blocks.banner')

                @include('front.blocks.new-products')
            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="breadcrumb-container">
                    <h1 class="page-title">Forgot Your Password?</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=account/account">Account</a></li>
                        <li><a href="#">Forgotten Password</a></li>
                    </ul>
                </div>
                <p>Enter the e-mail address associated with your account. Click submit to have a password reset link e-mailed to you.</p>
                <form action="https://demo.ishithemes.com/opencart/OPC073/index.php?route=account/forgotten" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <fieldset>
                        <legend>Your E-Mail Address</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control">
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons clearfix">
                        <div class="pull-left"><a href="https://demo.ishithemes.com/opencart/OPC073/index.php?route=account/login" class="btn btn-default">Back</a></div>
                        <div class="pull-right">
                            <input type="submit" value="Continue" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
