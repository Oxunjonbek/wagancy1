<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class AdminController extends Controller
{
    public function admin()
    {	
    	$messages = Message::all();
    	return view('backend.index')->with('messages',$messages);
    }
}
