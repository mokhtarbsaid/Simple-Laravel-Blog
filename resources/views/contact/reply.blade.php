@extends('layouts.app')
@section('stylesheets')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection
@section('content')
<div class="container">
  <h1 class="custom-title text-center">Reply to Message</h1>
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
        <div class="card-header"><b>From: {{auth()->user()->name}}, {{auth()->user()->role}} In Healthy Blog</b></div>
        <div class="card-body">
      <form action="{{ route('contacts.index') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for=""><h5>Email:</h5></label>
          <input type="email" class="form-control" value="{{$contact->email}}" name="email" placeholder="Enter a valid email address">
        </div>
        <div class="form-group">
          <label for=""><h5>Subject:</h5></label>
          <input type="text" class="form-control" value="Reply to Your Message: {{$contact->subject}}" name="subject">
        </div>
        <div class="form-group">
          <label for=""><h5>The Reply:</h5></label>
          <input id="message" type="hidden" name="message" value="Dear: {{$contact->firstName}} {{$contact->lastName}} <br>From: {{auth()->user()->name}}, {{auth()->user()->role}} In Healthy Blog <br>Reply:<br>Thanks<br>{{auth()->user()->name}}">
                <trix-editor input="message"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send Reply</button>
      </form>
        </div>
  </div>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix-core.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
@endsection