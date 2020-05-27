@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="custom-title text-center">Edit Profile</h1>
			@if ($errors->any())
			    <div>
			        <ul class="list-unstyled">
			            @foreach ($errors->all() as $error)
			                <li class="alert alert-danger">{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
          @if(Session::has('success'))   
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{Session::get('success')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif  
			<form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
				@csrf
			  <div class="form-group">
			    <label for="">Name</label>
			    <input type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="add user name">
			  </div>
			  <div class="form-group">
			    <label for="">Email</label>
			    <input type="email" class="form-control" value="{{$user->email}}" name="email" placeholder="Enter a valid email address">
			  </div>
			  <div class="form-group">
			    <label for="">About</label>
			    <textarea class="form-control" rows="3" name="about" placeholder="Tell us about you">{{$profile->about}}</textarea>
			  </div>
			  <div class="form-group">
			    <label for="">Facebook:</label>
			    <input type="text" class="form-control" value="{{$profile->facebook}}" name="facebook" placeholder="add your facebook profile">
			  </div>
			  <div class="form-group">
			    <label for="">Twitter:</label>
			    <input type="text" class="form-control" value="{{$profile->twitter}}" name="twitter" placeholder="add your twitter profile">
			  </div>
			  <div class="form-group">
			    <label for="">Upload Picture</label>
			    <div class="mb-3">
			    <img src="{{$user->hasPicture() ? asset('storage/'.$user->getPicture()) : $user->getGravatar()}}" style="width: 100px;height: 100px; border-radius: 50%">
				</div>
                <input type="file" class="form-control-file" name="picture">
			  </div>
			  <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle"></i> Save</button>
			</form>
        </div>
    </div>
</div>
@endsection
