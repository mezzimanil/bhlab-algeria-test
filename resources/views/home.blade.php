
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
	

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 
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

/* Since positioning the image, we need to help out the caption */



/* RESPONSIVE CSS
-------------------------------------------------- */


</style>
<body>
<main role="main">
	<div class="top-content">
		<div class="row no-gutters">
			<div class="col">
				<div id="carousel-example" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example" data-slide-to="1"></li>
						<li data-target="#carousel-example" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="{{ asset('image/d2.jpg') }}" class="d-block w-100" alt="img1">
						 <div class="carousel-caption">
							 <h1 class="wow fadeInLeftBig">Carousel Template with Bootstrap 4</h1>
							 <div class="description wow fadeInUp">
								 <p style="color: white">
									Plus de 12 ans d’expérience dans le domaine du diagnostic médical
								 </p>
							 </div>
						 </div>
						</div>
						<div class="carousel-item">
							<img src="{{ asset('image/2.jpg') }}" class="d-block w-100" alt="img2">
							<div class="carousel-caption">
							 <h1 class="wow fadeInLeftBig">This is Slide 2 of our Carousel</h1>
							 <div class="description wow fadeInUp">
								 <p style="color: white">
									 You can download this free template on <a href="https://azmind.com" target="_blank">AZMIND</a>.
								 </p>
							 </div>
						 </div>
						</div>
						<div class="carousel-item">
							<img src="{{ asset('image/dark.jpg') }}" class="d-block w-100" alt="img3">
							<div class="carousel-caption">
							 <h1 class="wow fadeInLeftBig">This is Slide 3, the Last One</h1>
							 <div class="description wow fadeInUp">
								 <p style="color: white">
									 After you download it, you can customize and use it as you like. That's great!
								 </p>
							 </div>
						 </div>
						</div>
					</div>
				 <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
					 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					 <span class="sr-only">Previous</span>
				 </a>
				 <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
					 <span class="carousel-control-next-icon" aria-hidden="true"></span>
					 <span class="sr-only">Next</span>
				 </a>
				</div>
			</div>
		</div>
 </div>
	<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-color:rgb(36,50,136);">
		

		<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
		Equipement et réactif de laboratoires
		</h3>
	</div>
</main>

<div class="container">
	
	   
	<!-- Welcome -->
	

	<!-- Welcome -->
	






	<!-- Intro -->


	
	
	<!-- Blog -->
	
	

</div>
      


		
</body>

@endsection

</html>
