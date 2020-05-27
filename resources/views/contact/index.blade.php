@extends('layouts.app')

@section('content')
<div class="container  text-center">
  <h1 class="custom-title text-center">Messages</h1>
    @if(Session::has('success'))   
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{Session::get('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif  
  <div class="contacts">
    @if($contacts->count()>0)
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Subject</th>                   
            <th scope="col">Control</th>
          </tr>
        </thead>
        <tbody>
          @foreach($contacts as $contact)
          <tr>
            <th scope="row">{{$contact->firstName}} {{$contact->lastName}}</th>
            <td>{{$contact->subject}}</td>
            <td>
              <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
              <a href="{{ route('contacts.reply', $contact->id)}}" class="btn btn-success"><i class="fas fa-reply"></i> Reply</a>
              <a href="{{ route('contacts.delete', $contact->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>

              
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
      <div class="alert alert-info">No Messages For You!!</div>
      @endif
  </div>
</div>
@endsection