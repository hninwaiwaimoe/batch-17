@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Items List Here!</h1>
		<a href="{{route('items.create')}}" class="btn btn-info btn-lg" disable>Add New</a>
	</div>
</div>
<div class="container">
	<div class="row">
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>CodeNO</th>
					<th>Name</th>
					<th>Price</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1; @endphp
				@foreach ($items as $item)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$item->codeno}}</td>
					<td>{{$item->name}}</td>
					<td>{{$item->price}}MMK</td>
					<td>
						<a href="#" class="btn btn-primary">Details</a>
						<a href="{{route('items.edit',$item->id)}}" class="btn btn-danger">Edit</a>
						<a href="#" class="btn btn-danger">Delete</a>


					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div></div>
	@endsection