@extends('admin.layouts.admin')

@section('layout', __('Settings'))

@section('breadcrumbs')
    <li><span>{{ __('Settings') }}</span></li>
    <li><span>{{ __('Menu') }}</span></li>
    <li><span>{{ __('Edit') }}</span></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form id="form" action="{{ route('admin.settings.menu.update', $menu) }}" method="post" class="form-horizontal">
                @csrf
                @method('PUT')
                <section class="card">
                    <header class="card-header">
                        <h2 class="card-title">{{ __('Edit') }}</h2>
                    </header>
                    <div class="card-body">

                        @foreach($menu->items as $index => $item)
                            <div class="row mb-3">
                                <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Title') }} <span class="required">*</span></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text">
                                                <img class="icon-16" src="{{ asset($item->language->icon) }}" alt="">
                                            </span>
                                        </span>
                                        <input type="text" name="menu[{{ $item->language->id }}][title]" value="{{ old('menu.'.$item->language->id.'.title', $item->title) }}" class="form-control @error('menu.'.$item->language->id.'.title') error @enderror"/>
                                    </div>
                                    @error('menu.'.$item->language->id.'.title')
                                        <label id="icon-error" class="error" for="">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        <hr>

                        @foreach($menu->items as $index => $item)
                            <div class="row mb-3">
                                <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Link') }} <span class="required">*</span></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text">
                                                <img class="icon-16" src="{{ asset($item->language->icon) }}" alt="">
                                            </span>
                                        </span>
                                        <input type="text" name="menu[{{ $item->language->id }}][link]" value="{{ old('menu.'.$item->language->id.'.link', $item->link) }}" class="form-control @error('menu.'.$item->language->id.'.link') error @enderror"/>
                                    </div>
                                    @error('menu.'.$item->language->id.'.link')
                                        <label id="icon-error" class="error" for="">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        <hr>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label text-sm-right pt-2"></label>
                            <div class="col-sm-10">
                                <div class="checkbox-custom chekbox-primary">
                                    <input id="for-published" value="1" @checked(old('published',$menu->published)) type="checkbox" name="published"/>
                                    <label for="for-published">{{ __('Published') }}</label>
                                </div>
                                <label class="error" for="published"></label>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <div class="row justify-content-end">
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </footer>
                </section>
            </form>
        </div>

    </div>
@endsection

@section('page_scripts')
    @parent

    @if (session('status'))
        <script>
            new PNotify({
                title: '{{ __('Menu') }}',
                text: '{{ session('status') }}',
                type: 'success',
                hide: true,
                buttons: {
                    sticker: false
                }
            });
        </script>
    @endif

@endsection
