<div>
    <x-forms.buttons.modal.open :data="$button" :target="$target" text="create" :model="$model" />

    <x-forms.modals.modal :data="$modal" :target="$target" action="create" :model="$model">
        {{ $slot }}
    </x-forms.modals.modal>
</div>
