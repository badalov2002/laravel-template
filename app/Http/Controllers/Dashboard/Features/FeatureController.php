<?php

namespace App\Http\Controllers\Dashboard\Features;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FeatureController extends Controller
{
    public function index(): View
    {
        return view('dashboard.features.index');
    }
}
