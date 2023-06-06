<div>
<h5>{{ __('Get a pricing quote for a residential or business solar panel installation') }}</h5>
<!-- RD Mailform-->
<form class="text-center offset-top-30" >
    <div class="form-wrap">
        <label class="form-label" for="contact-name1"></label>
        <input class="form-input" id="contact-name1" wire:model="name" placeholder="{{ __('Your Name') }}" >
        @error('name')
            <span class="form-validation">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-wrap">
        <label class="form-label" for="contact-email1"></label>
        <input class="form-input" id="contact-email1"  wire:model="email" placeholder="{{ __('Email') }}" >
        @error('email')
        <span class="form-validation">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-wrap">
        <label class="form-label" for="contact-phone1"></label>
        <input class="form-input" id="contact-phone1" wire:model="phone" placeholder="{{ __('Phone') }}" >
        @error('phone')
        <span class="form-validation">{{ $message }}</span>
        @enderror
    </div>

    @if(session()->has('messageSent'))
        <div class="messages">
            {{ session('messageSent') }}
        </div>
    @endif

    <div wire:loading wire:target="send" class="offset-top-30">
        <img src="{{ asset('assets/images/preloader.gif') }}" alt="">
    </div>
    <button class="btn btn-primary offset-top-30" type="submit" wire:click.prevent="send" wire:loading.class="hidden">{{ __('GET A QUOTE') }}</button>
</form>
</div>
