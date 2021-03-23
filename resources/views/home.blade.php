
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
/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */




/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */

/* Since positioning the image, we need to help out the caption */



/* RESPONSIVE CSS
-------------------------------------------------- */



.medium-paragraph { font-size: 17px; line-height: 32px; }

::-moz-selection { background: #8542a0; color: #fff; text-shadow: none; }
::selection { background: #8542a0; color: #fff; text-shadow: none; }


/***** General style, all sections *****/

.section-container { margin: 0 auto; padding-bottom: 80px; }

.section-container-gray-bg { background: #f8f8f8; }

.section-container-image-bg, 
.section-container-image-bg h2, 
.section-container-image-bg h3 { color: #fff; }

.section-container-image-bg .divider-1 span { border-color: #fff; }

.section-description { margin-top: 60px; padding-bottom: 10px; }

.section-description p { margin-top: 20px; padding: 0 120px; }
.section-container-image-bg .section-description p { opacity: 0.8; }

.section-bottom-button { padding-top: 60px; }


/***** Divider *****/

.divider-1 span { display: inline-block; width: 200px; border-bottom: 1px dotted #aaa; }


/***** Top menu *****/




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

.section-1-box { padding-top: 30px; text-align: left; }

.section-1-box .section-1-box-icon {
	width: 80px; height: 80px; margin: 0 auto;
	
	background: #8542a0; /* Old browsers */
	background: -moz-linear-gradient(top,  #a365bc 0%, #8542a0 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a365bc), color-stop(100%,#8542a0)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #a365bc 0%,#8542a0 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #a365bc 0%,#8542a0 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #a365bc 0%,#8542a0 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #a365bc 0%,#8542a0 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a365bc', endColorstr='#8542a0',GradientType=0 ); /* IE6-9 */

    font-size: 40px; color: #fff; line-height: 80px; text-align: center;
    -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%;
    -o-transition: all .6s; -moz-transition: all .6s; -webkit-transition: all .6s; -ms-transition: all .6s; transition: all .6s;
}

.section-1-box h3 { margin-top: 0; padding: 0 0 10px 0; }


/***** Section 2 *****/

.section-2-box { margin-top: 30px; text-align: left; }
.section-2-box h3 { margin-top: 0; }
.section-2-box-text .medium-paragraph { margin-top: 20px; margin-bottom: 20px; }


/***** Section 3 *****/

.section-3-box { margin-top: 30px; text-align: left; }

.section-3-box .section-3-box-icon {
	width: 60px; height: 60px; margin: 0 auto;
	
	background: #8542a0; /* Old browsers */
	background: -moz-linear-gradient(top,  #a365bc 0%, #8542a0 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a365bc), color-stop(100%,#8542a0)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #a365bc 0%,#8542a0 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #a365bc 0%,#8542a0 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #a365bc 0%,#8542a0 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #a365bc 0%,#8542a0 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a365bc', endColorstr='#8542a0',GradientType=0 ); /* IE6-9 */
	
    font-size: 28px; color: #fff; line-height: 60px; text-align: center;
    -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%;
}

.section-3-box h3 { margin-top: 0; padding: 0 0 10px 0; }

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
								<a href="#"><img src="{{ asset('image/wizard-city.jpg') }}" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                Présentation
								</h4></a>

								<p class="m-b-20">
                                    fkjsdlkjflskdjflsndlksfblkdnfvlkdnfblndb
                                    sdlkcslkdnvslkdnvslkdnvsldkvnlknlknlkn.
								</p>

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
									Fournisseurs
								</h4></a>

								<p class="m-b-20">
                                    ks,dflk,sdlfknsld,nvsdlknvlsdknvlskdnvsd
                                    vslkdnvlskndvlksndvlknsdlkvnsldkvn
								</p>

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

								<p class="m-b-20">
                                    kdjfsdlkflskdjflskjdfklsjdflskjdflksjdflskjdfs
                                    sdflkjsdlfkjslkdfjslkdjflskjdflskjdflksjdf
								</p>

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
