<div class="mb-4"
    @if($type === 'file')
     x-data="{ isUploading: false, progress: 0 }"
     x-on:livewire-upload-start="isUploading = true"
     x-on:livewire-upload-finish="isUploading = false, progress = 0"
     x-on:livewire-upload-error="isUploading = false"
     x-on:livewire-upload-progress="progress = $event.detail.progress"
    @endif>
    <label class="form-label" for="{{ $model }}">{{ $model }} @if($required) <span class="text-danger">*</span> @endif</label>
    <input type="{{ $type }}"
           @if($wire)
           wire:model.live="form.{{ $model }}"
           @endif
           class="form-control form-control-sm @if($error) @error('form.' . $model) is-invalid @enderror @endif"
           id="{{ $model }}"
           name="{{ $model }}"
           placeholder=""
           @if($required)
           required
           @endif
           @if($disabled)
           disabled
           @endif>
    @if($error)
        @error('form.' . $model)<span class="invalid-feedback" role="alert">{{ $message }}</span>@enderror
    @endif
    @if($type === 'file')
    <div x-show.transition="isUploading" class="progress push mt-2" style="height: 10px;">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" x-bind:style="`width: ${progress}%;`" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    @endif
</div>
