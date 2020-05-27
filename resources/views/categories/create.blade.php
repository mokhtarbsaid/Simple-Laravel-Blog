@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
		<h1 class="custom-title text-center">New Category</h1>
			@if ($errors->any())
			    <div>
			        <ul class="list-unstyled">
			            @foreach ($errors->all() as $error)
			                <li class="alert alert-danger">{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
              @if(Session::has('error'))   
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{Session::get('error')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif  
			<form action="{{ route('categories.store') }}" method="POST">
				@csrf
			  <div class="form-group">
			    <label for="">Category Name</label>
			    <input type="text" class="form-control" name="name" placeholder="add name">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Category Description</label>
			    <textarea class="form-control" name="description" rows="4"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle"></i> Save</button>
			  <a href="{{ route('categories.index') }}" class="btn btn-success float-right"><i class="fas fa-tags"></i> All Categories</a>
			</form>
        </div>
    </div>
</div>
@endsection