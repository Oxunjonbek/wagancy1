<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id','desc')->paginate(2);
        return view('backend.blog.index')->with('blogs',$blogs);
        // return view('backend.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validate = $request->validate([
            'title'=>'required',
            'lang'=>'required',
            'web_post'=>'required',
            'web_img'=>'required|file|max:5000',
        ]);
        // dd($request->title_en);die();
                if ($request->hasFile('web_img')) {
            $file = $request->file('web_img');
            $name = date('H-i-s').$file->getClientOriginalName();
            // $names = explode('.', $name);
            $file->move(public_path().'/frontend/images/blog/',$name);
            
        }
        $blogs = new Blog([
            'web_img'=>$name,
            'title'=>$request->title,
            'lang'=>$request->lang,
            'web_post'=>$request->web_post,
        ]);
        if ($blogs->save()) {
            return redirect('/ablog')->with('Success','Yangi blog qo`shildi!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog  = Blog::where('id',$id)->first();
        return view('backend.blog.blog-show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('backend.blog.blog-edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'title'=>'required',
            'lang'=>'required',
            'web_post'=>'required',
            // 'web_img'=>'required|file|max:5000',
        ]);
        $blog = Blog::find($id);
        if ($request->hasFile('web_img')) {
            $file = $request->file('web_img');
            $name = date('H-i-s').$file->getClientOriginalName();
            // $names = explode('.', $name);
            $file->move(public_path().'/frontend/images/blog/',$name);
            
            $blog->web_img = $name;
        }
        

        $blog->title = $request->get('title');
        $blog->lang = $request->get('lang');
        $blog->web_post = $request->get('web_post');
        $blog->save();
        return redirect('/ablog')->with('success','Blog  o`zgartirildi');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $blog = Blog::find($id);

        $file = 'frontend/images/blog/'.$blog->web_img;
        if (file_exists($file)) {
            @unlink($file);
        }

        $blog->delete();
        return redirect('/ablog')->with('success', 'blog o`chirildi!');
    }
}
