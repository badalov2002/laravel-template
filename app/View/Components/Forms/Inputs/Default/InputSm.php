<?php

namespace App\View\Components\Forms\Inputs\Default;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputSm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected string $type,
        protected string $model,
        protected bool $wire = true,
        protected bool $error = true,
        protected bool $required = true,
        protected bool $disabled = false,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.inputs.default.input-sm', [
            'type' => $this->type,
            'model' => $this->model,
            'wire' => $this->wire,
            'error' => $this->error,
            'required' => $this->required,
            'disabled' => $this->disabled,
        ]);
    }
}
