<?php

namespace App\Services\Features\Languages\Create;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Helpers\Classes\Uploads\Upload;
use App\Models\Features\Languages\Language;
use App\Livewire\Features\Languages\Forms\LanguageForm;
use App\Contracts\Abstracts\Services\Create\CreateService;

class LanguageCreateService extends CreateService
{
    public function __construct(protected LanguageForm $form) { }

    /**
     * @throws Exception
     */
    protected function create(): void
    {
        DB::beginTransaction();
        try {
            $thumbnail = null;
            if (!is_null($this->form->thumbnail)) {
                $upload = new Upload($this->form->thumbnail, $this->form->folder);
                $thumbnail = $upload->uploadMedia();
            }

            Language::create([
                'slug' => $this->form->slug,
                'title' => $this->form->title,
                'thumbnail' => $thumbnail
            ]);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
