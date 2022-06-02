<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function setLocale($locale) {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
