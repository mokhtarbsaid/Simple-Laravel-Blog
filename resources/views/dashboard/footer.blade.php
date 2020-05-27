@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="custom-title text-center">Edit Footer</h1>
			<form action="{{ route('dashboard.store') }}" method="POST">
				@csrf
			  <div class="row">
			  	<div class="col-md-6">
				  <div class="form-group">
				    <label for="">About Us Title</label>
				    <input type="text" class="form-control" value="{{old('name')}}" name="aboutTitle" placeholder="add  title">
				  </div>
				  <div class="form-group">
				    <label for="">About Us Content</label>
				    <textarea type="text" class="form-control" rows="5" value="{{old('name')}}" name="aboutContent" placeholder="add content"></textarea>
				  </div>
			  	</div>
			  	<div class="col-md-6">
				  <div class="form-group">
				    <label for="">Facebook Url:</label>
				    <input type="text" class="form-control" value="{{old('name')}}" name="facebook" placeholder="add facebook">
				  </div>
				  <div class="form-group">
				    <label for="">Twitter Url:</label>
				    <input type="text" class="form-control" value="{{old('name')}}" name="twitter" placeholder="add twitter">
				  </div>
				  <div class="form-group">
				    <label for="">Email Address</label>
				    <input type="text" class="form-control" value="{{old('name')}}" name="email" placeholder="add valid email">
				  </div>
			  	</div>
			  </div>
			  <div class="form-group">
			    <label for="">Copywrite Text</label>
			    <input type="text" class="form-control" value="{{old('name')}}" name="copywrite" placeholder="add website copywrite text">
			  </div>
			  <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle"></i> Save</button>
			</form>
        </div>
    </div>
</div>
@endsection
