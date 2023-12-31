<?php

namespace App\View\Components\Actions\Modals;

use App\Contracts\Interfaces\Components\Actions\Modals\ActionsInterface;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Create extends Component implements ActionsInterface
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected array $data,
        protected string $model,
    ) { }

    public function getModalTarget()
    {
        return $this->data['create']['target'];
    }

    public function getModalProperties()
    {
        return $this->data['create']['modal'];
    }

    public function getButtonProperties()
    {
        return $this->data['create']['style'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.actions.modals.create', [
            'target' => $this->getModalTarget(),
            'button' => $this->getButtonProperties(),
            'modal' => $this->getModalProperties(),
            'model' => $this->model,
        ]);
    }
}
