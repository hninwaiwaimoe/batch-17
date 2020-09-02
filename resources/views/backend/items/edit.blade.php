@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div class="row">
			<div class="col">
				<h1 class="h3 mb-0 text-gray-800">Items Edit Form</h1>

				<form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group row">
						<label for="codeno" class="col-sm-2 col-form-label">Code NO</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="codeno" value="{{$item->codeno}}" readonly="readonly">	
						</div>
					</div>
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name" value="{{$item->name}}">
						</div>
					</div>
					<div class="form-group row">
						<label for="photo" class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-10">
							<input type="file" class="form-control" name="photo">
							<img src="{{asset($item->photo)}}" class="img-fluid w-25">
							<input type="hidden" name="oldphoto" value="{{$item->photo}}"> 
						</div>
					</div>
					<div class="form-group row">
						<label for="price" class="col-sm-2 col-form-label">Price</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="price" value="{{$item->price}}">
						</div>
					</div>
					<div class="form-group row">
						<label for="discount" class="col-sm-2 col-form-label">Discount</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="discount" value="{{$item->discount}}">
						</div>
					</div>
					<div class="form-group row">
						<label for="description" class="col-sm-2 col-form-label">Description</label>

						<div class="col-sm-10">
							<textarea  name="description" class="form-control">
								{{$item->description}}
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
							<input type="submit" class="btn btn-dark" value="Update">
						</div>
					</div>


				</form>
			</div>
		</div>
	</div>
</div>
@endsection