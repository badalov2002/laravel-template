<?php

namespace App\Http\Controllers\Dashboard\Features\Languages;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class ChangeLanguageController extends Controller
{
    public function change($language): RedirectResponse
    {
        App::setLocale($language);
        Session::put('locale', $language);
        return redirect()->back();
    }
}
