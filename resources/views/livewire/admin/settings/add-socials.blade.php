<div class="row form-group">
    <div class="row col-lg-12">
        <h3>Add new social link</h3>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label class="col-form-label" for="formGroupExampleInput">Social name</label>
            <input type="text" wire:model="social.title" class="form-control @error('social.title') error @enderror" id="formGroupExampleInput" placeholder="Ex: Facebook">
            @error('social.title')
            <label id="title-error" class="error" for="">{{ $message }}</label>
            @enderror
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label class="col-form-label" for="formGroupExampleInput">Social icon</label>
            <input type="text" wire:model="social.icon" class="form-control @error('social.icon') error @enderror" id="formGroupExampleInput" placeholder="Ex: bx bx-trash-alt">
            @error('social.icon')
            <label id="icon-error" class="error" for="">{{ $message }}</label>
            @enderror
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="form-group">
            <label class="col-form-label" for="formGroupExampleInput">Social link</label>
            <input type="text" wire:model="social.link" class="form-control @error('social.link') error @enderror" id="formGroupExampleInput">
            @error('social.link')
            <label id="link-error" class="error" for="">{{ $message }}</label>
            @enderror
        </div>
    </div>
    <div class="col-lg-12 text-center">
        <div class="form-group">
            <button class="btn btn-primary mt-md-5 mt-sm-3 mt-3" wire:click.prevent="add" >Add <i class='bx bx-plus' ></i></button>
        </div>
    </div>
</div>
