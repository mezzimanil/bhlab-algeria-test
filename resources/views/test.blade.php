<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- Bootstrap Min CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- MeanMenu CSS -->
<link href="{{ asset('css/mean.css') }}" rel="stylesheet">
</head>
<body>
    <div class="navbar-area">
	<!-- Menu For Mobile Device -->
	<div class="mobile-nav">
		<a href="#" class="logo" >
			Logo
		</a>
	</div>

	<!-- Menu For Desktop Device -->
	<div class="main-nav">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-light fixed-top  border-success" style="background-color: white">
				<a class="navbar-brand" href="{{ url('/') }}">
					<img src="{{ asset('image/lol.png') }}">
				</a>
				<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="#" class="nav-link dropdown-toggle ">Home</a>
							<ul class="dropdown-menu">
								<li class="nav-item">
									<a href="#" class="nav-link">Home Page 2</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Home Page 3</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Home Page 4</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Home Page 5</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">About</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Services</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Team</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Testimonials</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Contact</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link dropdown-toggle">Pages</a>
							<ul class="dropdown-menu">
								<li class="nav-item">
									<a href="#" class="nav-link">About</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Services</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Team</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Testimonials</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Contact</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link dropdown-toggle">Dropdown</a>
							<ul class="dropdown-menu">
								<li class="nav-item">
									<a href="#" class="nav-link dropdown-toggle">Submenu 1</a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="#" class="nav-link" >Item 1</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">Item 2</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link dropdown-toggle">Submenu 2</a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="#" class="nav-link">Item 1</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">Item 2</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle">Submenu 3</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="#" class="nav-link">Item 1</a>
												</li>
												<li class="nav-item">
													<a href="#" class="nav-link">Item 2</a>
												</li>
												<li class="nav-item">
													<a href="#" class="nav-link">Item 3</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>
<!-- End Navbar Area -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- MeanMenu JS -->
<script src="https://techsolutionshere.com/wp-content/themes/techsolution/assets/blog-post-css-js/jquery.meanmenu.js"></script>
<script>
	// Mean Menu
	jQuery('.mean-menu').meanmenu({
		meanScreenWidth: "991"
	});
</script>
</body>
</html>