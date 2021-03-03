
@extends('layouts.app')
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	

	
    <meta name="viewport" content="width=device-width" />
	<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

 <!-- CSS -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	

	<!--     Fonts and icons     -->
	
	<!-- CSS Files -->
	

    
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
	<link href="{{ asset('css/boot.css') }}" rel="stylesheet">

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

</style>
<body>

<main>

	
	
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img class="d-block w-100" src="..." alt="First slide">
		  </div>
		  <div class="carousel-item">
			<img class="d-block w-100" src="..." alt="Second slide">
		  </div>
		  <div class="carousel-item">
			<img class="d-block w-100" src="..." alt="Third slide">
		  </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
			
			 

</main>
<div class="container">
	
	   
	<!-- Welcome -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
							    
                                Title  
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							Welcome
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
                            
                        kljdsflksjdgldnfvndfbndkbjndkfnbdkfnbdkfnbdkfnbdnfb
                        dfbldnfbdnfbn v;cnvkjlsdkncsdnsqnvsnqvklsncv
                        sdvnsdlkdclksndlknv,,lkcnqkncvnnmlkncvnvnv

						</p>

					
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="{{ asset('image/image.jpeg') }}" alt="IMG-OUR">
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
