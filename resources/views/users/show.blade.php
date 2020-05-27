@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Post ID: {{$post->id}}</h2>
              @if(Session::has('success'))   
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif  
            <div class="post">
                <div class="card bg-light mb-3">
                  <div class="card-header"><h5 class="card-title">{{$post->title}}</h5></div>
                  <div class="card-body">
                    <p class="card-text"><b>{{$post->description}}</b></p>
                    <p class="card-text">{{$post->content}}</p>
                    <div class="post-image">
                      <img class="img-thumbnail" src="{{ asset('storage/'.$post->image) }}">
                    </div>
                  </div>
                </div>
              
              <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
              <form class="float-right" method="POST" action="{{ route('posts.destroy',$post->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fas fa-trash"></i> Trash</button>
              </form>
              
              <a href="{{ route('posts.index') }}" class="btn btn-primary"><i class="fas fa-tags"></i> All Posts</a>
           </div>
        </div>
    </div>
</div>
@endsection