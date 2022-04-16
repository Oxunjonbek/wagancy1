@extends('layouts.api')

@section('content')
<section id="main-content">
	<section class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h6>Id:{{$blog->id}} Title:
						{{$blog->title}}<br> Lang:
						{{$blog->lang}}<br> 
						{{$blog->yil}}</h6><br>web_post:
						{{$blog->web_post}}<br>
						<img src="{{ asset('frontend/images/blog/'.$blog->web_img) }}">
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