<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title>BH LAB</title>
    
  
    <!-- Scripts -->
    
    
    
    

    <!-- Fonts -->
    
    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- Styles -->
 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   

    <style type="text/css">



  
}
      #footer{background:rgb(19, 17, 17);position:relative}
      .footerLogo { font-size: 1.8em; font-weight: 600; color: rgb(250, 249, 249); margin-bottom: 22px; display: block; }
      #footer::before{content:"";background:linear-gradient(to right,rgb(235, 99, 9) 0,#c453f1 50%,#fff 100%);height:25px;width:100%;position:absolute}
      .footer-wrapper{padding:50px 0;float:left;width:100%}
      img.footer-logo{margin-bottom:20px}
      ul.social-icons{margin:0; padding: 0;}
      ul.social-icons li{background:#fff;width:30px;height:30px;border:1px solid #f1f2f2;border-radius:4px;margin:3px;text-align:center; display: inline-block;}
      ul.social-icons li a{color:#000000;font-size:25px;line-height:30px}
      ul.social-icons li a:hover{color:#e6af19;transition:all 1s}
      ul.footer-links { padding: 0;  list-style-type: none; position: relative;}
      ul.footer-links li{line-height:25px; padding-left: 15px; }
      ul.footer-links li:before { position: absolute; content: ; font-family: FontAwesome; left: 0;}
      ul.footer-links li a{color:#e0e3e9}
      ul.footer-links li a:hover{color:#e18127; text-decoration: none;}
      ul.contact{margin:0;padding:0}
      ul.contact li{list-style:none;padding:15px 0;border-bottom:1px solid #f1f2f2;font-size:13px;font-weight:600;line-height:15px;}
      ul.contact li i{font-size:18px;margin-right:20px;color:#27aae1} 
      ul.contact li a{color:#e0e3e9}
      ul.contact li a:hover{color:#e18127; text-decoration: none;}
      .copyright{background:#faf3f5;text-align:center;color:#fff;padding:12px 0 4px}


      
      .megamenu {
    background: #e7e2e2;
    z-index: 15;
  }

  .megamenu .megamenu-nav .navbar-brand {
  display: inline-block;
  padding-top: 0.32rem;
  padding-bottom: 0.32rem;
  margin-right: 3rem;
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

    
      </style>
</head>
<body>
    <div id="app">
   

     
     <nav class="megamenu fixed-top bg-light">
     

              <!-- Right Side Of Navbar -->
              <ul class="megamenu-nav d-flex justify-content-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="{{ asset('image/lol.png') }}" >
                </a>
                
                  <!-- Authentication Links -->
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
                            <img src="{{ asset('image/1.jpg') }}" class="img-fluid mb-3" alt="test image">
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
                            <img src="{{ asset('image/2.jpg') }}" class="img-fluid mb-3" alt="test image">
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
                            <img src="{{ asset('image/3.jpg') }}" class="img-fluid mb-3" alt="test image">
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
                            <img src="{{ asset('image/wizard-city2.jpg') }}" class="img-fluid mb-3" alt="test image">
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
                  
                  </div>
              </ul>
          
      
  </nav>
              
             
      
        </div>
       
        
       
        <main class="py-4">
            @if(session('success'))
        <div class="alert alert-success mt-5">
            {{ session('success')}}
        </div>
        
          @endif
        
          @if(session('danger'))
        <div class="alert alert-danger">
            {{ session('danger')}}
        </div>
        
          @endif
            @yield('content')
       
        </main>
      
    
           
     <!-- Footer -->

 <!--===============================================================================================-->       
   
    
        <!-- Footer -->
       <!-- Footer -->
       <footer id="footer" class="" style="background-color: black">
        <div class="container">
                <div class="footer-wrapper">
            <div class="row">                    
              <div class="col-md-3 col-sm-3">
                <a href="" class="footerLogo">Company</a>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-xing"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <div class="col-md-2 col-sm-2">
                <h5 style="color: azure">For individuals</h5>
                <ul class="footer-links">
                  <li><a href="">Signup</a></li>
                  <li><a href="">login</a></li>
                  <li><a href="">Explore</a></li>
                  <li><a href="">Finder app</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">Language settings</a></li>
                </ul>
              </div>
              <div class="col-md-2 col-sm-2">
                <h5 style="color: azure">For businesses</h5>
                <ul class="footer-links">
                  <li><a href="">Business signup</a></li>
                  <li><a href="">Business login</a></li>
                  <li><a href="">Benefits</a></li>
                  <li><a href="">Resources</a></li>
                  <li><a href="">Advertise</a></li>
                  <li><a href="">Setup</a></li>
                </ul>
              </div>
              <div class="col-md-2 col-sm-2">
                <h5 style="color: azure">About</h5>
                <ul class="footer-links">
                  <li><a href="">About us</a></li>
                  <li><a href="">Contact us</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Terms</a></li>
                  <li><a href="">Help</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-3">
                <h5 style="color: azure">Contact Us</h5>
                <ul class="contact">
                  <li ><a href="https://www.google.com/maps/place/BH+Lab+Alg%C3%A9rie/@36.7381177,3.2729815,17z/data=!3m1!4b1!4m5!3m4!1s0x128e45f00db49887:0x3d6679ffdc636f78!8m2!3d36.7381177!4d3.2751702" ><i class="fa fa-home"></i>BH LAB sarl 130 Cité Cadat 16012, Rouïba</a></li>
                  <li style="color: azure"><i class="fa fa-phone"></i>+1 (234) 123 1234</li>
                  <li style="color: azure"><i class="fa fa-envelope"></i>info@company.com</li>

                 
                </ul>
              </div>
            </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="copyright">
          <p>Company © 2019. All rights reserved</p>
        </div>
          </footer>												                            
<!-- Footer -->


  <!-- Back to top -->
  <div class="btn-back-to-top bg0-hov" id="myBtn">
      <span class="symbol-btn-back-to-top">
          <i class="fa fa-angle-double-up" aria-hidden="true"></i>
      </span>
  </div>


  <!-- Footer -->
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
