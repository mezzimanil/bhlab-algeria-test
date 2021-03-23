
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


<style>


/***** Top content *****/

.top-content { width: 100%; }

.top-content h1 { margin-top: 25px; color: #fff; }
.top-content .description { margin: 30px 0 10px 0; }
.top-content .description p { color: #fff; color: rgba(255, 255, 255, 0.8); }
.top-content .description a { color: #fff; color: rgba(255, 255, 255, 0.8); border-color: #fff; border-color: rgba(255, 255, 255, 0.8); }
.top-content .description a:hover,
.top-content .description a:focus { color: #fff; color: rgba(255, 255, 255, 0.8); }

.top-content .carousel-caption { bottom: 200px; }

.top-content .carousel-indicators li { width: 16px; height: 16px; margin-left: 5px; margin-right: 5px; border-radius: 50%; }


/***** Section 1 *****/


</style>
<body>
	@section('content')
<main role="main">
	@include('home2')
	<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-color:rgb(36,50,136);">
		

		<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
		Equipement et réactif de laboratoires
		</h3>
	</div>
</main>

<div class="container">
	
	   
	<!-- Welcome -->
	
	<div class="section-1-container section-container">
		<div class="content-intro bg-white p-t-77 p-b-133">
			
				<div class="row">
					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="{{ asset('image/pre.jpg') }}" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                Présentation
								</h4></a>

								

								<a href="#" class="txt4">
									Learn More
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a href="#"><img src="{{ asset('image/pa.png') }}" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Fournisseurs
								</h4></a>

							

								<a href="#" class="txt4">
									Learn More
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
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
								Support Technique
								</h4></a>

							

								<a href="#" class="txt4">
									Learn More
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
                    </div>
				</div>
		</div>
	</div>

	<!-- Section 2 -->
	
	<!-- Welcome -->
	






	<!-- Intro -->


	
	
	<!-- Blog -->
	
	

</div>
      


		
</body>

@endsection

</html>
