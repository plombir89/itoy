<form action="/contact" method="post" class="form-horizontal">
    <fieldset>
        <legend>Contact Form</legend>
        <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-name">{{ __('Your Name') }}</label>
            <div class="col-sm-10">
                <input type="text" wire:model="name" id="input-name" class="form-control">
                @error('name')
                    <span class="form-validation">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="input-email">{{ __('E-Mail Address') }}</label>
            <div class="col-sm-10">
                <input type="text" wire:model="email" id="input-email" class="form-control">
                @error('email')
                    <span class="form-validation">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-phone">{{ __('Phone') }}</label>
            <div class="col-sm-10">
                <input type="text" wire:model="phone" id="input-phone" class="form-control">
                @error('phone')
                    <span class="form-validation">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-enquiry">{{ __('Message') }}</label>
            <div class="col-sm-10">
                <textarea wire:model="message" rows="5" id="input-enquiry" class="form-control"></textarea>
                @error('message')
                    <span class="form-validation">{{ $message }}</span>
                @enderror
            </div>
        </div>

    </fieldset>
    <div class="buttons">
        <div class="pull-right">
            <input class="btn btn-primary" type="submit" wire:click.prevent="send" wire:loading.class="hidden" value="{{ __('Submit') }}">
        </div>
    </div>
</form>
