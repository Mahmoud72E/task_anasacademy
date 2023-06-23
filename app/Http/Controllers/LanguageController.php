<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $request->validate([
            'language' => 'required|in:en,ar', // Add more language options if needed
        ]);

        $language = $request->input('language');

        session(['locale' => $language]);
        //
        app()->setLocale($language);
        // return app()->getLocale();
        return view('dashboard');
    }
}

