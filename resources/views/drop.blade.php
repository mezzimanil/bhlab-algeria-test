<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>Demo - Bootstrap multilevel navbar responsive. html code example </title>

<!-- jQuery -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style type="text/css">
	.dropdown-submenu {
                position: relative;
            }

            .dropdown-submenu> a:after {
                content: ">";
                float: right;
            }

            .dropdown-submenu>.dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: 0px;
                margin-left: 0px;
            }

            .dropdown-submenu:hover>.dropdown-menu {
                display: block;
            }
</style>

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
					
					
						<div class="row"> 
							<div class="col-lg-12 mt-5">
								<div class="btn-group">
									<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"
									   href="">
										Dropdown
									</a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
										<li><a class="dropdown-item" href="#">level 1</a></li>
										<li><a class="dropdown-item" href="#">level 1</a></li>
										<li class="dropdown-divider"></li>
										<li class="dropdown-submenu">
											<a class="dropdown-item" tabindex="-1" href="#">
												level 1
											</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" tabindex="-1" href="#">level 2</a></li>
												<li class="dropdown-submenu">
													<a class="dropdown-item" href="#">
														level 2
													</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item" href="#">3rd level</a></li>
														<li><a class="dropdown-item" href="#">3rd level</a></li>
													</ul>
												</li>
												<li><a class="dropdown-item" href="#">level 2</a></li>
												<li><a class="dropdown-item" href="#">level 2</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-12 mt-5">
								<div class="btn-group">
									<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"
									   href="">
										Dropdown
									</a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
										<li><a class="dropdown-item" href="#">level 1</a></li>
										<li><a class="dropdown-item" href="#">level 1</a></li>
										<li class="dropdown-divider"></li>
										<li class="dropdown-submenu">
											<a class="dropdown-item" tabindex="-1" href="#">
												level 1
											</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" tabindex="-1" href="#">level 2</a></li>
												<li class="dropdown-submenu">
													<a class="dropdown-item" href="#">
														level 2
													</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item" href="#">3rd level</a></li>
														<li><a class="dropdown-item" href="#">3rd level</a></li>
													</ul>
												</li>
												<li><a class="dropdown-item" href="#">level 2</a></li>
												<li><a class="dropdown-item" href="#">level 2</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-12 mt-5">
								<div class="btn-group">
									<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"
									   href="">
										Dropdown
									</a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
										<li><a class="dropdown-item" href="#">level 1</a></li>
										<li><a class="dropdown-item" href="#">level 1</a></li>
										<li class="dropdown-divider"></li>
										<li class="dropdown-submenu">
											<a class="dropdown-item" tabindex="-1" href="#">
												level 1
											</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" tabindex="-1" href="#">level 2</a></li>
												<li class="dropdown-submenu">
													<a class="dropdown-item" href="#">
														level 2
													</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item" href="#">3rd level</a></li>
														<li><a class="dropdown-item" href="#">3rd level</a></li>
													</ul>
												</li>
												<li><a class="dropdown-item" href="#">level 2</a></li>
												<li><a class="dropdown-item" href="#">level 2</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					
				
			</div>
		</div>
	</div>

	  <script type="text/javascript">
	$(".btn-group, .dropdown").hover(
                        function () {
                            $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
                            $(this).addClass('open');
                        },
                        function () {
                            $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
                            $(this).removeClass('open');
                        });
	</script>
	
</body>
</html>