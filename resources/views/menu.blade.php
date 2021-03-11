<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Megamenu</title>
  
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    

  
</head>
<style>
      .megamenu {
    background: #e7e2e2;
    z-index: 15;
  }

  .megamenu .megamenu-nav .navbar-brand {
  display: inline-block;
  padding-top: 0.32rem;
  padding-bottom: 0.32rem;
  
  font-size: 1.125rem;
  line-height: inherit;
  white-space: nowrap;
 
}
  .megamenu .megamenu-nav {
    padding: 0;
    margin: 0;
  }
  .megamenu .megamenu-nav .nav-item {
    display: block;
  }
  .megamenu .megamenu-nav .nav-item.is-open > .megamenu-content {
    visibility: visible;
    opacity: 1;
  }
  .megamenu .megamenu-nav .nav-item.is-open > .nav-link {
    background: rgb(0,168,186);
    
  }
  .megamenu .megamenu-nav .nav-link {
    color: rgb(36, 50, 136);
    padding: 15px 30px;
  }
  .megamenu .megamenu-nav .nav-link:hover {
    background: rgb(0,168,186);
    color: #333;
  }
  .megamenu .megamenu-content {
    position: absolute;
    left: 0;
    right: 0;
    top: 54px;
    overflow: hidden;
    visibility: hidden;
    opacity: 0;
    z-index: 14;
    transition: all .3s ease-in-out;
  }
  .megamenu .megamenu-content .container {
    padding: 45px 15px;
  }
  .megamenu .megamenu-content .subnav {
    margin: 0;
    padding: 0;
  }
  .megamenu .megamenu-content .subnav-item {
    display: block;
  }
  .megamenu .megamenu-content .subnav-item .subnav-link {
    padding: 10px 0;
    display: block;
  }
  
  .megamenu-background {
    background: #fff;
    position: absolute;
    left: 0;
    top: 54px;
    right: 0;
    height: 0;
    transition: all .3s ease-in-out;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
    z-index: 13;
  }
  
  .megamenu-dim {
    background: rgba(0, 0, 0, 0.6);
    position: fixed;
    left: 0;
    right: 0;
    bottom: 0;
    top: 54px;
    visibility: hidden;
    opacity: 0;
    z-index: -12;
    transition: all .3s ease-in-out;
  }
  body.megamenu-visible .megamenu-dim {
    z-index: 12;
    visibility: visible;
    opacity: 1;
  }

  @media (min-width: 992px){
		. .dropdown-menu .dropdown-toggle:after{
			border-top: .3em solid transparent;
		    border-right: 0;
		    border-bottom: .3em solid transparent;
		    border-left: .3em solid;
		}

		.dropdown-menu .dropdown-menu{
			margin-left:2; margin-right: 0;

		}

		.dropdown-menu li{
			position: relative;
      
		}
		.nav-item .submenu{ 
			display: none;
			position: absolute;
			left:100%; top:-7px;
		}
		.nav-item .submenu-left{ 
			right:100%; left:auto;
		}

		.dropdown-menu > li:hover{ background-color: #f1f1f1 }
		.dropdown-menu > li:hover > .submenu{
			display: block;
		}
	}
</style>
<body>

                  <nav class="megamenu">
    <ul class="megamenu-nav d-flex justify-content-center" role="menu">
        <li class="nav-item">
            <a class="nav-link" href="#">
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

<div class="megamenu-dim" id="megamenu-dim"></div>

<section class="hero">
    <div class="container pt-4">
        <h1 class="display-2 mb-4">Megamenu</h1>
        <p class="lead">
            Dependencies are: <strong>Bootstrap 4, jQuery, jQuery.hoverIntent, Lodash (debounce and throttle)</strong>
        </p>
        <p class="lead"><em>Should work quite well™  </em>with mouse hover, clicks/keyboard and touch devices.</p>
        <p class="lead">Hover Intent plugin is used to track user mouse movement and not fire the megamenu event if cursor is moved rapidly over the main menu elements.</p>
        <p class="lead">Adjusts the menu background height automatically when resizing the browser window. Calculates menu background height from the tallest megamenu content.</p>
        <p class="lead">Missing responsive styling :(</p>
    </div>
</section>

<section class="bg-light">
    <div class="container">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt cumque hic ipsam et. Perferendis voluptatum incidunt maxime eos et officiis exercitationem! Expedita ipsa tenetur porro dolores possimus cum ab sapiente.</p>
    </div>
</section>

<section class="bg-white">
    <div class="container">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt cumque hic ipsam et. Perferendis voluptatum incidunt maxime eos et officiis exercitationem! Expedita ipsa tenetur porro dolores possimus cum ab sapiente.</p>
    </div>
</section>
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




</body>

</html>
