<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- MeanMenu CSS -->
</head>
<style>
	@import url("https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700");
body {
    font-family: "Oswald", sans-serif;
    padding: 0;
    margin: 0;
    font-size: 15px;
    background-color: #f1f1f1;
}

a.meanmenu-reveal {
	display: none;
}
/* when under viewport size, .mean-container is added to body */
.mean-container .mean-bar {
	float: left;
	width: 100%;
	position: absolute;
	background: transparent;
	padding: 20px 0 0;
	z-index: 999;
	border-bottom: 1px solid rgba(0, 0, 0, 0.03);
	height: 55px;
}
.mean-container a.meanmenu-reveal {
	width: 35px;
	height: 30px;
	padding: 12px 15px 0 0;
	position: absolute;
	right: 0;
	cursor: pointer;
	color: #ffffff;
	text-decoration: none;
	font-size: 16px;
	text-indent: -9999em;
	line-height: 22px;
	font-size: 1px;
	display: block;
	font-weight: 700;
}
.mean-container a.meanmenu-reveal span {
	display: block;
	background: #ffffff;
	height: 4px;
    margin-top: 3px;
    border-radius: 3px;
}
.mean-container .mean-nav {
	float: left;
	width: 100%;
	background: #ffffff;
	margin-top: 55px;
}
.mean-container .mean-nav ul {
	padding: 0;
	margin: 0;
	width: 100%;
	border: none;
	list-style-type: none;
}
.mean-container .mean-nav ul li {
	position: relative;
	float: left;
	width: 100%;
}
.mean-container .mean-nav ul li a {
	display: block;
	float: left;
	width: 90%;
	padding: 1em 5%;
	margin: 0;
	text-align: left;
	color: #677294;
	border-top: 1px solid #DBEEFD;
	text-decoration: none;
}
.mean-container .mean-nav ul li a.active {
	color: #000000;
}
.mean-container .mean-nav ul li li a {
	width: 80%;
	padding: 1em 10%;
	color: #677294;
	border-top: 1px solid #DBEEFD;
	opacity: 1;
	filter: alpha(opacity=75);
	text-shadow: none !important;
	visibility: visible;
	text-transform: none;
	font-size: 14px;
}
.mean-container .mean-nav ul li.mean-last a {
	border-bottom: none;
	margin-bottom: 0;
}
.mean-container .mean-nav ul li li li a {
	width: 70%;
	padding: 1em 15%;
}
.mean-container .mean-nav ul li li li li a {
	width: 60%;
	padding: 1em 20%;
}
.mean-container .mean-nav ul li li li li li a {
	width: 50%;
	padding: 1em 25%;
}
.mean-container .mean-nav ul li a:hover {
	background: #252525;
	background: rgba(255,255,255,0.1);
}
.mean-container .mean-nav ul li a.mean-expand {
	margin-top: 3px;
	width: 100%;
	height: 24px;
	padding: 12px !important;
	text-align: right ;
	position: absolute;
	right: 0;
	top: 0;
	z-index: 2;
	font-weight: 700;
	background: transparent;
	border: none !important;
}
.mean-container .mean-push {
	float: left;
	width: 100%;
	padding: 0;
	margin: 0;
	clear: both;
}
.mean-nav .wrapper {
	width: 100%;
	padding: 0;
	margin: 0;
}
/* Fix for box sizing on Foundation Framework etc. */
.mean-container .mean-bar, .mean-container .mean-bar * {
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
}
.mean-remove {
	display: none !important;
}
.mobile-nav {
    display: none;
}
.mobile-nav.mean-container .mean-nav ul li a.active {
    color: #FF2D55;
}
.main-nav {
    background: #000;
    position: absolute;
    top: 0;
    left: 0;
    padding-top: 15px;
    padding-bottom: 15px;
    width: 100%;
    z-index: 999;
    height: auto;
}
.mean-nav .dropdown-toggle::after {
	display: none;
}
.navbar-light .navbar-brand, .navbar-light .navbar-brand:hover {
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
}
.main-nav nav ul {
    padding: 0;
    margin: 0;
    list-style-type: none;
}
.main-nav nav .navbar-nav .nav-item {
    position: relative;
    padding: 15px 0;
}
.main-nav nav .navbar-nav .nav-item a {
    font-weight: 500;
    font-size: 16px;
    text-transform: uppercase;
    color: #ffffff;
    padding-left: 0;
    padding-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    margin-left: 15px;
    margin-right: 15px;
}
.main-nav nav .navbar-nav .nav-item a:hover, 
.main-nav nav .navbar-nav .nav-item a:focus, 
.main-nav nav .navbar-nav .nav-item a.active {
    color: #FF2D55;
}
.main-nav nav .navbar-nav .nav-item:hover a {
    color: #FF2D55;
}
.main-nav nav .navbar-nav .nav-item .dropdown-menu {
    -webkit-box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.05);
            box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.05);
    background: #0d1028;
    position: absolute;
    top: 80px;
    left: 0;
    width: 250px;
    z-index: 99;
    display: block;
    padding-top: 20px;
    padding-left: 5px;
    padding-right: 5px;
    padding-bottom: 20px;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.main-nav nav .navbar-nav .nav-item .dropdown-menu li {
    position: relative;
    padding: 0;
}
.main-nav nav .navbar-nav .nav-item .dropdown-menu li a {
    font-size: 15px;
    font-weight: 500;
    text-transform: capitalize;
    padding: 9px 15px;
    margin: 0;
    display: block;
    color: #ffffff;
}
.main-nav nav .navbar-nav .nav-item .dropdown-menu li a:hover, 
.main-nav nav .navbar-nav .nav-item .dropdown-menu li a:focus, 
.main-nav nav .navbar-nav .nav-item .dropdown-menu li a.active {
    color: #FF2D55;
}
.main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu {
    position: absolute;
    left: -100%;
    top: 0;
    opacity: 0 !important;
    visibility: hidden !important;
}
.main-nav nav .navbar-nav .nav-item .dropdown-menu li:hover .dropdown-menu {
    opacity: 1 !important;
    visibility: visible !important;
    top: -20px !important;
}
.main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu {
    position: absolute;
    left: -100%;
    top: 0;
    opacity: 0 !important;
    visibility: hidden !important;
}
.main-nav nav .navbar-nav .nav-item .dropdown-menu li:hover .dropdown-menu li:hover .dropdown-menu {
    opacity: 1 !important;
    visibility: visible !important;
    top: -20px !important;
}
.main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a {
    color: #ffffff;
    text-transform: capitalize;
}
.main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:hover, 
.main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:focus, 
.main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a.active {
    color: #FF2D55;
}
.main-nav nav .navbar-nav .nav-item .dropdown-menu li:hover a {
    color: #FF2D55;
}
.main-nav nav .navbar-nav .nav-item:hover ul {
    opacity: 1;
    visibility: visible;
    top: 100%;
}
.main-nav nav .navbar-nav .nav-item:last-child .dropdown-menu {
    left: auto;
    right: 0;
}

/* Responsive Style */
@media only screen and (max-width: 991px) {
    .mobile-nav {
        display: block;
        position: relative;
    }
    .mobile-nav .logo {
		text-decoration: none;
        position: absolute;
        top: 11px;
        z-index: 999;
        left: 15px;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 20px;
    }
    .mean-container .mean-bar {
        background-color: #000;
        padding: 0;
    }
    .mean-container a.meanmenu-reveal {
        padding: 15px 15px 0 0;
    }
    .mobile-nav nav .navbar-nav .nav-item a i {
        display: none;
    }
    .main-nav {
        display: none !important;
    }
}
</style>
<body>
	<!-- Start Navbar Area -->
<div class="navbar-area">
	<!-- Menu For Mobile Device -->
	<div class="mobile-nav">
		<a href="#" class="logo">
			Logo
		</a>
	</div>

	<!-- Menu For Desktop Device -->
	<div class="main-nav">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-light">
			
				<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						
					
						<li class="nav-item">
							<a href="#" class="nav-link dropdown-toggle">Dropdown</a>
							<ul class="dropdown-menu">
								<li class="nav-item">
									<a href="#" class="nav-link dropdown-toggle">Submenu 1</a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="#" class="nav-link">Item 1</a>
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
</body>
<!-- JQuery Min JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- MeanMenu JS -->
<script src="https://techsolutionshere.com/wp-content/themes/techsolution/assets/blog-post-css-js/jquery.meanmenu.js"></script>
<script>
	// Mean Menu
	jQuery('.mean-menu').meanmenu({
		meanScreenWidth: "991"
	});
</script>
</html>