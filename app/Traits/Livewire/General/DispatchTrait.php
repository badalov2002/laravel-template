<?php

namespace App\Traits\Livewire\General;

use Illuminate\Validation\ValidationException;

trait DispatchTrait
{
    public function dispatchActionSuccess($icon, $action, $description): void
    {
        $this->dispatch('dispatch-toast', [
            'icon' => $icon,
            'title' => $action,
            'description' => $description
        ]);
    }

    public function dispatchValidateError(ValidationException $e): void
    {
        $content = '';
        foreach ($e->validator->errors()->all() as $error) {
            $content .= $error . "<br>";
        }

        $this->dispatch('dispatch-toast', [
            'icon' => 'fa fa-circle-exclamation text-danger',
            'title' => 'Validate error',
            'description' => $content
        ]);
    }
}
