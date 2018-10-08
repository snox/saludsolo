<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{


    public function changeLanguage(Request $request) {

        if ($request->ajax()) {
            $request->session()->put('locale', $request->getLocale());
            $request->flash('alert-success', 'Language changed successfull.');
        }
    }
}
