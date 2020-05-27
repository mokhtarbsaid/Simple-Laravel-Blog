 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Posts - {{$post->title}}</title>
@include('layouts.header')
    
    
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url({{ asset('storage/'.$post->image) }});">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              <span class="post-category text-white bg-success mb-3">{{$post->category->name}}</span>
              <h1 class="mb-4">{{$post->title}}</h1>
              <div class="post-meta align-items-center text-center">
                <figure class="author-figure mb-0 mr-3 d-inline-block"><img src="{{$post->user->hasPicture() ? asset('storage/'.$post->user->getPicture()) : $post->user->getGravatar()}}" alt="Image" class="img-fluid"></figure>
                <span class="d-inline-block mt-1">By <a href="https://github.com/mokhtarbensaid">{{$post->user->name}}</a></span>
                <span>&nbsp;-&nbsp;{{date('M m, Y', strtotime($post->created_at))}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            
            <div class="post-content-body">
            <!-- <div class="row mb-5 mt-5">
              <div class="col-md-12 mb-4">
                <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div>
              <div class="col-md-6 mb-4">
                <img src="images/img_2.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div>
              <div class="col-md-6 mb-4">
                <img src="images/img_3.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div>
            </div>-->
            {!!$post->content!!}
            </div>

            
            <div class="pt-5">
              <p>Categories:  <a href="#">{{$post->category->name}}</a>  Tags: 
                @foreach($post->tags as $tag)
                  <a href="#">{{$tag->name}}</a>,
                @endforeach
            </div>


            <div class="pt-5">
              <h3 class="mb-5">{{$post->comments->count()}} Comments</h3>
              <ul class="comment-list">
                @foreach($post->comments as $comment)
                @if($comment->status == 'approved')
                  <li class="comment">
                    <div class="vcard">
                      <img src="{{$comment->getGravatar()}}" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>{{$comment->name}}</h3>
                      <div class="meta">{{date('M d, Y', strtotime($comment->created_at))}} at {{date('h:i a', strtotime($comment->created_at))}}</div>
                      <p>{!!$comment->comment!!}</p>
                      <p><a href="#" class="reply rounded">Reply</a></p>
                    </div>
                  </li>
                  @endif
                @endforeach
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                @if(Session::has('success'))   
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{Session::get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                <form action="{{ route('comments.store', $post->id) }}" method="POST" class="p-5 bg-light">
                  @csrf
                  <input type="hidden" name="post_id" value="{{$post->id}}">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                      @error('name')
                      <small class="form-text text-danger">{{$message}}</small>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                      @error('email')
                      <small class="form-text text-danger">{{$message}}</small>
                      @enderror
                  </div>

                  <div class="form-group">
                    <label for="">Comment *</label>
                    <textarea name="comment" cols="30" rows="10" class="form-control @error('comment') is-invalid @enderror">{{old('comment')}}</textarea>
                      @error('comment')
                      <small class="form-text text-danger">{{$message}}</small>
                      @enderror
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-center">
                <img src="{{$post->user->hasPicture() ? asset('storage/'.$post->user->getPicture()) : $post->user->getGravatar()}}" alt="Image Placeholder" class="img-fluid mb-5">
                <div class="bio-body">
                  <h2>{{ucfirst($post->user->role)}}</h2>
                  <p class="mb-4">{{$post->user->profile->about}}</p>
                  <p><a href="#" class="btn btn-primary btn-sm rounded px-4 py-2">Read my bio</a></p>
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <!-- END sidebar-box -->  
            <div class="sidebar-box">
              <h3 class="heading">Popular Posts</h3>
              <div class="post-entry-sidebar">
                <ul>
                  @foreach($views as $view)
                  <li>
                    <a href="{{ route('posts.show', $view->id) }}">
                      <img src="{{ asset('storage/'.$view->image) }}" alt="Image placeholder" class="mr-4">
                      <div class="text">
                        <h4>{{$view->title}}</h4>
                        <div class="post-meta">
                          <span class="mr-2">{{date('M d, Y', strtotime($view->created_at))}}</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <!-- END sidebar-box -->

            <div class="sidebar-box">
              <h3 class="heading">Categories</h3>
              <ul class="categories">
                @foreach($categories as $category)
                <li><a href="#">{{$category->name}} <span>{{$category->posts->count()}}</span></a></li>
                @endforeach
              </ul>
            </div>
            <!-- END sidebar-box -->

            <div class="sidebar-box">
              <h3 class="heading">Tags</h3>
              <ul class="tags">
                @foreach($tags as $tag)
                <li><a href="#">{{$tag->name}} <span class="badge badge-secondary">{{$tag->posts->count()}}</span></a></li>
                @endforeach
              </ul>
            </div>
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

    <div class="site-section bg-light">
      <div class="container">

        <div class="row mb-5">
          <div class="col-12">
            <h2>More Related Posts</h2>
          </div>
        </div>

        <div class="row align-items-stretch retro-layout">
          
          <div class="col-md-5 order-md-2">
            <a href="single.html" class="hentry img-1 h-100 gradient" style="background-image: url('images/img_4.jpg');">
              <span class="post-category text-white bg-danger">Travel</span>
              <div class="text">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span>February 12, 2019</span>
              </div>
            </a>
          </div>

          <div class="col-md-7">
            
            <a href="single.html" class="hentry img-2 v-height mb30 gradient" style="background-image: url('images/img_1.jpg');">
              <span class="post-category text-white bg-success">Nature</span>
              <div class="text text-sm">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span>February 12, 2019</span>
              </div>
            </a>
            
            <div class="two-col d-block d-md-flex">
              <a href="single.html" class="hentry v-height img-2 gradient" style="background-image: url('images/img_2.jpg');">
                <span class="post-category text-white bg-primary">Sports</span>
                <div class="text text-sm">
                  <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                  <span>February 12, 2019</span>
                </div>
              </a>
              <a href="single.html" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('images/img_3.jpg');">
                <span class="post-category text-white bg-warning">Lifestyle</span>
                <div class="text text-sm">
                  <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                  <span>February 12, 2019</span>
                </div>
              </a>
            </div>  
            
          </div>
        </div>

      </div>
    </div>


    <div class="site-section bg-lightx">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-5">
            <div class="subscribe-1 ">
              <h2>Subscribe to our newsletter</h2>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
              <form action="#" class="d-flex">
                <input type="text" class="form-control" placeholder="Enter your email address">
                <input type="submit" class="btn btn-primary" value="Subscribe">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
@include('layouts.footer')
