@extends('layouts.api')

@section('content')
<!-- Basic Forms & Horizontal Forms-->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-9">
			<section class="panel">
				<header class="panel-heading">
					Blog Kiritish:
				</header>
				<div class="panel-body">
					<form class="form-horizontal" action="{{ route('ablog.store') }}" method="post" name="form" enctype="multipart/form-data">
						{{csrf_field()}}

						<div class="form-group">
							<label  class="col-lg-2 control-label">title</label>
							<div class="col-lg-10">
								<textarea  class="form-control" name="title" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-lg-2 control-label">lang</label>
							<div class="col-lg-10">
								<input type="text" name="lang">
							</div>
						</div>
						
						<div class="form-group">
							<label  class="col-lg-2 control-label">web_post</label>
							<div class="col-lg-10">
								<textarea id="editor5" class="form-control" name="web_post" ></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label  class="col-lg-2 control-label">web_img</label>
							<div class="col-lg-10">
								<input type="file" class="form-control" name="web_img" >
							</div>
						</div>



						<div class="form-group">
							<div class="col-lg-offset-2 col-lg-10">
								<button type="submit" class="btn btn-primary">Saxranit</button>
							</div>
						</div>
					</form>
				</div>
			</section>

		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
				<header class="panel-heading">
					@if(isset($Success))
					{{$Success}}
					@endif;
				</header>
				@if(isset($blogs))
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped table-advance table-hover">
							<tbody>


								<tr>
									<th><i class="icon_string"></i>Title</th>
									<th><i class="icon_string"></i>Lang</th>
									<th><i class="icon_string"></i>Web_post</th>
									<th><i class="icon_picture"></i>Web_img</th>
									<th><i class="fa fa-eye"></i>Show</th>
									<th><i class="fa fa-edit"></i>Update</th>
									<th><i class="fa fa-trash"></i>Delete</th>
								</tr>
								@foreach ($blogs as $blog)

								<tr>



									<td>{{$blog->title}}</td>
									<td>{{$blog->lang}}</td>
									<td>{{$blog->web_post}}</td>
									<td>{{$blog->web_img}}</td>
									<div class="btn-group">
										<td>
											<a class="show-modal btn btn-info" href="{{ route('ablog.show',$blog->id) }}"><i class="fa fa-eye"></i></a>
										</td>

										<td>
											<a class="edit-modal btn btn-warning" href="{{ route('ablog.edit',$blog->id) }}"><i class="fa fa-edit"></i></a></td>
											<td>
												<form action="{{ route('ablog.destroy', $blog->id)}}" method="post">
													@csrf
													@method('DELETE')
													<button id="blog_sweetalert_delete" class="delete-modal btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
												</form>
											</td>

										</div>

									</tr>
									@endforeach
								</tbody>
							</table> 
						</div>
					</div>
							{{$blogs->links()}}
							@endif
						</section>
						@if(session()->get('success'))
						<div class="alert alert-success">
							{{ session()->get('success') }} 
						</div>
						@endif
					</div>
				</section>
			</section>

		</div>

		@endsection

		@section('style')
		@endsection

		@section('script')
		<script type="text/javascript">

       
</script>
		@endsection