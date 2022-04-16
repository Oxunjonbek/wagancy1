<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts = Portfolio::orderBy('id','desc')->paginate(1);
        return view('backend.portfolio.index')->with('posts',$posts);;
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
            'title_1'=>'required',
            'name'=>'required',
            'lang'=>'required',
            'service'=>'required',
            'sphere'=>'required',
            'technology'=>'required',
            'objective'=>'required',
            'description'=>'required',
            'category'=>'required',
            'img1'=>'required|file|max:5000',
            'img2'=>'required|file|max:5000',
        ]);
        if ($request->hasFile('img1')) {
            $file = $request->file('img1');
            $image = time().$file->getClientOriginalName();
            // $names = explode('.', $name);
            $file->move(public_path().'/frontend/images/portfoli/',$image);
            
        }
        if ($request->hasFile('img2')) {
            $file2 = $request->file('img2');
            $image2 = date('H-i-s').$file->getClientOriginalName();
            // $names = explode('.', $name);
            $file2->move(public_path().'/frontend/images/portfoli/',$image2);
            
        }
        $posts = new Portfolio([
            'img1'=>$image,
            'img2'=>$image2,
            'title'=>$request->title,
            'title_1'=>$request->title_1,
            'lang'=>$request->lang,
            'name'=>$request->name,
            'service'=>$request->service,
            'sphere'=>$request->sphere,
            'technology'=>$request->technology,
            'objective'=>$request->objective,
            'description'=>$request->description,
            'category'=>$request->category,
        ]);
        if ($posts->save()) {
            return redirect('/aportfolio')->with('Success','Yangi portfolio qo`shildi!');
        }
        else{
            return redirect('/aportfolio')->with('Success','Xatolik bor');
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
        $post  = Portfolio::where('id',$id)->first();
        return view('backend.portfolio.portfolio-show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Portfolio::find($id);
        return view('backend.portfolio.portfolio-edit',compact('post'));
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
            'title_1'=>'required',
            'lang'=>'required',
            'name'=>'required',
            'service'=>'required',
            'sphere'=>'required',
            'technology'=>'required',
            'objective'=>'required',
            'description'=>'required',
            'category'=>'required',
            // 'img1'=>'required|file|max:5000',
            // 'img2'=>'required|file|max:5000',
        ]);
        $post = Portfolio::find($id);
        if ($request->hasFile('img1')) {
            $file = $request->file('img1');
            $image = time().$file->getClientOriginalName();
            $file->move(public_path().'/frontend/images/portfoli/',$image);
            $post->img1 = $image;
        }

        if ($request->hasFile('img2')) {
            $file = $request->file('img2');
            $image2 = date('H-i-s').$file->getClientOriginalName();
            $file->move(public_path().'/frontend/images/portfoli/',$image2);
            $post->img2 = $image2;
        }
        

        $post->title = $request->get('title');
        $post->title_1 = $request->get('title_1');
        $post->lang = $request->get('lang');
        $post->name = $request->get('name');
        $post->service = $request->get('service');
        $post->sphere = $request->get('sphere');
        $post->technology = $request->get('technology');
        $post->objective = $request->get('objective');
        $post->description = $request->get('description');
        $post->category = $request->get('category');
        $post->save();
        return redirect('/aportfolio')->with('success','Portfolio  o`zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Portfolio::find($id);

        $file = 'frontend/images/portfoli/'.$post->img1;
        $file2 = 'frontend/images/portfoli/'.$post->img2;
        if (file_exists($file)) {
            @unlink($file);
        }
        if (file_exists($file2)) {
            @unlink($file2);
        }

        $post->delete();
        return redirect('/aportfolio')->with('success', 'Portfolio o`chirildi!');
    }
}
