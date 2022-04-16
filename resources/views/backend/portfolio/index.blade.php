	@extends('layouts.api')

	@section('content')
	<!-- Basic Forms & Horizontal Forms-->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-9">
			<section class="panel">
				<header class="panel-heading">
					Portfolio Kiritish:
				</header>
				<div class="panel-body">
					<form class="form-horizontal" action="{{ route('aportfolio.store') }}" method="post" name="form" enctype="multipart/form-data">
						{{csrf_field()}}

						<div class="form-group">
							<label  class="col-lg-2 control-label">title</label>
							<div class="col-lg-10">
								<textarea  class="form-control" name="title" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-lg-2 control-label">title_1</label>
							<div class="col-lg-10">
								<textarea  class="form-control" name="title_1" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-lg-2 control-label">lang</label>
							<div class="col-lg-10">
								<input type="text" name="lang">
							</div>
						</div>
						<div class="form-group">
							<label  class="col-lg-2 control-label">name</label>
							<div class="col-lg-10">
								<textarea  class="form-control" name="name" ></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label  class="col-lg-2 control-label">service</label>
							<div class="col-lg-10">
								<textarea  class="form-control" name="service" ></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label  class="col-lg-2 control-label">sphere</label>
							<div class="col-lg-10">
								<textarea  class="form-control" name="sphere" ></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label  class="col-lg-2 control-label">technology</label>
							<div class="col-lg-10">
								<textarea  class="form-control" name="technology" ></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label  class="col-lg-2 control-label">objective</label>
							<div class="col-lg-10">
								<textarea id="editor7" class="form-control" name="objective" ></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label  class="col-lg-2 control-label">description</label>
							<div class="col-lg-10">
								<textarea id="editor8" class="form-control" name="description" ></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label  class="col-lg-2 control-label">category</label>
							<div class="col-lg-10">
								<textarea class="form-control" name="category" ></textarea>
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
				@if(isset($posts))
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

							<thead>
								<tr>
									<th><i class="icon_number"></i>Id</th>
									<th><i class="icon_string"></i>Title</th>
									<th><i class="icon_string"></i>Title_1</th>
									<th><i class="icon_string"></i>Name</th>
									<th><i class="icon_string"></i>Lang</th>
									<th><i class="icon_string"></i>Service</th>
									<th><i class="icon_string"></i>Sphere</th>
									<th><i class="icon_string"></i>Technology</th>
									<th><i class="icon_string"></i>Objective</th>
									<th><i class="icon_string"></i>Description</th>
									<th><i class="icon_string"></i>Category</th>
									<th><i class="icon_picture"></i>Img1</th>
									<th><i class="icon_picture"></i>Img2</th>
									<th><i class="fa fa-eye"></i>Show</th>
									<th><i class="fa fa-edit"></i>Update</th>
									<th><i class="fa fa-trash"></i>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($posts as $post)

								<tr>

									<td>{{$post->id}} </td>
									<td>{{$post->title}}</td>
									<td>{{$post->title_1}}</td>
									<td>{{$post->name}}</td>
									<td>{{$post->lang}}</td>
									<td>{{$post->service}}</td>
									<td>{{$post->sphere}}</td>
									<td>{{$post->technology}}</td>
									<td>{{$post->objective}}</td>
									<td>{{$post->description}}</td>
									<td>{{$post->category}}</td>
									<td>{{$post->img1}}</td>
									<td>{{$post->img2}}</td>
									<div class="btn-group">
										<td>
											<a class="btn btn-info" href="{{ route('aportfolio.show',$post->id) }}"><i class="fa fa-eye "></i></a>
										</td>

										<td>
											<a class="btn btn-warning" href="{{ route('aportfolio.edit',$post->id) }}"><i class="fa fa-edit"></i></a></td>
											<td>
												<form action="{{ route('aportfolio.destroy', $post->id)}}" method="post">
													@csrf
													@method('DELETE')
													<button id="post_sweetalert_delete" class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
												</form>
											</td>

										</div>

									</tr>
									@endforeach
								</tbody>
							</table> 
						</div>
					</div>
					{{$posts->links()}}
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

	@endsection