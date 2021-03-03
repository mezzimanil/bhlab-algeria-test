
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

body {
  padding-top: 3rem;
  padding-bottom: 3rem;
  color: #5a5a5a;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
  


}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
  background-color: #777;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
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
    margin-bottom: 1.25rem;
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
}
    
#myCarousel .carousel-control-next-icon
{
    width: 50px;
    height: 86px;
}
</style>
<body>


<div class="container">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img class="first-slide" src="{{ asset('image/image3.jpg') }}" alt="First slide">
			<div class="container">
			  <div class="carousel-caption text-left">
				<h1>Example headline.</h1>
				<p style="color: white">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
			  </div>
			</div>
		  </div>
		  <div class="carousel-item">
			<img class="second-slide" src="{{ asset('image/skyscraper2.jpg') }}" alt="Second slide">
			<div class="container">
			  <div class="carousel-caption">
				<h1>Another example headline.</h1>
				<p style="color: white">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
			  </div>
			</div>
		  </div>
		  <div class="carousel-item">
			<img class="third-slide" src="{{ asset('image/wizard-city2.jpg') }}" alt="Third slide">
			<div class="container">
			  <div class="carousel-caption text-right">
				<h1>One more for good measure.</h1>
				<p style="color: white">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
			  </div>
			</div>
		  </div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	   
	<!-- Welcome -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105">
		<div class="content-intro bg-white p-t-77 p-b-133">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-t-30 ml-5">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="{{ asset('image/skyscraper.jpg') }}" alt="IMG-INTRO"></a>
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


					<div class="col-md-5 p-t-30 ml-5">
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
	<section class="section-intro">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url('{{ asset('image/wizard-city.jpg') }}');">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				OUR Activities
			</h3>
		</div>

		<div class="content-intro bg-white p-t-77 p-b-133">
			<div class="container">
				<div class="row">
					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="{{ asset('image/skyscraper.jpg') }}" alt="IMG-INTRO"></a>
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
                    
                    <div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="{{ asset('image/image.jpeg') }}" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                 Desk
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
                                        discover Us
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
								<a href="#"><img src="{{ asset('image/image.jpeg') }}" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                become partner
								</h4></a>

								<p class="m-b-20">
                                    fkjsdlkjflskdjflsndlksfblkdnfvlkdnfblndb
                                    sdlkcslkdnvslkdnvslkdnvsldkvnlknlknlkn.
								</p>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>


	
	
	<!-- Blog -->
	<section class="section-blog bg-white p-t-115 p-b-123">
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
				<span class="tit2 t-center">
					Latest News
				</span>

			</div>

		
			<div class="row">
				<div class="col-md-4 p-t-30">
				
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="events.php"><img src="{{ asset('image/skyscraper.jpg') }}" alt="IMG-INTRO"></a>

							<div class="time-blog">
								10 Nov 2019
							</div>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="events.php"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								
                                    happy holydays
							</h4></a>

							<p class="m-b-20">
                                klsjfksjdfkdnfldnfld,nblkdnfblkdnfvlkdfvlkdnflvndf
                                dflvk,dkflnvldkfnvldnfvlkndflvkn
							</p>

							<a href="events.php" class="txt4">
								Continue Reading
								<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
			
			
				<div class="col-md-4 p-t-30">
				
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="events.php"><img src="{{ asset('image/image.jpeg') }}" alt="IMG-INTRO"></a>

							<div class="time-blog">
								15 Oct 2019
							</div>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								 space apps challenge
							</h4></a>

							<p class="m-b-20">
                                lfslkfdnvsnfdvsk,dvms,dvms,dvnsdkjcskdjcnsdncsd
                                csdkcnskdjcnskdjcnksjdcnksjdbcksdbcksjdckjdcb
							</p>

							<a href="blog-detail.html" class="txt4">
								Continue Reading
								<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
							</a>
						</div>
					</div>
                </div>
                
                
				<div class="col-md-4 p-t-30">
				
                <div class="blo1">
                    <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                        <a href="events.php"><img src="{{ asset('image/wizard-city.jpg') }}" alt="IMG-INTRO"></a>

                        <div class="time-blog">
                            15 Oct 2019
                        </div>
                    </div>

                    <div class="wrap-text-blo1 p-t-35">
                        <a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                             Ze Gamming
                        </h4></a>

                        <p class="m-b-20">
                            lfslkfdnvsnfdvsk,dvms,dvms,dvnsdkjcskdjcnsdncsd
                            csdkcnskdjcnskdjcnksjdcnksjdbcksdbcksjdckjdcb
                        </p>

                        <a href="blog-detail.html" class="txt4">
                            Continue Reading
                            <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>


			</div>
		
		</div>
	</section>

	

</div>
      


		<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
		<script src="{{ asset('js/jquery.backstretch.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
		<script src="{{ asset('js/waypoints.min.js') }}"></script>
		<script src="{{ asset('js/scripts.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

@endsection

</html>
