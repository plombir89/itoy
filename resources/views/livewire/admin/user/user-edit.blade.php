<div class="tabs">
    <ul class="nav nav-tabs tabs-primary">
        <li class="nav-item active">
            <a class="nav-link" href="#edit" data-toggle="tab">Personal Information</a>
        </li>
    </ul>
    <div class="tab-content">
        <div id="edit" class="tab-pane active">
            @if(session()->has('updated'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('updated') }}
                </div>
            @endif
            <form class="p-3">
                <div class="form-row mb-4">
                    <div class="form-group col">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('user.name') error @enderror" id="name" wire:model="user.name">
                        @error('user.name')
                            <label class="error text-color-danger" for="">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-row mb-4">
                    <div class="form-group col">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('user.email') error @enderror" id="email" wire:model="user.email">
                        @error('user.email')
                        <label class="error text-color-danger" for="">{{ $message }}</label>
                        @enderror
                    </div>
                </div>


                <hr class="dotted tall">

                <h4 class="mb-3">{{ __('Change Password') }}</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">{{ __('New Password') }}</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" wire:model="password">
                    </div>
                    <div class="form-group col-md-6 border-top-0 pt-0">
                        <label for="inputPassword5">{{ __('Confirm new password') }}</label>
                        <input type="password" class="form-control" id="inputPassword5" placeholder="Password" wire:model="conf_password">
                    </div>
                    @error('password')
                        <label class="error text-color-danger" for="">{{ $message }}</label>
                    @enderror
                </div>

                <div class="form-row">
                    <div class="col-md-12 text-right mt-3">
                        <button class="btn btn-primary" wire:click.prevent="save"><i class='fa fa-spinner fa-spin mr-2' wire:loading wire:target="save"></i>{{ __('Save') }}</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
