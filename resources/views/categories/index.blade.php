@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           <h1 class="custom-title text-center">All Categories</h1>
              @if(Session::has('success'))   
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif  
            <div class="categories">
              @if($categories->count()>0)
                <table class="table table-striped table-dark">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Control</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                    <tr>
                      <th scope="row">{{$category->id}}</th>
                      <td>{{$category->name}}</td>
                      <td>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
                        <a href="{{ route('categories.edit', $category->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('categories.destroy',$category->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                        
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              @else
              <div class="alert alert-info">No Categories For You, You Can Create New!!</div>
              @endif
                <a class="btn btn-primary" href="{{ route('categories.create') }}"><i class="fas fa-plus"></i> New Category</a>
            </div>
        </div>
    </div>
</div>
@endsection