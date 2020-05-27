@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="custom-title text-center">All Comments Under Review</h1>
              @if(Session::has('success'))   
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif  
            <div class="comments">
              @if($comments->count()>0)
                <table class="table table-striped table-dark">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Comment</th>                 
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($comments as $comment)
                    @if($comment->status == 'moderated')
                    <tr>
                      <th scope="row">{{$comment->name}}</th>
                      <th scope="col">{{$comment->email}}</th>
                      <th scope="col" width="50%">{!!$comment->comment!!}</th> 
                      <td>
                        <a href="{{ route('comments.approve', $comment->id) }}" class="btn btn-primary"><i class="fas fa-check-circle"></i> Approve</a>
                       <a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                        </form>
                        
                      </td>
                    </tr>
                    @endif
                    @endforeach
                  </tbody>
                </table>
                <a class="btn btn-primary" href="{{ route('comments.approveAll') }}"><i class="fas fa-check"></i> Approve All</a>
                @else
                <div class="alert alert-info">No Comments For You, You Can Create New!!</div>
                @endif
                
            </div>
        </div>
    </div>
</div>
@endsection