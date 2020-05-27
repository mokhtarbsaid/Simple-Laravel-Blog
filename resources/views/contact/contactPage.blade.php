 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us</title>
@include('layouts.header')
    
    
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('images/img_4.jpg');">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              <h1 class="">Contact Us</h1>
              <p class="lead mb-4 text-white">You Can Leave a Message When You Need Contact Us</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section bg-light" >
      <div id="contact">
        <div class="container">
          <div class="row">
            <div class="col-md-7 mb-5"  id="contact">
              
              @if(Session::has('success'))   
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
              <form action="{{ route('contacts.contactPage') }}" method="POST" class="p-5 bg-light">
                @csrf
                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">First Name</label>
                    <input type="text" name="fname" class="form-control">
                    @error('fname')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">Last Name</label>
                    <input type="text" name="lname" class="form-control">
                    @error('lname')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                  </div>
                </div>

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label> 
                    <input type="email" name="email" class="form-control">
                    @error('email')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                  </div>
                </div>

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="subject">Subject</label> 
                    <input type="subject" name="subject" class="form-control">
                    @error('subject')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Message</label> 
                    <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                    @error('message')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-5">
              
              <div class="p-4 mb-3 bg-white">
                <p class="mb-0 font-weight-bold">Address</p>
                <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

                <p class="mb-0 font-weight-bold">Phone</p>
                <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                <p class="mb-0 font-weight-bold">Email Address</p>
                <p class="mb-0"><a href="#">youremail@domain.com</a></p>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    
@include('layouts.footer')