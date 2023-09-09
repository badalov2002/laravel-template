<?php

namespace App\Livewire\Features\Languages;

use App\Models\Features\Languages\Language;
use Illuminate\View\View;
use Livewire\Component;

class Edit extends Component
{
    public Language $item;

    public function mount($item): void
    {
        $this->item = $item;
    }

    public function render(): View
    {
        return view('livewire.features.languages.edit');
    }
}
