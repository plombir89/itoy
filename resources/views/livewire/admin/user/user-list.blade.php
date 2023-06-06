<section class="card">
    <header class="card-header">
        <h2 class="card-title">
            <span class="badge badge-primary label-sm font-weight-normal va-middle mr-3">{{ $users->count() - 1 }}</span>
            <span class="va-middle">{{ __('Users') }}</span>
        </h2>
    </header>
    <div class="card-body">
        <div class="content">
            <ul class="simple-user-list">
                @foreach($users as $user)
                    @if($user->id != 1)
                        <li>
                            <figure class="image rounded">
                                <img src="{{ asset('img/!sample-user.jpg') }}" alt="{{ $user->name }}" class="rounded-circle">
                            </figure>
                            <span class="title">{{ $user->name }}</span>
                            <span class="message truncate">{{ $user->role->name }}</span>
                            @if($user->id != auth()->id())
                                <a class="position-absolute right-10" style="margin-top: -25px;" onclick="Livewire.emit('openmodal', {{ $user->id }});return false;" href="#"><i class="bx bx-trash text-danger pe-auto"></i></a>
                                @if(!$loop->last)
                                    <hr class="dotted short">
                                @endif
                            @endif

                        </li>
                    @endif
                @endforeach
            </ul>
            <hr class="dotted short">
            <div class="text-right">
                <a class="modal-with-form btn btn-sm btn-primary" href="#modalForm">{{ __('Add user') }}</a>
            </div>
        </div>
    </div>

    <div id="modalForm" class="modal-block modal-block-primary mfp-hide">
        <livewire:admin.user.user-create />
    </div>

    <div id="modalAnim" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">{{ __('Are you sure?') }}</h2>
            </header>
            <div class="card-body">
                <div class="modal-wrapper">
                    <div class="modal-icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <div class="modal-text">
                        <p class="mb-0">{{ __('Are you sure that you want to delete this user?') }}</p>
                    </div>
                </div>
            </div>
            <footer class="card-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-primary modal-conf" onClick="window.livewire.emit('remove');">{{ __('Confirm') }}</button>
                        <button class="btn btn-default modal-dismiss">{{ __('Cancel') }}</button>
                    </div>
                </div>
            </footer>
        </section>
    </div>
</section>

@section('livewire_scripts')
    @parent
<script>

    window.addEventListener('userCreated', event => {
        $.magnificPopup.close();
    })
    /*
        Modal Dismiss
    */
    $(document).on('click', '.modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });

    function emit(id){
        Livewire.emit('openmodal', id)
    }

    window.addEventListener('modal_delete_user', event => {
        $.magnificPopup.open({
            items: {
                src: '#modalAnim'
            },
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in',
            modal: true
        });
    })

    /*
           Modal Confirm
       */
    $(document).on('click', '.modal-conf', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });

    </script>
@endsection
