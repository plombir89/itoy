@extends('admin.layouts.admin')

@section('layout', __('Settings'))

@section('breadcrumbs')
    <li><span>{{ __('Settings') }}</span></li>
    <li><span>{{ __('Menu') }}</span></li>
    <li><span>{{ __('Create') }}</span></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form id="form" action="{{ route('admin.settings.menu.store') }}" method="post" class="form-horizontal">
                @csrf
                <section class="card">
                    <header class="card-header">
                        <h2 class="card-title">{{ __('Create') }}</h2>
                    </header>
                    <div class="card-body">
                        @foreach($adminlanguages as $lang)
                            <div class="row mb-3">
                                <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Title') }} <span class="required">*</span></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text">
                                                <img class="icon-16" src="{{ asset($lang->icon) }}" alt="">
                                            </span>
                                        </span>
                                        <input type="text" name="menu[{{ $lang->id }}][title]" value="{{ old('menu.'.$lang->id.'.title') }}" class="form-control @error('menu.'.$lang->id.'.title') error @enderror"/>

                                    </div>
                                    @error('menu.'.$lang->id.'.title')
                                        <label id="icon-error" class="error" for="">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        <hr>

                        @foreach($adminlanguages as $lang)
                            <div class="row mb-3">
                                <label class="col-sm-2 control-label text-sm-right pt-2">{{ __('Link') }} <span class="required">*</span></label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text">
                                                <img class="icon-16" src="{{ asset($lang->icon) }}" alt="">
                                            </span>
                                        </span>
                                        <input type="text" value="{{ old('menu.'.$lang->id.'.link') }}" name="menu[{{ $lang->id }}][link]" class="form-control @error('menu.'.$lang->id.'.link') error @enderror"/>
                                    </div>
                                    @error('menu.'.$lang->id.'.link')
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
                                    <input id="for-published" type="checkbox" {{ old('published') ? 'checked' : '' }} value="1" name="published"/>
                                    <label for="for-published">{{ __('Published') }}</label>
                                </div>
                                <label class="error" for="published"></label>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <div class="row justify-content-end">
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary" type="submit">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </footer>
                </section>
            </form>
        </div>
    </div>
@endsection
