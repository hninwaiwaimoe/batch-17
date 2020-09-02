@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Category Create Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
					@csrf


					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-5">

							<input type="text" name="name" class="form-control">
							@error('name')
							<label class="text-danger">Please Fill Your Category Name</label>
							@enderror
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-5">
							<input type="file" name="photo" class="form-control-file">
							<span class="text-danger">{{$errors->first('photo')}}</span>
						</div>
					</div>

					

					<div class="form-group row">
						<input type="submit" value="Create" class="btn btn-info" name="btnsubmit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection