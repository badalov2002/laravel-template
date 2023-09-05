<?php

namespace App\View\Components\Helpers;

use App\Repository\Features\Languages\LanguageRepository;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Languages extends Component
{
    public LanguageRepository $repository;

    /**
     * Create a new component instance.
     */
    public function __construct(LanguageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.helpers.languages', [
            'current_language' => $this->repository->getCurrentLanguage(),
            'languages' => $this->repository->getDropdownLanguages()
        ]);
    }
}
