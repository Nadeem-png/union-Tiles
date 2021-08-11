<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name = "keywords" content = "king borad & granite, kitchen work,services, construction, granite work, tiles ,tar roads,bed room tiles, cupboard," />
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
      

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=STIX+Two+Math&display=swap" rel="stylesheet">

 <style>
*{
                font-family: 'STIX Two Math', serif;
            }
        .a1{
                color: white;
            }

            .a1:hover{
                color: lightcyan;
            }
             .navbar-nav{
            
            z-index:1000;
            background-color:#2f3640;
            }
           .navbar-collapse{
            
            z-index:1000;
        
            }
.back-to-top {
 position: fixed;
 bottom: 30px;
 Left: 12px;
 width: 55px;
 height: 55px;
 z-index: 9999;
 cursor: pointer;
 text-decoration: none;
 transition: opacity 0.2s ease-out;
 background-image: url(top.png);
}

.back-to-top:hover{
 opacity: 0.7;
}
.whatsapp{
 position: fixed;
 bottom: 30px;
 right: 12px;
 width: 55px;
 height: 55px;
 z-index: 9999;
 cursor: pointer;
 text-decoration: none;
 transition: opacity 0.2s ease-out;
}
.footer{
    background-color:#333;
    height:auto;
    color:white;
}

            
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
 
 //Check to see if the window is top if not then display button
 $(window).scroll(function(){
  // Show button after 100px
  var showAfter = 100;
  if ($(this).scrollTop() > showAfter ) { 
   $('.back-to-top').fadeIn();
  } else { 
   $('.back-to-top').fadeOut();
  }
 });
 
 //Click event to scroll to top
 $('.back-to-top').click(function(){
  $('html, body').animate({scrollTop : 0},800);
  return false;
 });
 
});
</script>
</head>
<body style="">
<nav class="navbar nav1 fixed-top   navbar-expand-lg"style=" padding:8px 8px;background-color:#2f3640 ">
<div class="w-25">
        <a href="/" class="navbar-brand">
            <img src="{{asset('image/KINGS Board and GRANITE-1.png')}}" class="img-fluid  " style="margin-left:50px;width:60px; height:60px">
        </a>
    </div>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mynav"><i class="fas fa-bars text-white"></i></button>
  
    <div class="navbar-collapse  collapse" id="mynav">
        <ul class="navbar-nav mt-3">
        <li class="nav-item" @yield('nava')>
                    <a href="/" class="nav-link a1  ml-5 font-weight-bold">Home</a>
                </li>
            <li class="nav-item" @yield('navb')>
                <a href="/service" class="nav-link a1 ml-5 font-weight-bold">Services</a>
            </li>

            <li class="nav-item" @yield('navc')>
                <a href="/about" class="nav-link a1 ml-5 font-weight-bold">About</a>
            </li>

            <li class="nav-item" @yield('navd')>
                <a href="/contact" class="nav-link a1 ml-5 font-weight-bold">Contact</a>
            </li>

            <li class="nav-item" @yield('nave')>
                <a href="/gallery" class="nav-link a1 ml-5 font-weight-bold">Gallery</a>
            </li>
            <li class="nav-item" @yield('nave')>
                <a href="/whatsapp" class="nav-link a1 ml-5 font-weight-bold">Whatsapp</a>
            </li>


        </ul>
    </div>
</nav>

@yield('content')

<!-- Back to top -->
<a href="#" class="back-to-top" ><i class="fas fa-chevron-up fa-1x text-center p-2 text-dark" style="background-color:rgba(55,207,162,0.6);" ></i></a>
<a href="/whatsapp" class="whatsapp" ><img src="{{asset('image/whatsapp.png')}}" alt="" class="img-fluid " height="55px" width="55px"></a>

<footer class="footer">
<div class="div container container-sm ">
<div class="row text-white py-5">
<div class="col-12 col-lg-4 col-md-5  mt-5">
<h5 class="text-white">About</h5>
<p> Create Your Dream Home With Us.
		From Stylish Bathrooms To Seamless Living Spaces
 	 Bringing The Outdoors Indoors. We've Got Everything You Need For
	  Floors, Walls, Bathrooms, Kitchen, Tools, Diy And Decor Advice. 
	  Trust Us With Your Space, Because With Us, Our Home Is Your Home.</p>

</div>
<div class="col-12 col-md-3 col-lg-3 mt-5  ">
<h5 class="text-white">QUICK LINKS</h5>
<ul class="text-white ul mt-4 m-0 p-0" style="list-style-type:none;">
<li class="mb-3"><a href="/about" style="text-decoration:none" class="text-white ">About Us</a></li>
<li class="mb-3"><a href="/service" style="text-decoration:none" class="text-white ">Services</a></li>
<li class="mb-3"><a href="/gallery" style="text-decoration:none" class="text-white ">Gallery</a></li>
<li class="mb-3"><a href="/contact" style="text-decoration:none" class="text-white ">Contact Us</a></li>
</ul>
</div>
<div class="col-12  col-lg-4 col-md-4 mt-5  mb-3">
<h5 class="text-white">SUBSCRIBE NEWSLETTER</h5>
<form>
<div class="input-group  mt-4">
<input type="text" placeholder="Enter Email" class="form-control border-secondary text-white bg-transparent">
<div class="input-group-append">
<button class="btn text-white" type="button" id="" style=" background-color: rgb(55,207,162)">send</button>
</div>

</div>

</form>

<h5 class="text-white mt-4 mb-2 ">FOLLOW US</h5>

<a href="https://www.facebook.com/585467618175415/posts/4007273682661441/" class=" ">
            <i class="fab fa-twitter text-white" style="font-size: 20px"></i>
        </a>
        <a href="https://www.facebook.com/1512917762095055/posts/4083165538403585/" class="ml-4 ">
            <i class="fab fa-facebook-f text-white" style="font-size: 20px"></i>
        </a>
        
        <a href="" class="ml-4 ">
            <i class="fab fa-instagram text-white" style="font-size: 20px"></i>
        </a>
<a href="" class="ml-4 ">
            <i class="fab fa-linkedin-in text-white" style="font-size: 20px"></i>
        </a>
</div>
</div>
</div>
<hr class="bg-dark-50">
<div class="container">
<div class="row py-4">
<div class="col-12 col-lg-5 text-center">
<img src="{{asset('image/KINGS Board and GRANITE.png')}}" alt="" class="img-fluid bg-white" width="40%" height="100px">
</div>
<div class="col-12 col-lg-7 text-center mt-4">
<p>All Rights Reserved By King Board & Granite &copy; 2021</p>
</div>
</div>
</div>
</footer>

<script>
  AOS.init();
</script>
</body>
</html>
