@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="custom-title text-center">Trashed Posts</h1>
              @if(Session::has('success'))   
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif  
            <div class="posts">
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
                    @foreach($trashs as $post)
                    <tr>
                      <th scope="row">{{$trashed->id}}</th>
                      <td>{{$trashed->title}}</td>
                      <th scope="col"><img class="table-image" src="{{ asset('storage/'.$trashed->image) }}"></th>
                      <th scope="col">{{$trashed->user_id}}</th>
                      <th scope="col">{{$trashed->category_id}}</th> 
                      <td>
                        <a href="{{ route('posts.show', $trashed->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
                        <a href="{{ route('posts.edit', $trashed->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('posts.destroy',$trashed->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fas fa-trash"></i> Trashed</button>
                        </form>
                        
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <a class="btn btn-primary" href="{{ route('posts.index') }}"><i class="fas fa-plus"></i> All Posts</a>
            </div>
        </div>
    </div>
</div>
@endsection