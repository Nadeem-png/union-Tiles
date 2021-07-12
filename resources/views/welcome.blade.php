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
<div class="container">
    <h1 class="text-center py-5 mb-3">Construction work</h1>
 <div class="row">
    <div class="col-12 col-lg-3 col-md-3 mb-4 text-center">
         <img src="{{asset('image/motorway.png')}}" alt="motorway" class="img-fluid w-25 mb-1 h-25">
         <h4 class="mb-1">Tar Roads </h4>
         <p class="">We Construct Tar Roads With Your Requirements.</p>
        
    </div>

     <div class="col-12 col-lg-3 col-md-3  mb-4 text-center">
         
     <img src="{{asset('image/highway.png')}}" alt="highway" class="img-fluid w-25 mb-1 h-25">
         <h4 class="mb-1">Tar Driveways </h4>
         <p class="">We Construct Tar Driveways With Your Requirements.</p>
        
     </div>

     <div class="col-12 col-lg-3 col-md-3  mb-4 text-center">
         
     <img src="{{asset('image/hump.png')}}" alt="hump" class="img-fluid w-25 mb-1 h-25">
         <h4 class="mb-1">Speed Humps </h4>
         <p class="">We Construct All speed Humps With Your Requirements.</p>
        
     </div>
     <div class="col-12 col-lg-3 col-md-3  mb-4 text-center">
         
     <img src="{{asset('image/car-garage.png')}}" alt="car-garage" class="img-fluid w-25 mb-1 h-25">
         <h4 class="mb-1">Carports </h4>
         <p class="">We Construct All type of carports With Your Requirements.</p>
 </div>
 <div class="col-12 col-lg-3 col-md-3  mb-4 text-center">
         
         <img src="{{asset('image/tennis-court.png')}}" alt="tennis-court" class="img-fluid w-25 mb-1 h-25">
             <h4 class="mb-1">Tennis Courts </h4>
             <p class="">We Construct Tennis Courts With Your Requirements.</p>
            
         </div>
         <div class="col-12 col-lg-3 col-md-3  mb-4 text-center">
         
         <img src="{{asset('image/wooden-fence.png')}}" alt="wooden-fence" class="img-fluid w-25 mb-1 h-25">
             <h4 class="mb-1">Fencing  </h4>
             <p class="">We make All types of Fencing With Your Requirements.</p>
            
         </div>
         <div class="col-12 col-lg-3 col-md-3  mb-4 text-center">
         
         <img src="{{asset('image/concrete.png')}}" alt="concrete" class="img-fluid w-25 mb-1 h-25">
             <h4 class="mb-1">Concrete Driveways </h4>
             <p class="">We Construct Concrete Driveways With Your Requirements.</p>
            
         </div>
         <div class="col-12 col-lg-3 col-md-3  mb-4 text-center">
         
         <img src="{{asset('image/fence.png')}}" alt="fence" class="img-fluid w-25 mb-1 h-25">
             <h4 class="mb-1">Clear View Gates  </h4>
             <p class="">We make Clear View Gates With Your Requirements.</p>
            
         </div>
 </div>
 </div>
</div>
<div class="container mt-5 container-sm">
<div class="row">
<div class="col-12 col-lg-5 col-md-5 mb-3 mt-5">
<img src="{{asset('image/img3.jpg')}}" alt="" class="img-fluid">
</div>
<div class="col-12 col-lg-7 col-md-7 mb-4">
<h1 style="color: rgb(55,207,162)" class=" mb-3">About</h1>
<p>We got All Colored
 		Board And Granite
      We CuttingYour Board Your Measurements
   We Supply All Type Of Meterial For Your House
  Custom Ceillins and Drawalling Interior Makeovers, Bathroom Renovations and Specialized Lighting

   </p>
<p>We Make All Type Of Tables (PC Table, Daining Table etc) ANd All Colored Board
. We Make Your TV Lanch With Your Requiements</p>
<p>
 We Building Your Kitchen With Granite And ALl Colored Board
. We Do Your Design By Our Best Carpenter
. We Do Your Tiling According Your Size We Have All Type Of Tiles
. We Make Cupboards All Designs
. We Make Your Toilet With Your Requirements</p>
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
  <h3>Kitchen Work</h3>
  <p>We Building Your Kitchen With Granite And All Colored Board and We Do Your Design By Our Best Carpenter.</p>
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
  <h3>BedRoom Work</h3>
  <p>We Make Your Bedrooms With Your Requirements and We Do Your Design By Our Best Carpenter</p>
  </div>
  </div>
  </div>
  </div>
  <div class="col-12 col-lg-4 col-md-6 mb-3">
  <div class="container">
  <div class="row">
  <div class="col-3 ">
<img src="{{asset('image/tower.png')}}" class="img-fluid" alt="Los Angeles" width="" height="">
</div>
  <div class="col-9 ">
  <h3>Electricity Work</h3>
  <p>Do Electric Work and We Do All your Electricity Work by our best electrician. </p>
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
  <h3>Lay The Tiles</h3>
  <p>We Do Your Tiling According Your Size We Have All Type Of Tiles</p>
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
  <h3>Cupboard Work</h3>
  <p>We Make Cupboards All Designs and We Do Your Design By Our Best Carpenter</p>
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
  <h3>PC Table</h3>
  <p>We Make All Type Of Tables (PC Table, Daining Table etc) And All Colored Board.</p>
  </div>
  </div>
  </div>
  </div>
  
  <div class="col-12 col-lg-4 col-md-6 mb-3">
  <div class="container">
  <div class="row">
  <div class="col-3 ">
<img src="{{asset('image/toilet.png')}}" class="img-fluid" alt="Los Angeles">
</div>
  <div class="col-9 ">
  <h3>Toilets Work</h3>
  <p>We Make Your Toilet With Your Requirements and We Do Your Design By Our Best Plumber</p>
  </div>
  </div>
  </div>
  </div>
  
  <div class="col-12 col-lg-4 col-md-6 mb-3">
  <div class="container">
  <div class="row">
  <div class="col-3 ">
<img src="{{asset('image/tiles.png')}}" class="img-fluid" alt="Los Angeles">
</div>
  <div class="col-9 ">
  <h3>Lay The Stone</h3>
  <p>We Do Your Tiling According Your Size We Have All Type Of Tiles</p>
  </div>
  </div>
  </div>
  </div>
  
  <div class="col-12 col-lg-4 col-md-6 mb-3">
  <div class="container">
  <div class="row">
  <div class="col-3 ">
<img src="{{asset('image/pollution.png')}}" class="img-fluid" alt="Los Angeles">
</div>
  <div class="col-9 ">
  <h3>Sewerage Work</h3>
  <p>Do Sewerage Work and We Do Your Sewerage Work By Our Best Plumber. </p>
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
