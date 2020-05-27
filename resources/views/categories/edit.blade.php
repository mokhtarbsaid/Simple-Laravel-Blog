@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<h1 class="custom-title text-center">Edit Category</h1>
			@if ($errors->any())
			    <div>
			        <ul class="list-unstyled">
			            @foreach ($errors->all() as $error)
			                <li class="alert alert-danger">{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
			<form action="{{ route('categories.update', $category->id) }}" method="POST">
				@csrf
				@method('PUT')
			  <div class="form-group">
			    <label for="">Category Name</label>
			    <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="add name">
			  </div>
			  <div class="form-group">
			    <label for="">Category Description</label>
			    <textarea class="form-control" name="description" rows="4">{{$category->description}}</textarea>
			  </div>
			  <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle"></i> Update</button>
			  <a href="{{ route('categories.index') }}" class="btn btn-success float-right"><i class="fas fa-tags"></i> All Categories</a>
			</form>
        </div>
    </div>
</div>
@endsection