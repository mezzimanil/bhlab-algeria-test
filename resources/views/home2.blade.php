<!doctype html>
<html lang="en">

    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Bootstrap 4 Carousel Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
      
       

        <!-- Favicon and touch icons -->
       
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('image/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('image/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('image/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('image/apple-touch-icon-57-precomposed.png') }}">

    </head>

    <body>

		<!-- Top menu -->
	

        <!-- Top content -->
        <div class="top-content mt-5">
			<div class="row no-gutters">
				<div class="col">
					<div id="carousel-example" class="carousel slide mt-5" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example" data-slide-to="1"></li>
							<li data-target="#carousel-example" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="{{ asset('image/d2.jpg') }}" class="d-block w-100" alt="img1">
							 <div class="carousel-caption">
								 <h1 class="wow fadeInLeftBig" style="font-size: 50px">Plus de 12 ans d’expérience dans le domaine du diagnostic médical</h1>
								 <div class="description wow fadeInUp">
								
								 </div>
							 </div>
							</div>
							<div class="carousel-item">
								<img src="{{ asset('image/d3.jpg') }}" class="d-block w-100" alt="img2">
								<div class="carousel-caption">
								 <h1 class="wow fadeInLeftBig" style="font-size: 50px" >Plus de 15 marques pour répondre aux différents besoins de nos partenaire</h1>
								 <div class="description wow fadeInUp">
									
								 </div>
							 </div>
							</div>
							<div class="carousel-item">
								<img src="{{ asset('image/dark.jpg') }}" class="d-block w-100" alt="img3">
								<div class="carousel-caption">
								 <h1 class="wow fadeInLeftBig" style="font-size: 50px">Présent dans la crise de la COVID </h1>
								 <div class="description wow fadeInUp">
									
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

     

        <!-- Javascript -->
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
        <script src="{{ asset('js/jquery.backstretch.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>

	
    </body>

</html>