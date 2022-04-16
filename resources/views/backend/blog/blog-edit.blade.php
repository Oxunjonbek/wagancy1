@extends('layouts.api')
@section('content')
<section id="main-content">
  <section class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="display-3">Update a Blogs</h5>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br /> 
                @endif

                <form method="post" action="{{ route('ablog.update', $blog->id) }}" enctype="multipart/form-data">
                    @method('PATCH') 
                    @csrf
                    <div class="form-group">
                        <label for="blog">blogni titleni O`zgartirish</label>
                        <div class="col-lg-10">
                            <textarea  class="form-control" name="title">{{ $blog->title }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="blog">blogni lang O`zgartirish</label>
                        <div class="col-lg-10">
                            <input type="text" name="lang" value="{{ $blog->lang }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="blog">blogni web_postni O`zgartirish</label>
                        <div class="col-lg-10">
                            <textarea id="editor5" class="form-control" name="web_post">{{ $blog->web_post }}</textarea>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label for="blog">blogni image nomini O`zgartirish</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" name="web_img" />
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Izmenit</button>

                </form>
            </div>
        </div>
    </div>
</section>
</section>
@endsection
@section('style')
@endsection
@section('script')
@endsection