<?php

namespace App\Repositories\Features\Languages;

use App\Contracts\Interfaces\Repositories\RepositoryInterface;
use App\Models\Features\Languages\Language;
use Illuminate\Database\Eloquent\Collection;

class LanguageRepository implements RepositoryInterface
{
    public function getAll(): Collection|array
    {
        return Language::select('slug', 'title')->get();
    }

    public function getOne(): Collection|array
    {
        return Language::first();
    }

    public function getCurrent()
    {
        return Language::where('slug', app()->getLocale())->pluck('title')->first();
    }
}
