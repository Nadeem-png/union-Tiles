@extends('master/layout')
@section('content')
<style>
        /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 650px;
  }
    </style>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('image/img5.jpg')}}" class="img-fluid" alt="Los Angeles" width="1100" height="700">
      <div class="carousel-caption">
      <h3>Buy And Sall Here</h3>
      <p>We had such a great time in LA!</p>
        <button class="btn btn-success px-4 py-2">Get started</button>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/img4.jpg')}}" class="img-fluid" alt="Chicago" width="1100" height="700">
      <div class="carousel-caption">
      <h3>Buy And Sall Here</h3>
      <p>We had such a great time in LA!</p>
        
        <button class="btn btn-success px-4 py-2">Get started</button>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/img3.jpg')}}" class="img-fluid" alt="New York" width="1100" height="700">
      <div class="carousel-caption">
      <h3>Buy And Sall Here</h3>
      <p>We had such a great time in LA!</p>
        <button class="btn btn-success px-4 py-2">Get started</button>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="container container-sm mt-5">
<div class="row">
<div class="col-12 col-lg-4 col-md-6 mb-2">
<div class="card h-100 ">
                <img class="card-img-top" src="{{asset('image/img7.jpg')}}" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">HD17 19 UTICA</h4>
                    <p class="card-text">New York - USA</p>
                    <p>$2000</p>
                </div>
            </div>
</div>
<div class="col-12 col-lg-4 col-md-6 mb-2">
<div class="card h-100">
                <img class="card-img-top" src="{{asset('image/img8.jpg')}}" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">HD17 19 UTICA</h4>
                    <p class="card-text">New York - USA</p>
                    <p>$2000</p>
                </div>
            </div>
</div>
<div class="col-12 col-lg-4 col-md-6">
<div class="card h-100">
                <img class="card-img-top" src="{{asset('image/img7.jpg')}}" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">HD17 19 UTICA</h4>
                    <p class="card-text">New York - USA</p>
                    <p>$2000</p>
                </div>
            </div>
</div>
<div class="col-12 col-lg-4 col-md-6 mb-2">
<div class="card h-100 ">
                <img class="card-img-top" src="{{asset('image/img7.jpg')}}" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">HD17 19 UTICA</h4>
                    <p class="card-text">New York - USA</p>
                    <p>$2000</p>
                </div>
            </div>
</div>
<div class="col-12 col-lg-4 col-md-6 mb-2">
<div class="card h-100">
                <img class="card-img-top" src="{{asset('image/img8.jpg')}}" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">HD17 19 UTICA</h4>
                    <p class="card-text">New York - USA</p>
                    <p>$2000</p>
                </div>
            </div>
</div>
<div class="col-12 col-lg-4 col-md-6">
<div class="card h-100">
                <img class="card-img-top" src="{{asset('image/img7.jpg')}}" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">HD17 19 UTICA</h4>
                    <p class="card-text">New York - USA</p>
                    <p>$2000</p>
                </div>
            </div>
</div>
</div>
</div>


<div class="contact bg-light" style="background-color:#ccc;">
<div class="container py-5">
<h1 class="text-center mt-5" style="color:#079992">Contact-us</h1>
<div class="row">
<div class="col-12 col-lg-7 col-md-6 mt-5">
<div class="card p-5">
<h4>GET IN TOUCH</h4>
<form>
<div class="form-group mt-3">
                            <label style="font-weight: bold;" class="mb-2">Name</label>
                            <input type="text" placeholder="Enter name.." class="form-control @error('fname')is-invalid @enderror" name="fname" value="{{old('fname')}}">
                        </div>
                    
                        <div class="form-group mt-3">
                            <label style="font-weight: bold;" class="mb-2">Email</label>
                            <input type="text" placeholder="Enter Email Address" class="form-control @error('email')is-invalid @enderror" name="email" value="{{old('email')}}">
                        </div>
                        <div class="form-group mt-3">
                            <label style="font-weight: bold;" class="mb-2">Comment or Message </label>
                            <textarea class="form-control  @error('remarks')is-invalid @enderror" placeholder="Type Message..." style="resize: none;" rows="5" name="remarks" >{{old('remarks')}}</textarea>
                        </div>
                        <button class="btn border border-white text-white px-4 mt-4 ml-4">Submit</button>
                        @csrf


</form>
</div>
</div>
<div class="col-12 col-lg-5 col-md-6 mt-5">
<div class="card p-4">
<div class="card-text">
<h4>Address</h4>
<p>203 Fake St. Mountain View, San Francisco, California, USA</p>
<h4>Phone</h4>
<p style="color:#079992">+1 232 3235 324</p>
<h4>Email Address</h4>
<p style="color:#079992">youremail@domain.com</p>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
@section('title','Home')
@section('nava','active')