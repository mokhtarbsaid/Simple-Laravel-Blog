@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Tag ID: {{$tag->id}}</h2>
              @if(Session::has('success'))   
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif  
            <div class="tag">
                <div class="card text-white bg-dark mb-3">
                  <div class="card-header"><h5 class="card-title">{{$tag->name}}</h5></div>
                  <div class="card-body">
  
                  </div>
                </div>
              
              <a href="{{ route('tags.edit', $tag->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
              <form class="float-right" method="POST" action="{{ route('tags.destroy',$tag->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
              </form>
              
              <a href="{{ route('tags.index') }}" class="btn btn-primary"><i class="fas fa-tags"></i> All Tags</a>
           </div>
        </div>
    </div>
</div>
@endsection