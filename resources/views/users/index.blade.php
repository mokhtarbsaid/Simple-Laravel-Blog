@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="custom-title text-center">All Users</h1>
              @if(Session::has('success'))   
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif  
            <div class="users">
              @if($users->count()>0)
                <table class="table table-striped table-dark">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Avatar</th>
                      <th scope="col">Role</th>
                      <th scope="col">Join At</th>                    
                      <th scope="col">Control</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <th scope="row">{{$user->id}}</th>
                      <th scope="col">{{$user->name}}</th>
                      <th scope="col">
                        <img src="{{$user->hasPicture() ? asset('storage/'.$user->getPicture()) : $user->getGravatar()}}" style="width: 50px; border-radius: 50%">
                      </th>
                      <th scope="col">
                        @if(!$user->isAdmin())
                          <form action="{{ route('users.makeAdmin', $user->id) }}">
                            @csrf
                            <button class="btn btn-success" type="submit">Make Admin</button>
                          </form>
                        @else
                          {{$user->role}}
                        @endif
                      </th>
                      <th scope="col">{{$user->created_at->toDateString()}}</th> 
                      <td>
                        <a href="" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
                        <a href="" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                        <form action="" method="POST" style="display: inline;">
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
                <div class="alert alert-info">No Users For You, You Can Create New!!</div>
                @endif
                <a class="btn btn-primary" href="{{ route('users.create') }}"><i class="fas fa-plus"></i> New User</a>
            </div>
        </div>
    </div>
</div>
@endsection