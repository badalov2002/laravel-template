<?php

namespace App\View\Components\Forms\Buttons\Modal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Submit extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected string $target,
        protected string $class,
        protected string $text,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.buttons.modal.submit', [
            'target' => $this->target,
            'class' => $this->class,
            'text' => $this->text,
        ]);
    }
}
