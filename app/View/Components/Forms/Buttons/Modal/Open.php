<?php

namespace App\View\Components\Forms\Buttons\Modal;

use App\Contracts\Interfaces\Components\Forms\Buttons\Modal\OpenInterface;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Open extends Component implements OpenInterface
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected array $data,
        protected string $target,
        protected ?string $text = null,
        protected ?string $icon = null,
        protected ?string $model = null,
    ) { }

    public function getColor()
    {
        return $this->data['color'] ?? 'bg-dark text-white';
    }

    public function getMargin()
    {
        return $this->data['margin'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.buttons.modal.open', [
            'target' => $this->target,
            'color' => $this->getColor(),
            'margin' => $this->getMargin(),
            'text' => $this->text,
            'icon' => $this->icon,
        ]);
    }
}
