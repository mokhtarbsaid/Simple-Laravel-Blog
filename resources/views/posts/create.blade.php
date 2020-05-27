@extends('layouts.app')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="custom-title text-center">New Post</h1>
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
			    <label for="">Post Title</label>
			    <input type="text" class="form-control" value="{{old('title')}}" name="title" placeholder="add post title">
			  </div>
			  <div class="form-group">
			    <label for="">Post Description</label>
			    <!--<textarea class="form-control" name="description" placeholder="add a short description for this post" rows="2"></textarea>-->
			  	<input id="description" type="hidden" name="description">
                <trix-editor input="description">{{old('description')}}</trix-editor>
			  </div>
			  <div class="form-group">
			    <label for="">Post Content</label>
			    <!--<textarea class="form-control" name="content" placeholder="add the full content for this post" rows="7"></textarea>-->
			      <input id="content" type="hidden" name="content">
                   <trix-editor input="content">{{old('content')}}</trix-editor>
			  </div>
			  <div class="form-group">
			    <label for="">Post Image</label>
			    <input type="file" class="form-control-file" name="image"  value="{{old('image')}}">
			  </div>
			  <div class="form-group">
			    <label for="">Post Category</label>
			      <select class="custom-select" name="category" value="{{old('category')}}" >
			        @foreach($categories as $category)
			          <option value="{{$category->id}}">{{$category->name}}</option>
			        @endforeach
			      </select>
			  </div>
			  <div class="form-group">
			    <label for="">Post Tags</label>
			      <select class="custom-select tags" name="tag[]" value="{{old('tag')}}" multiple >
			        @foreach($tags as $tag)
			          <option value="{{$tag->id}}">{{$tag->name}}</option>
			        @endforeach
			      </select>
			  </div>
			  <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle"></i> Save</button>
			  <a href="{{ route('posts.index') }}" class="btn btn-success float-right"><i class="fas fa-tags"></i> All Posts</a>
			</form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix-core.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $('.tags').select2();
	});
</script>
@endsection