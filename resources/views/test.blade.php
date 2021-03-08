<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
<!-- Bootstrap Min CSS -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>

<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</head>
<style type="text/css">
	.megasubmenu{ padding: 20px; }

@media (min-width: 992px){

	.dropdown-menu .dropdown-toggle:after{
		border-top: .3em solid transparent;
		border-right: 0;
		border-bottom: .3em solid transparent;
		border-left: .3em solid;
	}
	.dropdown-menu{	
		margin:0; 
	}
	.megasubmenu{ 
		left:100%; top:0; min-height: 100%; min-width:500px;
	}
	
	.dropdown-menu > li:hover .megasubmenu{
		display: block;
	}

}

</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="main_nav">
	  
	  <ul class="navbar-nav">
		  <li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Mega submenu </a>
			  <ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
				<li><a class="dropdown-item" href="#"> Dropdown item 2 </a></li>
				<li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
				<li class="has-submenu">
					 <a class="dropdown-item dropdown-toggle" href="#"> Dropdown item 4 </a>
					 <div class="megasubmenu dropdown-menu">
					 <div class="row">
						  <div class="col-6">
								  <h6 class="title">Title Menu One</h6>
								  <ul class="list-unstyled">
									  <li><a href="#">Custom Menu</a></li>
									  <li><a href="#">Custom Menu</a></li>
									  <li><a href="#">Custom Menu</a></li>
									  <li><a href="#">Custom Menu</a></li>
									  <li><a href="#">Custom Menu</a></li>
								  </ul>
						  </div><!-- end col-3 -->
						  <div class="col-6">
							  <h6 class="title">Title Menu Two</h6>
								  <ul class="list-unstyled">
									  <li><a href="#">Custom Menu</a></li>
									  <li><a href="#">Custom Menu</a></li>
									  <li><a href="#">Custom Menu</a></li>
									  <li><a href="#">Custom Menu</a></li>
								  </ul>
						  </div><!-- end col-3 -->
					  </div><!-- end row -->
				   </div>
				</li>
				<li class="has-submenu">
					 <a class="dropdown-item dropdown-toggle" href="#"> Dropdown item 5 </a>
					 <div class="megasubmenu dropdown-menu">
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					  consequat.
				   </div>
				</li>
				<li><a class="dropdown-item" href="#"> Dropdown item 6 </a></li>
			  </ul>
		  </li>
		  <li class="nav-item"> <a class="nav-link" href="#">Menu item </a> </li>
		  <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
		  <li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
	  </ul>
	  
	  <ul class="navbar-nav ml-auto">
		  <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
		  <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
		  <li class="nav-item dropdown">
			  <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Dropdown right </a>
			  <ul class="dropdown-menu dropdown-menu-right">
				<li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
				<li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
			  </ul>
		  </li>
	  
	  </ul>
	  
		</div> <!-- navbar-collapse.// -->
	  
	  </nav>
</body>
<script type="text/javascript">
	/// some script
	
	// jquery ready start
	$(document).ready(function() {
		// jQuery code
		//////////////////////// Prevent closing from click inside dropdown
		$(document).on('click', '.dropdown-menu', function (e) {
		  e.stopPropagation();
		});
	
		if ($(window).width() < 992) {
	
			  $('.has-submenu a').click(function(e){
				  e.preventDefault();
				$(this).next('.megasubmenu').toggle();
	
				$('.dropdown').on('hide.bs.dropdown', function () {
				   $(this).find('.megasubmenu').hide();
				})
			  });
	
		}
	
		
	}); // jquery end
	</script>
</html>