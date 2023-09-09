<button type="submit"
        wire:target="{{ $target }}"
        wire:loading.attr="disabled"
        class="btn btn-sm {{ $class }}"
        data-bs-dismiss="modal">
    {{ $text }}
</button>
