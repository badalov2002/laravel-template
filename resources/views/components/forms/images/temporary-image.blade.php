<div class="mb-4">
    @if($form->{$model} instanceof Illuminate\Http\UploadedFile)
        @php
            $extension = $form->{$model}->guessExtension();
        @endphp
        @if(in_array($extension, ['jpg', 'jpeg', 'png', 'svg']))
            <img src="{{ $form->{$model}->temporaryUrl() }}" alt="Temporary image" class="{{ $class }}">
        @endif
    @endif
</div>
