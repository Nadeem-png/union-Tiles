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
     <h1 class="text-center p-4 mt-5 w-100">Contact Us</h1>
</div>

</div>


<div class="container container-sm mt-5 py-3">
<div data-aos="fade-up"
     data-aos-duration="3000">
     <div class="row">
      <div class="col-lg-6 col-sm-12 col-xs-12 col-md-6 mt-2">
    <h1 class="mb-3" style="margin-top: 100px">Get in touch</h1>
        <h6>Tell us about your projects, we are excited <br> to hear from you</h6>
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
<hr>
<p class="py-4 text-center">
You can also reach us at
<a href=""> info@profitbank.io
</a></p>
@endsection
@section('title','contact')
@section('navd','active')