<?php

namespace App\Http\Controllers\Dashboard\Features\Languages;

use App\Http\Controllers\Controller;
use App\Models\Features\Languages\Language;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LanguageController extends Controller
{
    public function index(): View
    {
        return view('dashboard.features.languages.index');
    }
}
