@extends('layouts.api')
@section('content')
<section id="main-content">
  <section class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="display-3">Izmenit a Portfolio</h5>

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

                <form method="post" action="{{ route('aportfolio.update', $post->id) }}" enctype="multipart/form-data">
                    @method('PATCH') 
                    @csrf
                   <div class="form-group">
                            <label  class="col-lg-2 control-label">title</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="title" >{{ $post->title }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">title_1</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="title_1" >{{ $post->title_1 }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">lang</label>
                            <div class="col-lg-10">
                                <input type="text" name="lang" value="{{ $post->lang }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">name</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="name" >{{ $post->name }}</textarea>
                            </div>
                        </div>
                       
                        
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">service</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="service" >{{ $post->service }}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">sphere</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="sphere" >{{ $post->sphere }}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">technology</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="technology" >{{ $post->technology }}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">objective</label>
                            <div class="col-lg-10">
                                <textarea id="editor7" class="form-control" name="objective" >{{ $post->objective }}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">description</label>
                            <div class="col-lg-10">
                                <textarea id="editor8" class="form-control" name="description" >{{ $post->description }}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">category</label>
                            <div class="col-lg-10">
                                <textarea  class="form-control" name="category" >{{ $post->category }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">img1</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="img1" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-lg-2 control-label">img2</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="img2" >
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-primary">Izmenit</button>
                            </div>
                        </div>

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
<script type="text/javascript">
        var editor1 = CKEDITOR.replace( 'editor1' );
        var editor11 = CKEDITOR.replace( 'editor11' );
        var editor2 = CKEDITOR.replace( 'editor2' );
        var editor3 = CKEDITOR.replace( 'editor3' );
        var editor31 = CKEDITOR.replace( 'editor31' );
        var editor4 = CKEDITOR.replace( 'editor4' );
        var editor41 = CKEDITOR.replace( 'editor41' );
        var editor5 = CKEDITOR.replace( 'editor5' );
        var editor51 = CKEDITOR.replace( 'editor51' );
        var editor6 = CKEDITOR.replace( 'editor6' );
        var editor61 = CKEDITOR.replace( 'editor61' );
        var editor7 = CKEDITOR.replace( 'editor7' );
        var editor71 = CKEDITOR.replace( 'editor71' );
        var editor8 = CKEDITOR.replace( 'editor8' );
        var editor81 = CKEDITOR.replace( 'editor81' );
        var editor9 = CKEDITOR.replace( 'editor9' );
</script>
@endsection