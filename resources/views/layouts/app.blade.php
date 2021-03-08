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
    
    

    <!-- Styles -->
 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
    
    <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>

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


      .navbar{
        
        
        border-bottom: 10px solid;
      }

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
    display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0
	}
	.megasubmenu{ 
		left:100%; top: 0; min-height: 100%; min-width:992px; width:100%; padding:20px; 
	}
	
	.dropdown-menu > li:hover .megasubmenu{
		display: block;
	}
  .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }

  .navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
	.navbar .nav-item:hover .nav-link{ color: #fff;  }
	.navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
	.navbar .dropdown-menu.fade-up{ top:180%;  }
	.navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
}
      </style>
</head>
<body>
    <div id="app">
   

      <nav class="navbar navbar-expand-lg navbar-light bg-light  fixed-top">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('image/lol.png') }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
        
       
        
        <ul class="navbar-nav ml-auto">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Mega submenu </a>
              <ul class="dropdown-menu fade-down">
              <li><a class="dropdown-item dropdown-toggle " href="#"> Dropdown item 1 </a> <div class="megasubmenu dropdown-menu">
                 <div class="row">
                    <div class="col-md-2">
                        <h6 class="title">Title Menu One</h6>
                        <ul class="list-unstyled">
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                        </ul>
                    </div><!-- end col-3 -->
                    <div class="col-md-2">
                      <h6 class="title">Title Menu two</h6>
                        <ul class="list-unstyled">
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                        </ul>
                    </div><!-- end col-3 -->
                    <div class="col-md-2">
                      <h6 class="title">Title Menu three</h6>
                      <ul class="list-unstyled">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                      </ul>
                  </div><!-- end col-3 -->
                  <div class="col-md-2">
                    <h6 class="title">Title Menu four</h6>
                      <ul class="list-unstyled">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                      </ul>
                  </div><!-- end col-3 -->
           
                  </div><!-- end row -->
                 </div></li>
              <li><a class="dropdown-item dropdown-toggle" href="#"> Dropdown item 2 </a> <div class="megasubmenu dropdown-menu">
                 <div class="row">
                    <div class="col-md-3">
                        <h6 class="title">Title Menu One</h6>
                        <ul class="list-unstyled">
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                        </ul>
                    </div><!-- end col-3 -->
                    <div class="col-md-3">
                      <h6 class="title">Title Menu Two</h6>
                        <ul class="list-unstyled">
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                        </ul>
                    </div><!-- end col-3 -->
                  </div><!-- end row -->
                 </div></li>
              <li><a class="dropdown-item dropdown-toggle" href="#"> Dropdown item 3 </a> <div class="megasubmenu dropdown-menu">
                 <div class="row">
                    <div class="col-md-3">
                        <h6 class="title">Title Menu three</h6>
                        <ul class="list-unstyled">
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                        </ul>
                    </div><!-- end col-3 -->
                    <div class="col-md-3">
                      <h6 class="title">Title Menu four</h6>
                        <ul class="list-unstyled">
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                        </ul>
                    </div><!-- end col-3 -->
                  </div><!-- end row -->
                 </div></li>
              <li class="has-submenu">
                 <a class="dropdown-item dropdown-toggle" href="#"> Dropdown item 4 </a>
                 <div class="megasubmenu dropdown-menu">
                 <div class="row">
                    <div class="col-md-3">
                        <h6 class="title">Title Menu five</h6>
                        <ul class="list-unstyled">
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                          <li><a href="#">Custom Menu</a></li>
                        </ul>
                    </div><!-- end col-3 -->
                    <div class="col-md-3">
                      <h6 class="title">Title Menu six</h6>
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
        </div>
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
  <!-- Footer -->
</body>

</html>
