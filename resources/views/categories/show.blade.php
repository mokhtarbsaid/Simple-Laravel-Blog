 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Categories - {{$category->name}}</title>
@include('layouts.header')
    
    
    <div class="py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <span>Category</span>
            <h3>{{$category->name}}</h3>
            <p>{{$category->description}}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-white">
      <div class="container">
        <div class="row"> 
          @foreach($posts as $post)
          <div class="col-lg-4 mb-4">
           
              <div class="entry2">
                <a href="{{ route('posts.show', $post->id) }}"><img src="{{ asset('storage/'.$post->image) }}" alt="Image" class="img-fluid rounded"></a>
                <div class="excerpt">
                <span class="post-category text-white bg-secondary mb-3">{{$post->name}}</span>

                <h2><a href="{{ route('posts.show', $post->id) }}">{{$post->title}}</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                  <figure class="author-figure mb-0 mr-3 float-left"><img src="{{$post->user->hasPicture() ? asset('storage/'.$post->user->getPicture()) : $post->user->getGravatar()}}" alt="Image" class="img-fluid"></figure>
                  <span class="d-inline-block mt-1">By <a href="#">{{$post->user->name}}</a></span>
                  <span>&nbsp;-&nbsp; {{date('M d, Y', strtotime($post->created_at))}}</span>
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
             {{$posts->links()}}
          </div>
      </div>
    </div>
  </div>
@include('layouts.footer')