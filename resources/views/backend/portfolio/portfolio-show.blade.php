@extends('layouts.api')

@section('content')
<section id="main-content">
	<section class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h6>Id:{{$post->id}} Title:
						{{$post->title}}<br><br> Title_1:
						{{$post->title_1}}<br><br> Name:
						{{$post->name}}<br><br> Service:
						{{$post->service}}<br><br>Sphere:
						{{$post->sphere}}<br><br>Technology:
						{{$post->technology}}<br><br>Objective:
						{{$post->objective}}<br><br>Description:
						{{$post->description}}<br><br>Category:
						{{$post->category}}</h6><br><br>
						<img src="{{ asset('frontend/images/portfoli/'.$post->img1) }}">
						<img src="{{ asset('frontend/images/portfoli/'.$post->img2) }}">
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