<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class HomesController extends Controller
{
    public function home()
    {
    	return view('frontend.home.home');
    }

    public function portfolio()
    {
    	return view('frontend.portfolio.portfolio');
    }

    public function blog()
    {
    	return view('frontend.blog.blog');
    }

    public function blogdetail()
    {
        return view('frontend.blog.blog-details');
    }

    public function website()
    {
        return view('frontend.website.website');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function logo()
    {
        return view('frontend.website.logo');
    }

    public function seo()
    {
        return view('frontend.website.seo');
    }

     public function smm()
    {
        return view('frontend.website.smm');
    }

    public function ppc()
    {
        return view('frontend.website.ppc');
    }

    public function video()
    {
        return view('frontend.website.video');
    }

    public function single()
    {
        return view('frontend.website.single');
    }

    public function message(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required',
            // 'phone'=>'required',
            'description'=>'required',
        ]);
        $message = new Message([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'description'=>$request->description,
        ]);
        if ($message->save()) {
            return redirect('/')->with('Success','Xabar yuborildi');
        }
    }
}
