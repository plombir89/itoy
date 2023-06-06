@extends('admin.layouts.admin')

@section('layout', __('Pages'))

@section('breadcrumbs')
    <li><span>{{ __('Pages') }}</span></li>
    <li><span>{{ __('About') }}</span></li>
@endsection

@section('content')
    <livewire:admin.pages.about :about="$about"/>
@endsection

@section('specific_page_vendor')
    <!-- Specific Page Vendor -->
    <script src="{{ asset('vendor/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
    <script src="{{ asset('vendor/select2/js/select2.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-multiselect/js/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset('vendor/jquery-maskedinput/jquery.maskedinput.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
    <script src="{{ asset('vendor/fuelux/js/spinner.js') }}"></script>
    <script src="{{ asset('vendor/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-markdown/js/markdown.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-markdown/js/to-markdown.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-markdown/js/bootstrap-markdown.js') }}"></script>
    <script src="{{ asset('vendor/codemirror/lib/codemirror.js') }}"></script>
    <script src="{{ asset('vendor/codemirror/addon/selection/active-line.js') }}"></script>
    <script src="{{ asset('vendor/codemirror/addon/edit/matchbrackets.js') }}"></script>
    <script src="{{ asset('vendor/codemirror/mode/javascript/javascript.js') }}"></script>
    <script src="{{ asset('vendor/codemirror/mode/xml/xml.js') }}"></script>
    <script src="{{ asset('vendor/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
    <script src="{{ asset('vendor/codemirror/mode/css/css.js') }}"></script>
    <script src="{{ asset('vendor/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('vendor/ios7-switch/ios7-switch.js') }}"></script>
    <script src="{{ asset('vendor/isotope/isotope.js') }}"></script>
@endsection

@section('page_scripts')
    <script src="{{ asset('js/examples/examples.advanced.form.js') }}"></script>
    <script src="{{ asset('js/examples/examples.mediagallery.js') }}"></script>

    @if(session()->has('updated'))
        <script>

            new PNotify({
                title: '{{ __('About') }}',
                text: '{{ session('updated') }}',
                type: 'success',
                hide: true,
                buttons: {
                    sticker: false
                }
            });
        </script>
    @endif

@endsection

@section('specific_page_css')
    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/dropzone/basic.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/dropzone/dropzone.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote-bs4.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/codemirror/lib/codemirror.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/codemirror/theme/monokai.css') }}" />

@endsection
