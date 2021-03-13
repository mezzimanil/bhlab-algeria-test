<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>Demo - Bootstrap multilevel navbar responsive. html code example </title>

<!-- jQuery -->



<link href="{{ asset('css/hover.css') }}" rel="stylesheet">
<link href="{{ asset('css/boo.css') }}" rel="stylesheet">
<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">


</head>
<body class="bg-light">

	<div class="dropdown">
		<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">
		 Dropdown <span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
		  <li><a href="#">Action</a></li>
		  <li><a href="#">Another action</a></li>
		  <li class="dropdown">
			<a href="#">One more dropdown</a>
			<ul class="dropdown-menu">
			  <li><a href="#">Action</a></li>
			  <li><a href="#">Another action</a></li>
			  <li class="dropdown">
				<a href="#">One more dropdown</a>
				<ul class="dropdown-menu">
				...
				</ul>
			  </li>
			  <li><a href="#">Something else here</a></li>
			  <li><a href="#">Separated link</a></li>
			 </ul>
		  </li>
		  <li><a href="#">Something else here</a></li>
		  <li><a href="#">Separated link</a></li>
		</ul>
	  </div>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	  <script src="{{ asset('js/bootstrap-dropdownhover.js') }}"></script>
</body>
</html>