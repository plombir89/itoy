@extends('front.layouts.main')

@section('title', $data->title)

@section('keywords', $data->keywords)

@section('description', $data->description)

@section('content')

    <div id="product-product" class="container">
        <div class="wrapper_container row">
            <aside id="column-left" class="col-sm-3 hidden-xs">
                @include('front.blocks.categories')

                @include('front.blocks.banner')

                @include('front.blocks.new-products')
            </aside>

            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="breadcrumb-container">
                    <h1 class="page-title">{{ $data->title }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li>{{ $data->title }}</li>
                    </ul>
                </div>
                <div class="product_carousel">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 product-left">
                            <div class="product-left-title hidden-lg hidden-md hidden-sm">
                                <h2 class="product-title">{{ $data->title }}</h2>
                                <ul class="list-unstyled price">
                                    <li>
                                        @if($data->parent->discount > 0)
                                            <h2 class="product-price">{{ $data->parent->price }} MDL <del>{{ $data->parent->discount }} MDL</del></h2>
                                        @else
                                            <h2 class="product-price">{{ $data->parent->price }} MDL</h2>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            <div class="product-image thumbnails_horizontal">
                                <div class="carousel-container">
                                    <a class="thumbnail" href="{{ asset('storage/'.$data->parent->img ) }}"
                                       title="{{ $data->title }}">
                                        <img src="{{ asset('storage/'.$data->parent->img ) }}" title="{{ $data->title }}"
                                             alt="{{ $data->title }}"/>
                                    </a>
                                </div>
                                <div class="image_show">
                                    <div id="slider_carousel" class="owl-carousel">
                                        @foreach($data->parent->images as $image)
                                        <div class="image-additional item">
                                            <a class="thumbnail" href="{{ asset('storage/'.$image['img'] ) }}"
                                               title="{{ $data->title }}">
                                                <img src="{{ asset('storage/'.$image['img'] ) }}"
                                                     title="{{ $data->title }}" alt="{{ $data->title }}"/>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_info clearfix">
                                <div id="accordion" class="panel-group" role="tablist">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <a data-toggle="collapse" href="#tab-description" data-parent="#accordion"
                                               aria-expanded="true"> {{ __('Description') }} </a>
                                        </div>
                                        <div id="tab-description" class="panel-collapse collapse in" role="tabpanel"
                                             aria-labelledby="headingOne">
                                            <div class="tab-description">
                                                {!! $data->text !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default tab_review">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <a data-toggle="collapse" href="#tab-review" data-parent="#accordion"
                                               aria-expanded="false">{{ __('Reviews') }} ({{ $data->parent->reviews }})</a>
                                        </div>
                                        <div id="tab-review" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <form class="form-horizontal" id="form-review">
                                                    <div id="review">
                                                        @foreach($reviews as $review)
                                                        <table class="table table-striped table-bordered">
                                                            <tbody>
                                                            <tr>
                                                                <td style="width: 50%;"><strong>{{ $review->user->name }}</strong></td>
                                                                <td class="text-end">{{ $review->created_at->format('d.m.Y H:i') }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><p>{{ $review->text }}</p>
                                                                    <div class="rating">
                                                                        @for($i = 1;$i <= 5; $i++)
                                                                            <span class="fa fa-stack">
                                                                                <i class="fa fa-star @if($i <= $review->rating) yellow @else gray @endif fa-stack-2x"></i>
                                                                            </span>
                                                                        @endfor
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        @endforeach
                                                        <div class="text-end"></div>
                                                    </div>
                                                    <h2>{{ __('Write a review') }}</h2>
                                                    <div class="form-group required">
                                                        <div class="col-sm-12">
                                                            <label class="control-label" for="input-name">{{ __('YourName') }}</label>
                                                            <input type="text" name="name" value="{{ auth()->check() ? auth()->user()->name : '' }}" id="input-name"class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="product_id" value="{{ $data->parent->id }}">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <label class="control-label" for="input-text">{{ __('Your Review') }}</label>
                                                            <textarea name="text" rows="5" id="input-text"
                                                                      class="form-control"></textarea>
                                                            <div class="help-block"><span
                                                                    class="text-danger">{{ __('Note') }}:</span> {{ __('HTML is not translated!') }}
                                                            </div>
                                                            <p id="error-text" class="invalid-feedback"></p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <label class="control-label radio-title">{{ __('Rating') }}</label>&nbsp;&nbsp;&nbsp;
                                                            <div class="form-radio">
                                                                <span>{{ __('Bad') }}</span>&nbsp;
                                                                <input type="radio" name="rating" value="1"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="2"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="3"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="4"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="5"/>
                                                                &nbsp;<span>{{ __('Good') }}</span>
                                                            </div>
                                                            <div id="error-rating" class="invalid-feedback"></div>
                                                        </div>

                                                    </div>
                                                    <div id="alert"></div>
                                                    <div class="buttons clearfix">
                                                        <div class="pull-right">
                                                            <button type="submit" id="button-review"
                                                                    data-loading-text="{{ __('Loading...') }}"
                                                                    class="btn btn-primary">{{ __('Continue') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 product-right">
                            <div class="product-left-title hidden-xs">
                                <h1 class="product-title">{{ $data->title }}</h1>
                            </div>

                            <div class="rating-wrapper">
                                @for($i = 1;$i <= 5; $i++)
                                    <span class="fa fa-stack">
                                      <i class="fa fa-star @if($i <= $data->parent->rating) yellow @else gray @endif fa-stack-2x"></i>
                                    </span>
                                @endfor

                                <a class="review-count" href="" onclick="customclick(); return false;">{{ $data->parent->reviews }} {{ __('reviews') }}</a> /
                                <a class="write-review" href="" onclick="customclick(); return false;"><i
                                        class="fa fa-pencil"></i> {{ __('Write a review') }}</a>
                            </div>

                            <ul class="list-unstyled price">
                                @if($data->parent->discount > 0)
                                    <li class="product-price hidden-xs">
                                        <h2>{{ $data->parent->price }} MDL</h2>
                                    </li>
                                    <li class="product-dis hidden-xs">
                                        <span style="text-decoration: line-through;">{{ $data->parent->discount }} MDL</span>
                                    </li>
                                @else
                                    <li class="product-price hidden-xs">
                                        <h2>{{ $data->parent->price }} MDL</h2>
                                    </li>
                                @endif
                            </ul>

                            <hr>

                            <div class="form-group">
                                <label class="control-label" for="input-quantity">{{ __('Qty') }}</label>
                                <input type="text" name="quantity" value="1" size="2" id="input-quantity"
                                       class="form-control"/>
                                <button type="button" id="button-cart" data-loading-text="{{ __('Loading...') }}"
                                        class="btn btn-primary btn-lg btn-block">{{ __('Add to Cart') }}
                                </button>
                                <button type="button" data-toggle="tooltip" class="btn btn-default wishlist"
                                        title="{{ __('Add to Wish List') }}" onclick="wishlist.add({{ $data->parent->id }});">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <symbol id="heart-shape-outline" viewBox="0 0 1030 1030"><title>
                                                heart-shape-outline</title>
                                            <path
                                                d="M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z"/>
                                        </symbol>
                                    </svg>
                                    <svg class="icon" viewBox="0 0 28 28">
                                        <use xlink:href="#heart-shape-outline" x="25%" y="26%"></use>
                                    </svg>
                                    <i class="fa fa-heart"></i>
                                </button>

                            </div>

                            <ul class="list-unstyled attr">
                                <li><span>{{ __('Product Code') }}:</span> {{ $data->parent->code }}</li>
                                <li><span>{{ __('Availability') }}:</span> @if($data->parent->stock == 0) {{ __('Out of Stock') }} @else {{ __('In Stock') }} @endif </li>
                            </ul>
                        </div>
                    </div>
                </div>
{{--                Related prosucts--}}
                @include('front.blocks.ralated-products')
            </div>
        </div>
    </div>
    <script type="text/javascript"><!--

        $('#form-review').on('submit', function(e) {
            e.preventDefault();

            var element = this;

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route('product.review.store') }}',
                type: 'post',
                data: $('#form-review').serialize(),
                dataType: 'json',
                cache: false,
                contentType: 'application/x-www-form-urlencoded',
                processData: false,
                beforeSend: function() {
                    $('#button-review').button('loading');
                },
                complete: function() {
                    $('#button-review').button('reset');
                },
                success: function(json) {
                    $('.alert-dismissible').remove();
                    $('#form-review').find('.is-invalid').removeClass('is-invalid');
                    $('#form-review').find('.invalid-feedback').removeClass('d-block');

                    if (json['success']) {
                        $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-circle-exclamation"></i> ' + json['success'] + '</div>');

                        $('#input-text').val('');
                        $('input[type=\'radio\']').prop('checked', false);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {

                    $('.alert-dismissible').remove();
                    $('#form-review').find('.is-invalid').removeClass('is-invalid');
                    $('#form-review').find('.invalid-feedback').removeClass('d-block');

                    if (xhr.responseJSON['warning']) {

                        $('#alert').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + xhr.responseJSON['warning'] + '</div>');

                    }

                    if (xhr.responseJSON['errors']) {


                        for (key in xhr.responseJSON['errors']) {
                            $('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                            $('#error-' + key.replaceAll('_', '-')).html(xhr.responseJSON['errors'][key]).addClass('d-block');
                        }
                    }

                    console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });

        //--></script>
    <script type="text/javascript"><!--
        $('#button-cart').on('click', function () {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route('basket.add', $data->parent->id ) }}',
                type: 'post',
                data: $('input[type=\'text\'], input[type=\'hidden\'], input[type=\'radio\']:checked, input[type=\'checkbox\']:checked, select, textarea'),
                dataType: 'json',
                beforeSend: function () {
                    $('#button-cart').button('loading');
                },
                complete: function () {
                    $('#button-cart').button('reset');
                },
                success: function (json) {
                    $('.alert-dismissible, .text-danger').remove();
                    $('.form-group').removeClass('has-error');

                    if (json['error']) {
                        if (json['error']['option']) {
                            for (i in json['error']['option']) {
                                var element = $('#input-option' + i.replace('_', '-'));

                                if (element.parent().hasClass('input-group')) {
                                    element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                                } else {
                                    element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                                }
                            }
                        }

                        if (json['error']['recurring']) {
                            $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                        }

                        // Highlight any found errors
                        $('.text-danger').parent().addClass('has-error');
                    }

                    if (json['success']) {

                        $('#cart > button').html('<span class="cart-link"><span class="cart-img hidden-xs hidden-sm"><svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="shopping-bag" viewBox="0 0 590 590"><title>shopping-bag</title><path d="M258.005,218.355c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5l73.9-73.9c4.7-4.7,4.7-12.3,0-17s-12.3-4.7-17,0l-65.4,65.5l-26.4-26.4c-4.7-4.7-12.3-4.7-17,0s-4.7,12.3,0,17L258.005,218.355z"/><path d="M145.005,318.355h268.9c29.7,0,53.8-24.2,53.8-53.8v-113.3c0-6.6-5.4-12-12-12s-12,5.4-12,12v113.2c0,16.5-13.4,29.8-29.8,29.8h-268.9c-16.5,0-29.8-13.4-29.8-29.8v-66.7v-74.6v-9.7v-70.2c0-0.4,0-0.9-0.1-1.3c0-0.1,0-0.2,0-0.3c0-0.3-0.1-0.6-0.1-0.8s-0.1-0.5-0.2-0.7c0-0.1-0.1-0.3-0.1-0.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.2-0.2-0.5-0.3-0.7c-0.1-0.1-0.1-0.3-0.2-0.4c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.1-0.2-0.3-0.3-0.4c-0.1-0.2-0.3-0.4-0.4-0.5s-0.2-0.2-0.3-0.3c-0.2-0.2-0.3-0.4-0.5-0.6c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.2-0.4-0.4-0.6-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.1-0.4-0.3-0.6-0.4c-0.2-0.2-0.5-0.3-0.7-0.5c-0.1,0-0.2-0.1-0.2-0.2c-0.4-0.2-0.8-0.4-1.2-0.6l-73.9-31c-6.1-2.6-13.1,0.3-15.7,6.4c-2.6,6,0.3,13.1,6.4,15.7l66.5,28.1v62.3v9.7v74.6v66.7v84.3c0,28.2,21.7,51.3,49.3,53.6c-5.6,8.4-8.9,18.5-8.9,29.4c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2c0-10.8-3.2-20.8-8.7-29.2h127.3c-5.5,8.4-8.7,18.4-8.7,29.2c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2s-23.9-53.2-53.2-53.2h-256c-16.5,0-29.8-13.4-29.8-29.8v-39.5C123.705,314.955,134.005,318.355,145.005,318.355z M213.905,431.755c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S213.905,415.655,213.905,431.755z M430.105,431.755c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S430.105,415.655,430.105,431.755z"/></symbol></svg><svg class="icon" viewBox="0 0 30 30"><use xlink:href="#shopping-bag" x="8%" y="7%"></use></svg></span><span class="cart-img hidden-lg hidden-md"><svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="cart-responsive" viewBox="0 0 510 510"><title>cart-responsive</title><path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6zM98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2H270l22.4,209.2H30z"></path></symbol></svg><svg class="icon" viewBox="0 0 40 40"><use xlink:href="#cart-responsive" x="13%" y="13%"></use></svg></span><span class="cart-content"><span class="cart-name">' + $('#cart .cart-name').text() + '</span><span class="cart-products-count hidden-sm hidden-xs">' + json['text_items_small'] + ' ' + json['total'] + '</span><span class="cart-products-count hidden-lg hidden-md">' + json['text_items_small'] + '</span></span></span>');

                        $.notify({message: json.success}, {
                            type: "success",
                            offset: 0,
                            placement: {from: "top", align: "center"},
                            animate: {enter: "animated fadeInDown", exit: "animated fadeOutUp"},
                            template: '<div data-notify="container" class="col-xs-12 alert alert-{0}" role="alert">' +
                                '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                                '<span data-notify="icon"></span> ' +
                                '<span data-notify="title">{1}</span> ' +
                                '<span data-notify="message">{2}</span>' +
                                '<div class="progress" data-notify="progressbar">' +
                                '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                '</div>' +
                                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                '</div>'
                        });


                        $('#cart > ul').load('/cart/info ul li');
                    }

                    if (json['warning']) {


                        $.notify({message: json.warning}, {
                            type: "warning",
                            offset: 0,
                            placement: {from: "top", align: "center"},
                            animate: {enter: "animated fadeInDown", exit: "animated fadeOutUp"},
                            template: '<div data-notify="container" class="col-xs-12 alert alert-{0}" role="alert">' +
                                '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                                '<span data-notify="icon"></span> ' +
                                '<span data-notify="title">{1}</span> ' +
                                '<span data-notify="message">{2}</span>' +
                                '<div class="progress" data-notify="progressbar">' +
                                '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                '</div>' +
                                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                '</div>'
                        });
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });

        //--></script>
    <script type="text/javascript"><!--
        $('.date').datetimepicker({
            language: 'en-gb',
            pickTime: false
        });

        $('.datetime').datetimepicker({
            language: 'en-gb',
            pickDate: true,
            pickTime: true
        });

        $('.time').datetimepicker({
            language: 'en-gb',
            pickDate: false
        });

        $('button[id^=\'button-upload\']').on('click', function () {
            var node = this;

            $('#form-upload').remove();

            $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

            $('#form-upload input[name=\'file\']').trigger('click');

            if (typeof timer != 'undefined') {
                clearInterval(timer);
            }

            timer = setInterval(function () {
                if ($('#form-upload input[name=\'file\']').val() != '') {
                    clearInterval(timer);

                    $.ajax({
                        url: 'index.php?route=tool/upload',
                        type: 'post',
                        dataType: 'json',
                        data: new FormData($('#form-upload')[0]),
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function () {
                            $(node).button('loading');
                        },
                        complete: function () {
                            $(node).button('reset');
                        },
                        success: function (json) {
                            $('.text-danger').remove();

                            if (json['error']) {
                                $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                            }

                            if (json['success']) {
                                alert(json['success']);

                                $(node).parent().find('input').val(json['code']);
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        }
                    });
                }
            }, 500);
        });
        //--></script>
    <script type="text/javascript"><!--



        function customclick() {
            $('a[href=\'#tab-review .panel-default\']').trigger('click');
            $('html, body').animate({scrollTop: $(".tab_review").offset().top}, 2000);
            $('.tab_review .collapse').removeClass('in');
            $('#tab-review').addClass('in');
        }

        $(document).ready(function () {
            $('.thumbnails').magnificPopup({
                type: 'image',
                delegate: '.image_popup',
                gallery: {
                    enabled: true
                }
            });
            $('.thumbnails_horizontal').magnificPopup({
                type: 'image',
                delegate: 'a',
                gallery: {
                    enabled: true
                }
            });
            $('.related-carousel').owlCarousel({
                loop: false,
                nav: true,
                dots: false,
                rewind: true,
                rtl: $('html').attr('dir') == 'rtl' ? true : false,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 2,
                    },
                    544: {
                        items: 2
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 2
                    },
                    1200: {
                        items: 4
                    }
                }
            });
            $('.additional-carousel .item').click(function () {
                var a = parseInt($('.additional-carousel .item').index(this)) + 1;
                var selector = ".number_" + a;
                $('html, body').animate({
                    scrollTop: $(selector).offset().top
                }, 500);
            });

            var positions = [];
            $(".item_image").each(function (counter) {
                positions[counter] = $(this).offset().top + $(".number_1").outerHeight();
            });

            $(window).scroll(function (event) {
                var scroll = $(window).scrollTop();
                $('.additional-carousel .item').removeClass('active');    // Do something
                for (var i = 0; i < positions.length; i++) { //console.log();
                    if (scroll < positions[i]) {
                        $('.additional-carousel .item:nth-child(' + (i + 1) + ')').addClass('active');
                        break;
                    }
                }
            });
        });
        //--></script>
    <script>
        $('.image_show').magnificPopup({
            type: 'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
        $('#slider_carousel').owlCarousel({
            loop: false,
            nav: true,
            margin: 15,
            dots: false,
            rewind: true,
            rtl: $('html').attr('dir') == 'rtl' ? true : false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 2
                },
                443: {
                    items: 3
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1199: {
                    items: 4
                }
            }
        });
    </script>
@endsection
