@extends('master/layout')
@section('content')
<style>
            .bg-contact{
                background-color:#d8e8ec;
            }
            h1{
                color: rgb(55,207,162);
            }
            
            .div6{
             height: auto;
                background-color:rgb(55,207,162);
            }
           .div4{
            height: auto;
                background-color: #003345;
            }
            .btn2{
                background-color:white;
                color:#0a768f;
                border:1px solid #989898;
             
            }
            .btn2:hover{
            border-left:4px solid #0a768f;
            color:#0a768f;
            text-decoration:none;
            }
            </style>
<div class="bg-contact" style=" font-family:sans-serif;">
<div data-aos="fade-up"
     data-aos-anchor-placement="center-center">
     <h1 class="text-center p-5 mt-5 w-100">About us</h1>
</div>

</div>
<div class="container container-sm mt-5">
 <div data-aos="fade-up"
     data-aos-duration="3000">
<div class="row  d-flex flex-xs-row-reverse ">
<div class="col-12 col-lg-7">
<h1>Our Story</h1>
<h4>WELCOME TO TILE AFRICA!</h4>
<p>  Create Your Dream Home With Us.
		From Stylish Bathrooms To Seamless Living Spaces
 	 Bringing The Outdoors Indoors. We've Got Everything You Need For
	  Floors, Walls, Bathrooms, Kitchen, Tools, Diy And Decor Advice. 
	  Trust Us With Your Space, Because With Us, Our Home Is Your Home.  </p>

<p>
			    We Fabricate And Install
			Kitchen Tops,Vanities,Bar Counters
            <p>
 We Building Your Kitchen With Granite And ALl Colored Board
. We Do Your Design By Our Best Carpenter
. We Do Your Tiling According Your Size We Have All Type Of Tiles
. We Make Cupboards All Designs
. We Make Your Toilet With Your Requirements</p>
</div>

<div class="col-12 col-lg-5">
<img src="{{asset('image/img11.jpg')}}" class="img-fluid mb-2">

</div>
</div>
</div>
</div>
                   <div class="container container-sm mt-5">
                    <div data-aos="fade-up"
     data-aos-duration="3000">
<div class="row   ">

<div class="col-12 col-lg-5">
<img src="{{asset('image/img15.jpg')}}" class="img-fluid mb-2">
</div>
<div class="col-12 col-lg-7" style=" font-family:sans-serif;">
<h1>Our Vision</h1>
<p> In the history of how we exchange value, we have only had 3 major changes: barter, money and finally digital cash. 
We see crypto as a revolution of the same magnitude. 
It appears as the best bet to become the foundation for a new financial paradigm that promotes fairness and trust..</p>

<p>Blockchain and crypto will bring more transparency, traceability, security, and offer seamless, free and instant transactions. However, 
it can be hard to navigate this new ecosystem alone. Thus, finding help and guidance in a great community is crucial..</p>
<p>We want people to find a reliable and exciting place where they can actively learn, have fun and benefit from the best opportunities.
This is why we created GAINS and this is what we are fighting for everyday.</p>
</div>


</div>
</div>
</div>
                    <div class="container div6 container-fluid-sm mt-5">
                    <div class="container container-sm py-3 text-white">
                    <h1 class="text-white  mb-4">Our Values</h1>
                    <div class="row">
                     <div data-aos="fade-up"
     data-aos-duration="3000">
                    <div class="col-12 col-lg-3">
                    <i class="far fa-lightbulb text-white fa-2x"></i>
              
                    </div>
                     <div class="col-12 col-lg-9 text-white">
                      <h2>Skin In The Game</h2>
                    <p>We invest in all the deals we offer. We perform extensive research by studying materials and gathering inputs from our
                    community and network of very well connected people. We directly talk to the executive team of the project and figure out what they are made of.</p>
                  
                    </div>
</div>

</div>                        
                        <div class="row">
                         <div data-aos="fade-up"
     data-aos-duration="3000">
                    <div class="col-12 col-lg-3 ">
                    <i class="fas fa-tree text-white fa-2x"></i>
                   
                    </div>
                     <div class="col-12 col-lg-9 text-white" style=" font-family:sans-serif;">
                      <h2>Long Term Vision</h2>
                    <p>Most people dream of getting rich fast. Contrarily, 
                    we are patient and have a long-term vision. We constantly improve by learning while staying independent and open-minded.</p>
                   <p>"Successful investing is getting others to agree with you??? later." - James Grant</p>
                     </div>
                   </div>


</div>                  
                       <div class="row">
                        <div data-aos="fade-up"
     data-aos-duration="3000">
                    <div class="col-12 col-lg-3 ">
                    <i class="fas fa-hands-helping text-white fa-2x"></i>
                   
                    </div>
                     <div class="col-12 col-lg-9 text-white mb-5" style=" font-family:sans-serif;">
                      <h2>Collaboration</h2>
                    <p>Connecting with people is at the heart of human nature and is necessary for
                    one???s well being. We share knowledge, discuss ideas and challenge opinions to grow together..</p>
                   <p class="mb-5">Nothing of significance was ever achieved by an individual acting alone.</p>
                     </div>
                    </div>

</div>
</div>

</div>    

         <div class="container container-sm mt-5">
         <h1 class="text-center mb-4">Our Team</h1>
         <div class="row">
         <div class="col-12 col-lg-4 mb-3 ">
         <div class="card">
    <img class="card-img-top img-fluid" src="{{asset('image/img5.jpg')}}" alt="Card image">
    <div class="card-body">
    
   <center> <img class="img-fluid text-center rounded-circle mt-n5" src="{{asset('image/team.jpg')}}" alt="Card image" height="120px" width="120px"> </center> 
      <h4 class="card-title text-center mt-2">Isaak</h4>
      <h6 class="card-text text-center">Carpenter</h6>
       <p class="text-center"><i class="fab fa-linkedin-in  text-primary fa-2x"></i></p>
      
   
       <hr>
     <center>  <a href="#" class="btn btn-outline-primary text-center">View Bio</a> </center>
    </div>
  </div>
         
         
         </div>
            <div class="col-12 col-lg-4 mb-3 ">
         <div class="card">
    <img class="card-img-top img-fluid" src="{{asset('image/img4.jpg')}}" alt="Card image">
    <div class="card-body">
    
   <center> <img class="img-fluid text-center rounded-circle mt-n5" src="{{asset('image/team1.jpg')}}" alt="Card image" height="120px" width="120px"> </center> 
      <h4 class="card-title text-center mt-2">John mello</h4>
      <h6 class="card-text text-center">Carpenter</h6>
       <p class="text-center"><i class="fab fa-linkedin-in  text-primary fa-2x"></i></p>
      
   
       <hr>
     <center>  <a href="#" class="btn btn-outline-primary text-center">View Bio</a> </center>
    </div>
  </div>
         
         
         </div>
            <div class="col-12 col-lg-4 mb-3 ">
         <div class="card">
    <img class="card-img-top img-fluid" src="{{asset('image/img2.jpg')}}" alt="Card image">
    <div class="card-body">
    
   <center> <img class="img-fluid text-center rounded-circle mt-n5" src="{{asset('image/team2.jpg')}}" alt="Card image" height="120px" width="120px"> </center> 
      <h4 class="card-title text-center mt-2">Vincent</h4>
      <h6 class="card-text text-center">Carpenter</h6>
       <p class="text-center"><i class="fab fa-linkedin-in  text-primary fa-2x"></i></p>
      
   
       <hr>
     <center>  <a href="#" class="btn btn-outline-primary text-center">View Bio</a> </center>
    </div>
  </div>
         
         
         </div>
         </div>
         </div>
         
         

         @endsection
@section('title','about')
@section('navb','active')
