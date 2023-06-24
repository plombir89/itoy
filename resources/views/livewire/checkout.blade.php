<div>
    @if (session()->has('confirmed'))
            <h1>{{ __('Your order has been placed!') }}</h1>
            <p>You can view your order history by going to the <a href="{{ route('account.index') }}">my account</a> page and by clicking on <a href="{{ route('orders.index') }}">history</a>.</p>
            <p>{{ __('Thanks for shopping with us online!') }}</p>
    @else

    <div class="panel-body row">
        @auth()
        <div class="col-sm-12">
            <div class="form-group">
                <label class="control-label" for="input-delivery">{{ __('Delivery address') }}</label>
                <select name="delivery" id="input-delivery" class="form-control" wire:model="delivery">
                    <option value=""> --- Please Select --- </option>
                    @foreach($deliveries as $deliv)
                        <option value="{{ $deliv->id}}">{{ $deliv->address }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @endauth

        @if($delivery == '')
        <div id="new-address">
            <div class="col-sm-6">
                <fieldset id="account">
                    <legend>Your Personal Details</legend>
                    <div class="form-group required @error('name') has-error @enderror">
                        <label class="control-label" for="input-payment-firstname">{{ __('First Name, Last Name') }}</label>
                        <input type="text" wire:model.lazy="name" placeholder="{{ __('First Name, Last Name') }}" id="input-payment-firstname" class="form-control" />
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group required @error('email') has-error @enderror">
                        <label class="control-label" for="input-payment-email">{{ __('E-Mail') }}</label>
                        <input type="text" wire:model.lazy="email" placeholder="{{ __('E-Mail') }}" id="input-payment-email" class="form-control" />
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group required @error('phone') has-error @enderror">
                        <label class="control-label" for="input-phone">{{ __('Phone') }}</label>
                        <input type="text" wire:model.lazy="phone" placeholder="{{ __('Phone') }}" id="input-phone" class="form-control" />
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
                        <label class="control-label" for="input-city">{{ __('City') }}</label>
                        <input type="text" wire:model.lazy="city" placeholder="{{ __('City') }}" id="input-city" class="form-control" />
                        @error('city')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group required @error('address') has-error @enderror">
                        <label class="control-label" for="input-payment-address-1">{{ __('Address') }}</label>
                        <input type="text" wire:model.lazy="address" placeholder="{{ __('Address') }}" id="input-payment-address-1" class="form-control" />
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group required @error('postal_code') has-error @enderror">
                        <label class="control-label" for="input-payment-postcode">{{ __('Post Code') }}</label>
                        <input type="text" wire:model.lazy="postal_code" placeholder="{{ __('Post Code') }}" id="input-payment-postcode" class="form-control" />
                        @error('postal_code')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </fieldset>
            </div>
        </div>
            @endif

    </div>
    <div class="buttons">
        <div class="pull-right">
            <input type="button" value="Confirm Order" class="btn btn-primary" wire:click="confirm">
        </div>
    </div>

    @endif
</div>
