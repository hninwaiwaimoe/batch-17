@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div class="row">
			<div class="col">
				<h1 class="h3 mb-0 text-gray-800">Items Create Form</h1>

				<form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group row">
						<label for="codeno" class="col-sm-2 col-form-label">Code NO</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="codeno">
							@error('codeno')
							<label class="text-danger">Please Fill  Code NO at least four integer!</label>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name">
							@error('name')
							<label class="text-danger">Please Fill Your Items Name</label>
							@enderror
						</div>
					</div>
					<div class="form-group row">
						<label for="photo" class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-10">
							<input type="file" class="form-control" name="photo">
							<span class="text-danger">{{$errors->first('photo')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="price" class="col-sm-2 col-form-label">Price</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="price">
							<span class="text-danger">{{$errors->first('price')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="discount" class="col-sm-2 col-form-label">Discount</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="discount" value="0">
							<span class="text-danger">{{$errors->first('discount')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="description" class="col-sm-2 col-form-label">Description</label>

						<div class="col-sm-10">
							<textarea  name="description" class="form-control">

							</textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="description" class="col-sm-2 col-form-label">Brand</label>

						<div class="col-sm-10">
							<select class="form-control-md" id="inputBrand" name="brand">
								<optgroup label="Choose Brand">
									@foreach($brands as $brand)
									<option value="{{$brand->id}}">{{$brand->name}}</option>
									@endforeach
								</optgroup>
							</select>
							<span class="text-danger">
								{{$errors->first('brand')}}
							</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="description" class="col-sm-2 col-form-label">Subcategory</label>

						<div class="col-sm-10">
							<select class="form-control-md" id="inputSubcategory" name="subcategory">
								<optgroup label="Choose Subcategory">
									@foreach($subcategories as $subcategory)
									<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
									@endforeach
								</optgroup>
							</select>
							<span class="text-danger">
								{{$errors->first('subcategory')}}
							</span>
						</div>
					</div> 

					<div class="form-group row">
						<div class="col-sm-10">
							<input type="submit" class="btn btn-success" value="Create">
						</div>
					</div>


				</form>
			</div>
		</div>
	</div>
</div>
@endsection