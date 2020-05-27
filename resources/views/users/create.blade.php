@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="custom-title text-center">Create User</h1>
			@if ($errors->any())
			    <div>
			        <ul class="list-unstyled">
			            @foreach ($errors->all() as $error)
			                <li class="alert alert-danger">{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
			<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
			  <div class="form-group">
			    <label for="">Name</label>
			    <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="add user name">
			  </div>
			  <div class="form-group">
			    <label for="">Email</label>
			    <input type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="Enter a valid email address">
			  </div>
			  <div class="form-group">
			    <label for="">Password</label>
			    <input type="password" class="form-control" value="{{old('password')}}" name="password" placeholder="Enter a strong password">
			  </div>
			  <div class="form-group">
			    <label for="">Upload Avatar</label>
			    <input type="file" class="form-control-file" name="avatar"  value="{{old('avatar')}}">
			  </div>
			  <div class="form-group">
			    <label for="">Role</label>
			      <select class="custom-select" name="role" value="{{old('role')}}" >
			          <option value="admin">Admin</option>
			          <option value="writer">Writer</option>
			     
			      </select>
			  </div>
			  <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle"></i> Save</button>
			  <a href="{{ route('posts.index') }}" class="btn btn-success float-right"><i class="fas fa-tags"></i> All Posts</a>
			</form>
        </div>
    </div>
</div>
@endsection
