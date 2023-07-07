<form action="#" method="post" class="form-horizontal">
    @if (session()->has('messageSent'))
        <div class="alert alert-success">
            {{ __('Message sent') }}
        </div>
    @endif
    <fieldset>
        <legend>{{ __('Contact Form') }}</legend>
        <div class="form-group required @error('name') has-error @enderror">
            <label class="col-sm-2 control-label" for="input-name">{{ __('Name') }}</label>
            <div class="col-sm-10">
                <input type="text" wire:model="name" id="input-name" class="form-control">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group @error('email') has-error @enderror">
            <label class="col-sm-2 control-label" for="input-email">{{ __('E-Mail') }}</label>
            <div class="col-sm-10">
                <input type="text" wire:model="email" id="input-email" class="form-control">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group required @error('phone') has-error @enderror">
            <label class="col-sm-2 control-label" for="input-phone">{{ __('Phone') }}</label>
            <div class="col-sm-10">
                <input type="text" wire:model="phone" id="input-phone" class="form-control">
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group required @error('message') has-error @enderror">
            <label class="col-sm-2 control-label" for="input-enquiry">{{ __('Message') }}</label>
            <div class="col-sm-10">
                <textarea wire:model="message" rows="5" id="input-enquiry" class="form-control"></textarea>
                @error('message')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

    </fieldset>
    <div class="buttons">
        <div class="pull-right">
            <button class="btn btn-primary" wire:click.prevent="send" wire:loading.attr="disabled" ><i class='fa fa-spinner fa-spin mr-2' wire:loading wire:target="send"></i>{{ __('Submit') }}</button>
        </div>
    </div>
</form>
