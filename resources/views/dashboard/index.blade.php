@extends('layouts.app')

@section('content')
<div class="container  text-center">
  <h1 class="custom-title text-center">Dashboard</h1>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
              <div class="card-header"><h5><i class="fas fa-users"></i> Users</h5></div>
              <div class="card-body">
                <h5>{{$usersCount}}</h5>
              </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
              <div class="card-header"><h5><i class="fas fa-newspaper"></i> Posts</h5></div>
              <div class="card-body">
               <h5>{{$postsCount}}</h5> 
              </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
              <div class="card-header"><h5><i class="fas fa-tags"></i> Categories</h5></div>
              <div class="card-body">
                  <h5>{{$categoriesCount}}</h5>
              </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning mb-3">
              <div class="card-header"><b><i class="fas fa-comment-alt"></i> Moderated Comments</b></div>
              <div class="card-body">
                  <h5>{{$commentsCount}}</h5>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection