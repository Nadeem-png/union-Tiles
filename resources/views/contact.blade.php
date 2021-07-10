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
                background-color: #1b4b72;
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
<div class="bg-contact">
<div data-aos="fade-up"
     data-aos-anchor-placement="center-center">
     <h1 class="text-center p-5 mt-5 w-100">Contact Us</h1>
</div>

</div>


<div class="container container-sm mt-5 py-3">
<div data-aos="fade-up"
     data-aos-duration="3000">
     <div class="row">
      <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 mt-2">
    <h1 class="mb-3" style="margin-top:30px">Get in touch</h1>
        <h6>Tell us about your projects, we are excited <br> to hear from you</h6>
        <h4>Address</h4>
<p>Location: Shed 3, 13 Hawthorne street kokstad, south Africa</p>
<h4>Phone</h4>
<p style="color:rgb(55,207,162)">+880717454141</p>
<h4>Email Address</h4>
<p style="color:rgb(55,207,162)">youremail@domain.com</p>
      </div>
   
     <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 div3">
        <form action="" class="container mb-5 mt-4">
            <label class="font-weight-bold text-dark">Full Name:</label>
            <input type="text" placeholder="Full Name..." class="form-control">

            <label class="text-dark font-weight-bold">Email:</label>
            <input type="email" placeholder="Email..." class="form-control">

            <label class="font-weight-bold text-dark">Your Message:</label>
            <textarea type="text" placeholder="Your Message" class="form-control" rows="5" style="resize: none"></textarea>

            <a href="" class="btn  mt-3 py-2 px-4 text-white  " style=" background-color:rgb(55,207,162);">Send Massege</a>
        </form>


</div>
    </div>

</div>
</div>
<div class="container mt-5 text-lg-center">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3435.714110132857!2d29.422117815127198!3d-30.557380381698632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDMzJzI2LjYiUyAyOcKwMjUnMjcuNSJF!5e0!3m2!1sen!2s!4v1625908293368!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<hr>
<p class="py-4 text-center">
You can also reach us at
<a href=""> info@profitbank.io
</a></p>
@endsection
@section('title','contact')
@section('navd','active')