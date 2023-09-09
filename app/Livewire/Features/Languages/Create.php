<?php

namespace App\Livewire\Features\Languages;

use Exception;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithFileUploads;
use App\Traits\Livewire\General\DataTrait;
use App\Traits\Livewire\General\DispatchTrait;
use Illuminate\Validation\ValidationException;
use App\Livewire\Features\Languages\Forms\LanguageForm;
use App\Services\Features\Languages\Create\LanguageCreateService;

class Create extends Component
{
    use DataTrait, DispatchTrait, WithFileUploads;

    public LanguageForm $form;

    /**
     * @throws Exception
     */
    public function create(): void
    {
        try {
            $this->validate();

            $service = new LanguageCreateService($this->form);
            $service->callMethod();

            $this->dispatchActionSuccess('fa fa-check text-success', 'creating-successful', $this->form->title);
            $this->dispatch('refresh');
        } catch (ValidationException $e) {
            $this->dispatchValidateError($e);
        }
    }

    public function render(): View
    {
        return view('livewire.features.languages.create');
    }
}
