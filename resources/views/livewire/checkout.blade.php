<div>
    @if (session()->has('confirmed'))
        <div class="alert alert-success">
            {{ session('confirmed') }}
        </div>
    @else
    <div class="panel-body row">
        <div class="col-sm-6">
            <fieldset id="account">
                <legend>Your Personal Details</legend>
                <div class="form-group required @error('name') has-error @enderror">
                    <label class="control-label" for="input-payment-firstname">First Name, Last Name</label>
                    <input type="text" wire:model.lazy="name" placeholder="First Name, Last Name" id="input-payment-firstname" class="form-control" />
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group required @error('email') has-error @enderror">
                    <label class="control-label" for="input-payment-email">E-Mail</label>
                    <input type="text" wire:model.lazy="email" placeholder="E-Mail" id="input-payment-email" class="form-control" />
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group required @error('phone') has-error @enderror">
                    <label class="control-label" for="input-payment-telephone">Telephone</label>
                    <input type="text" wire:model.lazy="phone" placeholder="Telephone" id="input-payment-telephone" class="form-control" />
                    @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </fieldset>
        </div>
        <div class="col-sm-6">
            <fieldset id="address">
                <legend>Your Address</legend>
                <div class="form-group required @error('city') has-error @enderror">
                    <label class="control-label" for="input-payment-city">City</label>
                    <input type="text" wire:model.lazy="city" placeholder="City" id="input-payment-city" class="form-control" />
                    @error('city')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group required @error('address') has-error @enderror">
                    <label class="control-label" for="input-payment-address-1">Address</label>
                    <input type="text" wire:model.lazy="address" placeholder="Address" id="input-payment-address-1" class="form-control" />
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group required @error('postal_code') has-error @enderror">
                    <label class="control-label" for="input-payment-postcode">Post Code</label>
                    <input type="text" wire:model.lazy="postal_code" placeholder="Post Code" id="input-payment-postcode" class="form-control" />
                    @error('postal_code')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </fieldset>
        </div>

    </div>
    <div class="buttons">
        <div class="pull-right">
            <input type="button" value="Confirm Order" class="btn btn-primary" wire:click="confirm">
        </div>
    </div>
    @endif
</div>
