@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="custom-title text-center">Settings</h1>
            <div class="">
			  <div class="form-group">
			    <label for="">Site Title</label>
			    <input type="text" class="form-control" value="{{old('name')}}" name="title" placeholder="add website title">
			  </div>
			  <div class="form-group">
			    <label for="">Tagline</label>
			    <input type="text" class="form-control" value="{{old('name')}}" name="tagline" placeholder="add website tagline">
			  </div>
			  <div class="form-group">
			    <label for="logo">Website Logo</label>
			    <input type="file" class="file-form-control" name="logo">
			  </div>
			</div>

        </div>
    </div>
</div>
@endsection
