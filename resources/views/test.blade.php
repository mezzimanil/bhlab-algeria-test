<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
<!-- Bootstrap Min CSS -->
<link href="{{ asset('css/menu.css') }}" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<style type="text/css">
	
</style>
<body>
	

		<nav class="megamenu fixed-top">
			
<ul class="megamenu-nav d-flex justify-content-center" role="menu">
	<a class="navbar-brand" href="{{ url('/') }}">
		<img src="{{ asset('image/lol.png') }}" >
	</a>
<li class="nav-item">
  <a class="nav-link" href="{{ url('/') }}">
	  <i class="fa fa-home"></i>
	  <span class="sr-only">Home</span>
  </a>
</li>
<li class="nav-item is-parent">
  <a class="nav-link" href="#" id="megamenu-dropdown-1" aria-haspopup="true" aria-expanded="false">
	  Link 1 <i class="fa fa-angle-down"></i>
  </a>
  <div class="megamenu-content" aria-labelledby="megamenu-dropdown-1">
	  <div class="container">
		  <div class="row">
			  <div class="col-8 pr-5">
				  <div class="row">
					  <div class="col-6">
						  <h3 class="">Another title</h3>
						  <hr>
						  <ul class="subnav">
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 1</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Another menuitem</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 3</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 1</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Another menuitem</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 3</a>
							  </li>
						  </ul>
					  </div>
					  <div class="col-6">
						  <h3 class="">Some title</h3>
						  <hr>
						  <ul class="subnav">
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 1</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Another menuitem</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 3</a>
							  </li>
						  </ul>
					  </div>
				  </div>
				  <hr>
				  <div class="d-flex">
					  <div class="align-self-center pr-4">
						  Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae corrupti reprehenderit provident ipsam quibusdam, iste ad amet exercitationem sunt. Impedit libero aperiam ratione reiciendis dolorem itaque aut quas eos labore.
					  </div>
					  <div class="align-self-center">
						  <a href="#" class="btn btn-outline-primary">Click me</a>
					  </div>
				  </div>
			  </div>
			  <div class="col-4">
				  <img src="https://source.unsplash.com/640x480/?bikini" class="img-fluid mb-3" alt="test image">
				  <p>
					  Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, expedita sint quis rem amet, a nihil, non sunt ea quasi.
				  </p>
				  <a href="#">See more <i class="fa fa-angle-double-right"></i></a>
			  </div>
		  </div>
	  </div>
  </div>
</li>
<li class="nav-item is-parent">
  <a class="nav-link" href="#" id="megamenu-dropdown-2" aria-haspopup="true" aria-expanded="false">
	  Link 2 <i class="fa fa-angle-down"></i>
  </a>
  <div class="megamenu-content" aria-labelledby="megamenu-dropdown-2">
	  <div class="container">
		  <div class="row">
			  <div class="col-8 pr-5">
				  <div class="row">
					  <div class="col-6">
						  <h3 class="">Some title</h3>
						  <hr>
						  <ul class="subnav">
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 1</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Another menuitem</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 3</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 4</a>
							  </li>
						  </ul>
					  </div>
					  <div class="col-6">
						  <h3 class="">Another title</h3>
						  <hr>
						  <ul class="subnav">
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 1</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Another menuitem</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 3</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Another menuitem 2</a>
							  </li>
						  </ul>
					  </div>
				  </div>
				  <hr>
				  <div class="d-flex">
					  <div class="align-self-center pr-4">
						  Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae corrupti reprehenderit provident ipsam quibusdam, iste ad amet exercitationem sunt. Impedit libero aperiam ratione reiciendis dolorem itaque aut quas eos labore.
					  </div>
					  <div class="align-self-center">
						  <a href="#" class="btn btn-outline-primary">Click me</a>
					  </div>
				  </div>
			  </div>
			  <div class="col-4">
				  <img src="https://source.unsplash.com/640x480/?yoga" class="img-fluid mb-3" alt="test image">
				  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, expedita sint quis rem amet, a nihil, non sunt ea quasi.</p>
				  <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
			  </div>
		  </div>
	  </div>
  </div>
</li>
<li class="nav-item is-parent">
  <a class="nav-link" href="#" id="megamenu-dropdown-3" aria-haspopup="true" aria-expanded="false">
	  Link 3 <i class="fa fa-angle-down"></i>
  </a>
  <div class="megamenu-content" aria-labelledby="megamenu-dropdown-3">
	  <div class="container">
		  <div class="row">
			  <div class="col-8 pr-5">
				  <div class="row">
					  <div class="col-6">
						  <h3 class="">Another title</h3>
						  <hr>
						  <ul class="subnav">
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 1</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Another menuitem</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 3</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 1</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Another menuitem</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 3</a>
							  </li>
						  </ul>
					  </div>
					  <div class="col-6">
						  <h3 class="">Some title</h3>
						  <hr>
						  <ul class="subnav">
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 1</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Another menuitem</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 3</a>
							  </li>
						  </ul>
					  </div>
				  </div>
				  <hr>
				  <div class="d-flex">
					  <div class="align-self-center pr-4">
						  Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae corrupti reprehenderit provident ipsam quibusdam, iste ad amet exercitationem sunt. Impedit libero aperiam ratione reiciendis dolorem itaque aut quas eos labore.
					  </div>
					  <div class="align-self-center">
						  <a href="#" class="btn btn-outline-primary">Click me</a>
					  </div>
				  </div>
			  </div>
			  <div class="col-4">
				  <img src="https://source.unsplash.com/640x480/?rose" class="img-fluid mb-3" alt="test image">
				  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, expedita sint quis rem amet, a nihil, non sunt ea quasi.</p>
				  <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
			  </div>
		  </div>
	  </div>
  </div>
</li>
<li class="nav-item is-parent">
  <a class="nav-link" href="#" id="megamenu-dropdown-4" aria-haspopup="true" aria-expanded="false">
	  Link 4 <i class="fa fa-angle-down"></i>
  </a>
  <div class="megamenu-content" aria-labelledby="megamenu-dropdown-4">
	  <div class="container">
		  <div class="row">
			  <div class="col-8 pr-5">
				  <div class="row">
					  <div class="col-6">
						  <h3 class="">Some title</h3>
						  <hr>
						  <ul class="subnav">
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 1</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Another menuitem</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 3</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 4</a>
							  </li>
						  </ul>
					  </div>
					  <div class="col-6">
						  <h3 class="">Another title</h3>
						  <hr>
						  <ul class="subnav">
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 1</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Another menuitem</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Menuitem 3</a>
							  </li>
							  <li class="subnav-item">
								  <a href="#" class="subnav-link">Another menuitem 2</a>
							  </li>
						  </ul>
					  </div>
				  </div>
				  <hr>
				  <div class="d-flex">
					  <div class="align-self-center pr-4">
						  Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae corrupti reprehenderit provident ipsam quibusdam, iste ad amet exercitationem sunt. Impedit libero aperiam ratione reiciendis dolorem itaque aut quas eos labore.
					  </div>
					  <div class="align-self-center">
						  <a href="#" class="btn btn-outline-primary">Click me</a>
					  </div>
				  </div>
			  </div>
			  <div class="col-4">
				  <img src="https://source.unsplash.com/640x480/?bike" class="img-fluid mb-3" alt="test image">
				  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, expedita sint quis rem amet, a nihil, non sunt ea quasi.</p>
				  <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
			  </div>
		  </div>
	  </div>
  </div>
</li>
<li class="nav-item">
  <a class="nav-link" href="#">
	  Link without megamenu
  </a>
</li>
</ul>
<div class="megamenu-background" id="megamenu-background"></div>
</nav>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.9.0/jquery.hoverIntent.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js'></script>

<script type="text/javascript">
	/// some script
	
	// jquery ready start
	const $megamenuParentListItem = $('.megamenu-nav > li.is-parent');

const $megamenuBackground = $('#megamenu-background');

const isTouch = 'ontouchstart' in window || !!navigator.msMaxTouchPoints;

const handleMenuItemOpenState = elem => {
  elem.addClass('is-open');
  elem.find('a').first().attr('aria-expanded', true);
};

const handleMenuItemCloseState = elem => {
  elem.removeClass('is-open');
  elem.find('a').first().attr('aria-expanded', false);
};

const openMegamenu = (bgElem, heightVal) => {
  $('body').addClass('megamenu-visible');
  bgElem.height(heightVal);
};

const closeMegamenu = (bgElem, heightVal) => {
  $('body').removeClass('megamenu-visible');
  bgElem.height(heightVal);
};

const $megamenuContentElem = $('.megamenu-nav .megamenu-content');

const getTallestMenuHeight = () => {
  let maxHeight = 0;
  $megamenuContentElem.each((index, item) => {
    if ($(item).outerHeight() > maxHeight) {
      maxHeight = $(item).outerHeight();
    }
  });
  return maxHeight;
};

const debouncedClose = _.debounce(closeMegamenu, 400);
const throttledContentHeightCount = _.throttle(getTallestMenuHeight, 100);

let megamenuContentMaxHeight = 0;

window.onresize = () => {
  megamenuContentMaxHeight = throttledContentHeightCount();
};

$(() => {
  megamenuContentMaxHeight = getTallestMenuHeight();

  $megamenuParentListItem.each((index, item) => {
    if (!isTouch) {
      $(item).hoverIntent({
        sensitivity: 10,
        interval: 50,
        over: () => {
          debouncedClose.cancel();
          $megamenuParentListItem.removeClass('is-open');
          handleMenuItemOpenState($(item));
          openMegamenu($megamenuBackground, megamenuContentMaxHeight);
        },
        out: () => {
          handleMenuItemCloseState($(item));
          debouncedClose($megamenuBackground, 0);
        } });

    }

    $(item).find('a').first().on('click touch', () => {
      if (!$(item).hasClass('is-open')) {
        $megamenuParentListItem.removeClass('is-open');
        handleMenuItemOpenState($(item));
        openMegamenu($megamenuBackground, megamenuContentMaxHeight);
      } else {
        handleMenuItemCloseState($(item));
        closeMegamenu($megamenuBackground, 0);
      }
    });
  });

  $('#megamenu-dim').on('click touch', e => {
    if ($('body').hasClass('megamenu-visible')) {
      e.preventDefault();
      $megamenuParentListItem.removeClass('is-open');
      closeMegamenu($megamenuBackground, 0);
    }
  });
});
	</script>
</html>