<?php

namespace App\View\Components\Forms\Inputs\Floating;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        private readonly string $type,
        private readonly string $model,
        private readonly string $text,
        private readonly string|null $placeholder = null,
        private readonly string|null $value = null,
        private readonly bool $autocomplete = false,
        private readonly bool $wire = false,
        private readonly bool $error = false,
        private readonly bool $required = false,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.inputs.floating.input', [
            'type' => $this->type,
            'model' => $this->model,
            'text' => $this->text,
            'placeholder' => $this->placeholder,
            'value' => $this->value,
            'autocomplete' => $this->autocomplete,
            'wire' => $this->wire,
            'error' => $this->error,
            'required' => $this->required,
        ]);
    }
}
