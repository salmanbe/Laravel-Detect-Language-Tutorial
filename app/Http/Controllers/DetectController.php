<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DetectLanguage\DetectLanguage;

class DetectController extends Controller
{
    public function index()
	{
        return view('contact-form');
	}

	public function send(Request $request)
	{
		// Languages that our website allows
		$languages  = [
			'en' => 'English',
			'nl' => 'Dutch',
			'fr' => 'French'
		];

		DetectLanguage::setApiKey(config('app.detect_language_api_key'));

		// Detected language of message
		$language = DetectLanguage::simpleDetect($request->message);

		if(!array_key_exists($language, $languages)){

			return back()->with('error', 'Language must be one of following: ' . implode(', ' , $languages));
		}

		return back()->with('success', 'Message sent');
	}
}