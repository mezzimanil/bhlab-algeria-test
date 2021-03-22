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
    
    
    
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Fonts -->
    
    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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

  .megamenu .navbar-brand {
  display: inline-block;
  padding-top: 0.32rem;
  padding-bottom: 0.32rem;
 margin-right: 15rem;
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

 
		.nav-item .submenu{ 
			display: none;
			position: absolute;
			left:100%; top:-7px;
		}
		.nav-item .submenu-left{ 
			right:100%; left:auto;
		}
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

			.column {
  float: left;
  width: 50%;
  padding: 10px;
  
      }

      .contain{
        overflow: hidden;
      }
  .filterDiv {
  
 

  display: none; /* Hidden by default */
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */


/* Add a light grey background on mouse-over */
.btn:hover {
  background-color: #ddd;
}

/* Add a dark background to the active button */
.btn.active {
  background-color: #666;
  color: white;
}
}
    
      </style>

      
      
     
</head>
<body>
    <div id="app">
   

     
     <nav class="megamenu fixed-top navbar-expand-md ">
     
      
              <!-- Right Side Of Navbar -->
             
              <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="{{ asset('image/lole.png') }}" >
                </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                
                      <ul class="navbar-nav ml-auto">
                        <ul class="megamenu-nav d-flex justify-content-center mr-auto">

              
            
                          <!-- Authentication Links -->
                          <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">
                              
                              Home
                            </a>
                           </li>
                           <li class="nav-item is-parent">
                            <a class="nav-link" href="#" id="megamenu-dropdown-1" aria-haspopup="true" aria-expanded="false">
                              About-us <i class="fa fa-angle-down"></i>
                            </a>
                            <div class="megamenu-content" aria-labelledby="megamenu-dropdown-1">
                              <div class="container">
                                <div class="row">
                                  <div class="col-7 pr-5">
                                    <h3 class="">À-propos de BH-LAB</h3>
                                    <hr>
                                    <div class="row">
                                      <div class="col-8">
                                       <h5>
                                         Avec plus de 12 ans d’expériences dans le domaine du diagnostic médical et forte de ses 60 employés, BH LAB s’impose comme un acteur majeur dans le marché algérien.
                                          Présente aussi bien chez les grands laboratoires privés qu’en milieu hospitalier, BH LAB séduit par la diversité des produits qu’elle propose.</h5>
                                          <h5 >
                                          Notre politique tend à répondre au maximum aux différents besoins de nos partenaires et cela au travers des différentes gammes que nous proposons.</p>
                                       </h5>
                                       
                                        
                                      </div>
                                      
                                    </div>
                                   
                                  </div>
                                  <div class="col-5">
                                    <img src="{{ asset('image/p.jpg') }}"  width="450" height="450" class=" mb-3" alt="test image">
                                    <p>
                                      Notre Président directeur général, Mr ANAS BENHAMIDA.
                                    </p>
                                   
                                  </div>
                                </div>
                              </div>
                            </div>
                           </li>
                           <li class="nav-item is-parent">
                            <a class="nav-link" href="{{route('fournisseur')}}" id="megamenu-dropdown-2" aria-haspopup="true" aria-expanded="false">
                              Fournisseur<i class="fa fa-angle-down"></i>
                            </a>
                            <div class="megamenu-content" aria-labelledby="megamenu-dropdown-2">
                              <div class="container">
                                <div class="row">
                                  <div class="col-7 ">
                                    
                                    <div class="row">
                                      
                                      <div class="col-5">
                                        <h3 class="">Familles</h3>
                                        <hr>
                                        <ul class="subnav">
                                       
                                              <li class="subnav-item">
                                                <div  id="myBtnContainer">
                           
                            
                                                  <button class="btn  active dropdown-item" onclick="filterSelection('all')"> Show all</button>
                                                  <button class="btn dropdown-item" onclick="filterSelection('Immuno Analyses')"> Immuno Analyses</button>
                                                  <button class="btn dropdown-item" onclick="filterSelection('Chimie Clinique')"> Chimie Clinique</button>
                                                  <button class="btn dropdown-item" onclick="filterSelection('Immuno Hémathologie')"> Immuno Hémathologie</button>
                                                  <button class="btn dropdown-item" onclick="filterSelection('Auto Immunité')"> Auto Immunité</button>
                                                  <button class="btn dropdown-item" onclick="filterSelection('Hémostase')"> Hémostase</button>
                                                  <button class="btn dropdown-item" onclick="filterSelection('Acute Care')"> Acute Care (Gaz de sang)</button>
                                                  <button class="btn dropdown-item" onclick="filterSelection('Consommables')"> Consommables</button>
                                                  <button class="btn dropdown-item" onclick="filterSelection('Typage HLA')"> Typage HLA</button>
                                                  <button class="btn dropdown-item" onclick="filterSelection('Bio moléculaire')"> Bio moléculaire</button>
                                                  <button class="btn dropdown-item" onclick="filterSelection('Immuno chimie')"> Immuno chimie</button>
                                                  <button class="btn dropdown-item" onclick="filterSelection('Hémathologie')"> Hémathologie</button>
                                      
                                              
                                            </div>
        
                                              </li>
                                             
                                        </ul>
                                      </div>
                                    
                                       <div class="col-5">
                                        <h3 class="">Fournisseurs</h3>
                                        <hr>
                                        <ul class="subnav">
                                       
                                          <li class="subnav-item">
                                            <div class="contain"> 
                                              <div class="filterDiv all"><a href="https://www.abbott.com/">abbott</a></div>
                                              <div class="filterDiv Immuno Analyses Chimie Clinique Immuno Hémathologie"><a href="https://www.orthoclinicaldiagnostics.com/">ORTHO CLINICAL DIAGNOSTICS</a></div>
                                              <div class="filterDiv Auto Immunité Hémostase Acute Care"><a href=" https://www.werfen.com/">Werfen</a></div>
                                              <div class="filterDiv Immuno Analyses"><a href="https://www.diasorin.com/">DIASORIN </a></div>
                                              <div class="filterDiv Consommables"><a href=" https://www.capp.dk/">CAPP APS</a></div>
                                              <div class="filterDiv Typage HLA"><a href="https://www.lagitre.com/">LAGITRE</a></div>
                                              <div class="filterDiv Immuno Analyses Bio moléculaire"><a href="http://www.adaltis.net/">ADALTIS</a></div>
                                              <div class="filterDiv all"><a href="http://www.arkray.co.jp/">ARKRAY</a></div>
                                              <div class="filterDiv Bio moléculaire"><a href=" http://entrogen.com/web3/">ENTROGEN USA</a></div>
                                              <div class="filterDiv Immuno Hémathologie"><a href="https://www.merckgroup.com/">MERCK SARL</a></div>
                                              <div class="filterDiv Auto Immunité"><a href="http://www.d-tek.be/">D-TEK sa BELGIQUE</a></div>
                                              <div class="filterDiv Immuno chimie"><a href="https://www.bindingsite.com/">BINDING SITE</a></div>
                                              <div class="filterDiv Bio moléculaire"><a href="https://sacace.com/">SACACE BIOTECHNOLOGIES</a></div>
                                              <div class="filterDiv all"><a href="https://www.bio-rad.com/">BIO-RAD</a></div>
                                              <div class="filterDiv Hémathologie"><a href="https://www.horiba.com/"> HORIBA</a></div>
                                            </div>
                                          </li>
                                        </ul>
                                       </div>
                                          
                                        
                                      
                                    </div>
                                   
                                  </div>
                                  <div class="col-5">
                                    <img src="{{ asset('image/pa.png') }}"  width="600" height="450" class=" mb-3" alt="test image">
                                    <p>Plus de 15 marques pour répondre aux différents besoins de nos partenaire.</p>
                                   
                                  </div>
                                </div>
                              </div>
                            </div>
                           </li>
                           <li class="nav-item is-parent">
                            <a class="nav-link" href="{{route('contact')}}" id="megamenu-dropdown-3" aria-haspopup="true" aria-expanded="false">
                              Contact-us <i class="fa fa-angle-down"></i>
                            </a>
                            <div class="megamenu-content" aria-labelledby="megamenu-dropdown-3">
                              <div class="container">
                                <div class="row">
                                  <div class="col-7 pr-5">
                                    <div class="card">
                           
                                      <div class="card-header">
                                          Envoyer un message
                  
                                      </div>
                                      <div class="card-body bg-secondary">
                                        
                                          <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
                                              @csrf
                                              
                                              <div class="form-group row">
                                                  <label style="color: white" for="name">{{ __('Votre nom') }}</label>
                      
                                                 
                                                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      
                                                      @error('name')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                      @enderror
                                                  
                                              </div>
                      
                                              <div class="form-group row">
                                                  <label style="color: white" for="email" >{{ __('Votre E-Mail ') }}</label>
                      
                                                  
                                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                      
                                                      @error('email')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                      @enderror
                                                  
                                              </div>
                                              <div class="form-group row">
                                                  <label style="color: white" for="phone">{{ __('Votre numero de telephone') }}</label>
                      
                                                 
                                                      <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                      
                                                      @error('phone')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                      @enderror
                                                  
                                              </div>
                                              <div class="form-group">
                                                  <label style="color: white" for="message">{{ __('Votre message') }}</label>
                                                 
                                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" placeholder="Entré votre message..." rows="5"></textarea>
                                                    @error('message')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                      
                      
                                              <div class="form-group row mb-0">
                                                  <div class="col-md-6 offset-md-4">
                                                      <button type="submit" class="btn btn-primary">
                                                          envoyer message
                                                      </button>
                                                  </div>
                                              </div>
                                             
                                          </form>
                                      </div>
                                  </div>
                                  </div>
                                  <div class="col-5">
                                    <div class="map bo8 bo-rad-9 of-hidden">
                                      <!--data-pin="images/icons/icon-position-map.png" 
                                      
                                      class="contact-map size37" id="google_map" data-map-x="40.704644" data-map-y="-74.011987" data-scrollwhell="0" data-draggable="1"
                                  
                                  -->
                                      <div class="contact-map size37">
                                          
                                          <iframe  src="https://maps.google.com/maps?q=BH%20Lab%20Alg%C3%A9rie&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0; margin:0 auto;" allowfullscreen></iframe>
                                      </div>
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                           </li>
                          
                           </ul>
                      </ul>
                  </div>
                </div>
              
             
                   <div class="megamenu-background" id="megamenu-background"></div>
                
              
              
                   @if (Session::get('message_sent'))
                   <div class="alert alert-success" role="alert">
                        {{Session::get('message_sent')}}
                   </div>
                    @endif

                     
                  

                  
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
                  <li style="color: azure"><i class="fa fa-phone"></i>Phone : +213 21 85 52 00
                  <br>
                    <i class="fa fa-phone"></i> Fax: +213 21 85 52 20
                  </li>
                  <li style="color: azure"><i class="fa fa-envelope"></i>info.bhlab@bhinvest.net </li>

                 
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

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.9.0/jquery.hoverIntent.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js'></script>
<script type="text/javascript">
  /// some script
  
  // jquery ready start
  $(document).ready(function() {
    // jQuery code
  
    //////////////////////// Prevent closing from click inside dropdown
      $(document).on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
      });
  
      // make it as accordion for smaller screens
      if ($(window).width() < 992) {
        $('.dropdown-menu a').click(function(e){
          e.preventDefault();
            if($(this).next('.submenu').length){
              $(this).next('.submenu').toggle();
            }
            $('.dropdown').on('hide.bs.dropdown', function () {
           $(this).find('.submenu').hide();
        })
        });
    }
    
  }); // jquery end
  </script>
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


    <script>
        filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
    </script>

</html>
