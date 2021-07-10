@extends('master/layout')
@section('content')
<style>
        /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 650px;
  }
  .bg{
            background-color: rgb(55,207,162);
            height:auto;
        }
        .div3{
         background-color:#ccc;
         height:auto;
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
        <button class="btn text-white px-4 py-2" style=" background-color: rgb(55,207,162)">Get started</button>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/img4.jpg')}}" class="img-fluid" alt="Chicago" width="1100" height="700">
      <div class="carousel-caption">
      <h3>Buy And Sall Here</h3>
      <p>We had such a great time in LA!</p>
        
        <button class="btn text-white px-4 py-2" style=" background-color: rgb(55,207,162)">Get started</button>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/img3.jpg')}}" class="img-fluid" alt="New York" width="1100" height="700">
      <div class="carousel-caption">
      <h3>Buy And Sall Here</h3>
      <p>We had such a great time in LA!</p>
        <button class="btn px-4 py-2 text-white" style=" background-color: rgb(55,207,162)">Get started</button>
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
<div class="col-12 col-lg-4 col-md-6 mb-2">
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
<div class="col-12 col-lg-4 col-md-6 mb-2 ">
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

<div class="container container-sm mt-5">
<h1 style="color: rgb(55,207,162)" class="py-3">Company Owner</h1>
<div class="row">
<div class="col-12 col-lg-4 col-md-4 mb-3">
<img src="{{asset('image/owner1.jpg')}}" alt="" class="img-fluid">
<div class="p-4" style="background-color:#37cfa2;">
<h4>NAME</h4>
<p>Lorem ipsum dolor sit amet consectetur</p>
</div>
</div>
<div class="col-12 col-lg-4 col-md-4 mb-3">
<img src="{{asset('image/owner2.jpg')}}" alt="" class="img-fluid">
<div class="p-4" style="background-color:#37cfa2;">
<h4>NAME</h4>
<p>Lorem ipsum dolor sit amet consectetur</p>
</div>
</div>
<div class="col-12 col-lg-4 col-md-4 mb-3">
<img src="{{asset('image/owner.jpg')}}" alt="" class="img-fluid">
<div class="p-4" style="background-color:#37cfa2;">
<h4>NAME</h4>
<p>Lorem ipsum dolor sit amet consectetur</p>
</div>
</div>
</div>

</div>

<div class="bg">
    <h1 class="text-center py-5 mb-3">HOW IT WORKS</h1>
 <div class="row container-fluid">
    <div class="col-12 col-lg-4 col-md-4 mb-4">
        <center>
         <i class="fas fa-home fa-2x mb-2"></i>
         <h6 class="mb-3">FIND PROPERTY.</h6>
         <p class="">Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.</p>
        </center>
    </div>

     <div class="col-12 col-lg-4 col-md-4 mb-4">
         <center>
             <i class="fas fa-dollar-sign fa-2x mb-2"></i>
             <h6 class="mb-3">BUY PROPERTY.</h6>
             <p class="">Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.</p>
         </center>
     </div>

     <div class="col-12 col-lg-4 col-md-4 mb-4">
         <center>
             <i class="fas fa-warehouse fa-2x mb-2 "></i>
             <h6 class="mb-3">OUTSTANDING HOUSES.</h6>
             <p class="">Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.</p>
         </center>
     </div>
 </div>
</div>
<div class="container mt-5 container-sm">
<div class="row">
<div class="col-12 col-lg-5 col-md-5 mb-3">
<img src="{{asset('image/img3.jpg')}}" alt="" class="img-fluid">
</div>
<div class="col-12 col-lg-7 col-md-7 mb-4">
<h1 style="color: rgb(55,207,162)" class="ml-5 mb-3">About</h1>
<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
<h5>Est qui eos quasi ratione nostrum excepturi id recusandae fugit omnis ullam pariatur itaque nisi voluptas impedit Quo suscipit omnis iste velit maxime.</h5>
<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
<h5>Est qui eos quasi ratione nostrum excepturi id recusandae fugit omnis ullam pariatur itaque nisi voluptas impedit Quo suscipit omnis iste velit maxime.</h5>
</div>
</div>

</div>


  <div class="div3 bg-light">
  <div class="container container-sm mt-5">
  <h1 class="text-center py-5" style="color: rgb(55,207,162)">SERVICES</h1>
  <div class="row">
  <div class="col-12 col-lg-4 col-md-6 mb-3">
  <div class="container">
  <div class="row">
  <div class="col-3 ">
<img src="{{asset('image/kitchen.png')}}" class="img-fluid" alt="Los Angeles">
</div>
  <div class="col-9 ">
  <h3>FIND PROPERTY</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
  </div>
  </div>
  </div>
  </div>
  <div class="col-12 col-lg-4 col-md-6 mb-3">
  <div class="container">
  <div class="row">
  <div class="col-3 ">
<img src="{{asset('image/bedroom.png')}}" class="img-fluid" alt="Los Angeles" width="" height="">
</div>
  <div class="col-9 ">
  <h3>BUY PROPERTY</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
  </div>
  </div>
  </div>
  </div>
  <div class="col-12 col-lg-4 col-md-6 mb-3">
  <div class="container">
  <div class="row">
  <div class="col-3 ">
<img src="{{asset('image/toilet.png')}}" class="img-fluid" alt="Los Angeles" width="" height="">
</div>
  <div class="col-9 ">
  <h3>BEAUTIFUL HOME</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
  </div>
  </div>
  </div>
  </div>
  <div class="col-12 col-lg-4 col-md-6 mb-3">
  <div class="container">
  <div class="row">
  <div class="col-3 ">
<img src="{{asset('image/tile.png')}}" class="img-fluid" alt="Los Angeles" width="" height="">
</div>
  <div class="col-9 ">
  <h3>FIND PROPERTY</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
  </div>
  </div>
  </div>
  </div>
  <div class="col-12 col-lg-4 col-md-6 mb-3">
  <div class="container">
  <div class="row">
  <div class="col-3 ">
<img src="{{asset('image/cupboard.png')}}" class="img-fluid" alt="Los Angeles" width="" height="">
</div>
  <div class="col-9 ">
  <h3>BUY PROPERTY</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
  </div>
  </div>
  </div>
  </div>
  <div class="col-12 col-lg-4 col-md-6 mb-3">
  <div class="container">
  <div class="row">
  <div class="col-3 ">
<img src="{{asset('image/workspace.png')}}" class="img-fluid" alt="Los Angeles" width="" height="">
</div>
  <div class="col-9 ">
  <h3>BEAUTIFUL HOME</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>



<div class="container container-sm mt-5">
       <h1 class="text-center" style="color: rgb(55,207,162);margin-top: 200px">Customers</h1>
       <div class="row ">
           <div class="col-12 col-lg-6 col-md-6">
               <img src="{{asset('image/man1.webp')}}" class="rounded-circle" alt="Cinque Terre" width="75" height="75">
               <h6 class="d-inline ml-4">ALLISON HOLMES</h6>
               <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
           </div>

           <div class="col-12 col-lg-6 col-md-6">
               <img src="{{asset('image/man2.webp')}}" class="rounded-circle" alt="Cinque Terre" width="75" height="75">
               <h6 class="d-inline ml-4">JAMES PHELPS</h6>
               <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
           </div>

           
               <div class="col-12 col-lg-6 col-md-6">
                   <img src="{{asset('image/man3.webp')}}" class="rounded-circle" alt="Cinque Terre" width="75" height="75">
                   <h6 class="d-inline ml-4">NESTOR HELSIN</h6>
                   <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
               </div>

               <div class="col-12 col-lg-6 col-md-6">
                   <img src="{{asset('image/man1.webp')}}" class="rounded-circle" alt="Cinque Terre" width="75" height="75">
                   <h6 class="d-inline ml-4">ALLISON HOLMES</h6>
                   <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
               </div>

           

       </div>
   </div>
  

  
<div class="contact bg-light" style="background-color:#ccc;">
<div class="container py-5">
<h1 class="text-center mt-5" style="color: rgb(55,207,162)">Contact-us</h1>
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
<p>Location: Shed 3, 13 Hawthorne street kokstad, south Africa</p>
<h4>Phone</h4>
<p style="color:#079992">+880717454141</p>
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
