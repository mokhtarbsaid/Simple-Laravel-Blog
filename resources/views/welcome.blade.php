 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Health Blog - Home</title>
@include('layouts.header')
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row align-items-stretch retro-layout-2"> 
          <div class="col-md-4">
            <a href="{{ route('categories.show',$categories['0']->id) }}" class="h-entry mb-30 v-height gradient" style="background-image: url('images/img_1.jpg');">
              
              <div class="text"> 
                <div class="post-categories mb-3">
                  <span class="post-category bg-danger">{{$categories['0']->name}}</span>
                </div>
                <h2>{{$categories['1']->description}}</h2>
                <span class="date">{{date('M d, Y', strtotime($categories['0']->created_at))}}</span>
              </div>
            </a>
            <a href="{{ route('categories.show',$categories['1']->id) }}" class="h-entry v-height gradient" style="background-image: url('images/img_2.jpg');">
              
              <div class="text">
                <div class="post-categories mb-3">
                  <span class="post-category bg-danger">{{$categories['1']->name}}</span>
                </div>
                <h2>{{$categories['3']->description}}</h2>
                <span class="date">{{date('M d, Y', strtotime($categories['1']->created_at))}}</span>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="{{ route('categories.show',$categories['2']->id) }}" class="h-entry img-5 h-100 gradient" style="background-image: url('images/img_v_1.jpg');">
              
              <div class="text">
                <div class="post-categories mb-3">
                  <span class="post-category bg-danger">{{$categories['2']->name}}</span>
                </div>
                <h2>{{$categories['3']->description}}</h2>
                <span class="date">{{date('M d, Y', strtotime($categories['2']->created_at))}}</span>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="{{ route('categories.show',$categories['3']->id) }}" class="h-entry mb-30 v-height gradient" style="background-image: url('images/img_3.jpg');">
              
              <div class="text">
                <div class="post-categories mb-3">
                  <span class="post-category bg-danger">{{$categories['3']->name}}</span>
                </div>
                <h2>{{$categories['3']->description}}</h2>
                <span class="date">{{date('M d, Y', strtotime($categories['3']->created_at))}}</span>
              </div>
            </a>
            <a href="{{ route('categories.show',$categories['4']->id) }}" class="h-entry v-height gradient" style="background-image: url('images/img_4.jpg');">
              
              <div class="text">
                <div class="post-categories mb-3">
                  <span class="post-category bg-danger">{{$categories['4']->name}}</span>
                </div>
                <h2>{{$categories['4']->description}}</h2>
                <span class="date">{{date('M d, Y', strtotime($categories['4']->created_at))}}</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h2>Recent Posts</h2>
          </div>
        </div>
        <div class="row">
        @foreach($posts as $post)    
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="single.html"><img src="{{ asset('storage/'.$post->image) }}" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3">{{$post->category->name}}</span>

              <h2><a href="{{ route('posts.show', $post->id) }}">{{$post->title}}</a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left"><img src="{{$post->user->hasPicture() ? asset('storage/'.$post->user->getPicture()) : $post->user->getGravatar()}}" alt="Image" class="img-fluid"></figure>
                <span class="d-inline-block mt-1">By <a href="https://github.com/mokhtarbensaid">{{$post->user->name}}</a></span>
                <span>&nbsp;-&nbsp; {{date('M m, Y', strtotime($post->created_at))}}</span>
              </div>
              
                <p>{!!$post->description!!}</p>
                <p><a href="{{ route('posts.show', $post->id) }}">Read More</a></p>
              </div>
            </div>
          </div>
        @endforeach
        </div>
        <div class="row text-center pt-5 border-top">
          <div class="col-md-12">
            <div class="ucstom-pagination">
              {{$posts->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-5">
            <div class="subscribe-1 " id="subscribe">
              <h2>Subscribe to our newsletter</h2>
              <p class="mb-5">Subscribe now to our newsletter for get the lastest healthy updates and news</p>
              @if(Session::has('success'))   
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif  
              <form action="{{ route('newsletters.store') }}" method="POST" class="d-flex">
                @csrf
                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter your email address">
                <input type="submit" class="btn btn-primary" value="Subscribe">
              </form>
                @error('email')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
@include('layouts.footer')