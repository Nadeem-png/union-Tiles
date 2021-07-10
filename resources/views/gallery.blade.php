@extends('master/layout')
@section('content')
<style>
/* Only for demo purposes. */
body {
	font-family: "Fira Sans", sans-serif;
	background-color: #f1f1f1;
	margin: 85px 0;
}
/* Start Gallery CSS */
.thumb {
	margin-bottom: 15px;
}
.thumb:last-child {
	margin-bottom: 0;
}
/* CSS Image Hover Effects: https://www.nxworld.net/tips/css-image-hover-effects.html */
.thumb 
figure img {
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out;
}
.thumb 
figure:hover img {
  -webkit-filter: grayscale(0);
  filter: grayscale(0);
}


</style>
<script>
$(document).ready(function() {
	$(".gallery").magnificPopup({
		delegate: "a",
		type: "image",
		tLoading: "Loading image #%curr%...",
		mainClass: "mfp-img-mobile",
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
		}
	});
});

</script>
<section class="container">
	<h1 class="my-4 text-center text-lg-left" style="color: rgb(55,207,162);">Image Gallery</h1>
	<div class="row gallery">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img1.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img1.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img2.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img2.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img3.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img3.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img4.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img4.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img5.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img5.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img16.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img16.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img17.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img17.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img18.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img18.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img19.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img19.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img20.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img20.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img21.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img21.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img22.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img22.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/2.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/2.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/4.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/4.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img12.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img12.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img13.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img13.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img6.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img6.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img26.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img26.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img23.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img23.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a href="image/img25.jpg">
				<figure><img class="img-fluid img-thumbnail" src="{{asset('image/img25.jpg')}}" alt="Random Image"></figure>
			</a>
		</div>



	</div>
</section>




@endsection
@section('title','Gallery')
@section('nave','active')