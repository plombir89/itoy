<section class="card">
    <header class="card-header">
        <h2 class="card-title">Registration Form</h2>
    </header>
    <div class="card-body">
        <form class="p-3">
            <div class="form-row mb-4">
                <div class="form-group col">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') error @enderror" id="name" wire:model="name">
                    @error('name')
                    <label class="error text-color-danger" for="">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            <div class="form-row mb-4">
                <div class="form-group col">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') error @enderror" id="email" wire:model="email">
                    @error('email')
                    <label class="error text-color-danger" for="">{{ $message }}</label>
                    @enderror
                </div>
            </div>

            <div class="form-row mb-4">
                <div class="form-group col">
                    <label for="email">Role</label>
                    <select wire:model="role" class="form-control">
                        @foreach($roles as $role)
                            <option value="{{ $role['id'] }}" >{{ $role['name'] }}</option>
                        @endforeach
                    </select>
                    @error('role')
                    <label class="error text-color-danger" for="">{{ $message }}</label>
                    @enderror
                </div>
            </div>

            <hr class="dotted tall">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">{{ __('Password') }}</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" wire:model="password">
                </div>
                <div class="form-group col-md-6 border-top-0 pt-0">
                    <label for="inputPassword5">{{ __('Confirm password') }}</label>
                    <input type="password" class="form-control" id="inputPassword5" placeholder="Password" wire:model="conf_password">
                </div>
                @error('password')
                <label class="error text-color-danger" for="">{{ $message }}</label>
                @enderror
            </div>
        </form>
    </div>
    <footer class="card-footer">
        <div class="row">
            <div class="col-md-12 text-right">
                <button class="btn btn-primary" wire:click.prevent="saveUser"><i class='fa fa-spinner fa-spin mr-2 text-white' wire:loading wire:target="saveUser"></i>{{ __('Save') }}</button>
                <button class="btn btn-default modal-dismiss">{{ __('Cancel') }}</button>
            </div>
        </div>
    </footer>
</section>
