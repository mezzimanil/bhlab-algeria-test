
@extends('layouts.app')
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	

	
    <meta name="viewport" content="width=device-width" />
 <!-- CSS -->


	<!--     Fonts and icons     -->
	
	<!-- CSS Files -->
	

    
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">

@section('content')
<style>
/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */




/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  
   


}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 80rem;
  background-color: #777;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 80rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}
#myCarousel .carousel-control-prev-icon 
{
    width: 50px;
    height: 86px;
	color: black;
}
    
#myCarousel .carousel-control-next-icon
{
    width: 50px;
    height: 86px;
	color: black;
	border-radius: 10px;
}
</style>
<body>
<main role="main">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img class="first-slide" src="{{ asset('image/labo.jpg') }}" alt="First slide">
			<div class="container">
			  <div class="carousel-caption text-left">
				
				<h1 style="color: rgb(26, 2, 2)">12 ans expertise dans le domaine du diagnostic médical .</p>
				
				<p><a class="btn btn-lg btn-primary" href="#" role="button">voir plus</a></p>
			  </div>
			</div>
		  </div>
		  <div class="carousel-item">
			<img class="second-slide" src="{{ asset('image/part.JPG') }}" alt="Second slide">
			<div class="container">
			  <div class="carousel-caption">
				<h1>Another example headline.</h1>
				<p style="color: white">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
			  </div>
			</div>
		  </div>
		  <div class="carousel-item">
			<img class="third-slide" src="{{ asset('image/coro.jpg') }}" alt="Third slide">
			<div class="container">
			  <div class="carousel-caption text-right">
				<h1>One more for good measure.</h1>
				<p style="color: white">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
			  </div>
			</div>
		  </div>
		</div>
		<a class="carousel-control-prev " href="#myCarousel" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next "  href="#myCarousel" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	
</main>

<div class="container">
	
	   
	<!-- Welcome -->
	<section class="section-welcome bg1-pattern  p-b-105">
	
		<div class="content-intro bg-white p-t-77 p-b-133">
			<div class="container">
				<div class="row">
					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="{{ asset('image/wizard-city.jpg') }}" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                Buy products
								</h4></a>

								<p class="m-b-20">
                                    fkjsdlkjflskdjflsndlksfblkdnfvlkdnfblndb
                                    sdlkcslkdnvslkdnvslkdnvsldkvnlknlknlkn.
								</p>

							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="{{ asset('image/wizard-city.jpg') }}" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Organise events
								</h4></a>

								<p class="m-b-20">
                                    ks,dflk,sdlfknsld,nvsdlknvlsdknvlskdnvsd
                                    vslkdnvlskndvlksndvlknsdlkvnsldkvn
								</p>

							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="{{ asset('image/wizard-city.jpg') }}" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								 Blog
								</h4></a>

								<p class="m-b-20">
                                    kdjfsdlkflskdjflskjdfklsjdflskjdflksjdflskjdfs
                                    sdflkjsdlfkjslkdfjslkdjflskjdflskjdflksjdf
								</p>

							</div>
						</div>
                    </div>
                    
                    

				</div>
			</div>
		</div>
	</section>


	<!-- Welcome -->
	






	<!-- Intro -->


	
	
	<!-- Blog -->
	
	

</div>
      


		
</body>

@endsection

</html>
