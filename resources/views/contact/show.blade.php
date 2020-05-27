@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="custom-title text-center">Show Message</h1>
    @if(Session::has('success'))   
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{Session::get('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif  
  <div class="contact" style="max-width: 700px; margin: auto;">
    <div class="card">
        <div class="card-header"><b>From: {{$contact->firstName}} {{$contact->lastName}}<span class="float-right">Email: {{$contact->email}}</span></b></div>
        <div class="card-body">
          <h5>Subject: {{$contact->subject}}</h5>
          <h5>The message:</h5>
            <p>{{$contact->message}}</p>
        </div>
    </div>  
    <a href="{{ route('contacts.reply', $contact->id)}}" class="btn btn-success mt-1"><i class="fas fa-reply"></i> Reply</a>

    <a href="{{ route('contacts.delete', $contact->id)}}" class="btn btn-danger float-right mt-1"><i class="fas fa-trash"></i> Delete</a>
  
    

  </div>
</div>
@endsection