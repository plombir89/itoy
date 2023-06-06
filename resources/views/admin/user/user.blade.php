@extends('admin.layouts.admin')

@section('breadcrumbs')
    <li><span>{{ __('Dashboard') }}</span></li>
    <li><span>{{ __('My Profile') }}</span></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">

            <section class="card">
                <div class="card-body">
                    <div class="thumb-info mb-3">
                        <img src="{{ asset('img/!logged-user.jpg') }}" class="rounded img-fluid" alt="{{ auth()->user()->name }}">
                        <div class="thumb-info-title">
                            <span class="thumb-info-inner">{{ auth()->user()->name }}</span>
                            <span class="thumb-info-type">{{ auth()->user()->role->name }}</span>
                        </div>
                    </div>


                </div>
            </section>
            @if(auth()->user()->role['id'] === \App\Models\Role::SUPER_ADMIN)
            <livewire:admin.user.user-list />
            @endif
        </div>
        <div class="col-lg-8 col-xl-6">

            <livewire:admin.user.user-edit />

        </div>


    </div>
@endsection

@section('specific_page_vendor')
    <!-- Specific Page Vendor -->
    <script src="{{ asset('vendor/autosize/autosize.js') }}"></script>
@endsection

@section('page_scripts')
    <script src="{{ asset('js/examples/examples.modals.js') }}"></script>
@endsection

