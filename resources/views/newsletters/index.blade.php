@extends('layouts.app')

@section('content')
<div class="container  text-center">
  <h1 class="custom-title text-center">Subscribers List</h1>
    @if(Session::has('success'))   
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{Session::get('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif  
  <div class="newsletters">
    @if($newsletters->count()>0)
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Email</th>                   
            <th scope="col">Control</th>
          </tr>
        </thead>
        <tbody>
          @foreach($newsletters as $newsletter)
          <tr>
            <th scope="row">{{$newsletter->id}}</th>
            <td>{{$newsletter->email}}</td>
            <td>
              <a href="{{ route('newsletters.delete', $newsletter->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a> 
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
      <div class="alert alert-info">No Subcribers For You!!</div>
      @endif
  </div>
</div>
@endsection