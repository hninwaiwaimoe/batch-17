@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Brand Create Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('brands.store')}}" method="POST" enctype="multipart/form-data">
					@csrf


					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-5">

							<input type="text" name="name" class="form-control">
							
							@error('name')
							<label class="text-danger">Please Input Brand Name</label>
							@enderror
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-5">

							<input type="file" name="photo" class="form-control-file">
							@error('photo')
							<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
					</div>

					

					<div class="form-group row">
						<input type="submit" value="Create" class="btn btn-success" name="btnsubmit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection