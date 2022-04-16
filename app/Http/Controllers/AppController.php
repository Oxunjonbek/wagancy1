<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use URL;  

class AppController extends Controller
{
    public function setlocale($locale='ru')
    {
    	if (!in_array($locale, ['ru','en'])) {
    		$locale = 'ru';
    	}
    	Session::put('locale', $locale);
    	return redirect(url(URL::previous()));
    }
}
