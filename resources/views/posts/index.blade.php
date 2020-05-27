@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="custom-title text-center">All Posts</h1>
              @if(Session::has('success'))   
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif  
            <div class="posts">
              @if($posts->count()>0)
                <table class="table table-striped table-dark">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Title</th>
                      <th scope="col">Image</th>
                      <th scope="col">Owner User</th>
                      <th scope="col">Category</th>                    
                      <th scope="col">Control</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($posts as $post)
                    <tr>
                      <th scope="row">{{$post->id}}</th>
                      <td>{{$post->title}}</td>
                      <th scope="col"><img class="table-image" src="{{ asset('storage/'.$post->image) }}"></th>
                      <th scope="col">{{$post->user->name}}</th>
                      <th scope="col">{{$post->category->name}}</th> 
                      <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
                        @if(!$post->trashed())
                        <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                        @else
                        <a href="{{ route('trashed.restore', $post->id)}}" class="btn btn-success"><i class="fas fa-reply"></i> Restore</a>
                        @endif
                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fas fa-trash"></i> {{ $post->trashed() ? 'Delete' : 'Trash'}}</button>
                        </form>
                        
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                @else
                <div class="alert alert-info">No Posts For You, You Can Create New!!</div>
                @endif
                <a class="btn btn-primary" href="{{ route('posts.create') }}"><i class="fas fa-plus"></i> New Post</a>
            </div>
        </div>
    </div>
</div>
@endsection