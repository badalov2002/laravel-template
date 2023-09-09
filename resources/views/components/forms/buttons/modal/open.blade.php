<button type="button"
        class="btn btn-sm {{ $color }} {{ $margin }}"
        data-bs-toggle="modal" data-bs-target="#{{ $target }}">
    {{ !is_null($text) ? $text : '<i class="' . $icon .'"></i>' }}
</button>
