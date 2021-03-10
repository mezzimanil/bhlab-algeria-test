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
    <!-- Styles -->
 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
  margin-right: 20rem;
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
                                    <div class="cd-dropdown-wrapper">
                                    <a href="#" class="cd-dropdown-trigger">Menuitem 1</a>
                                    <nav class="cd-dropdown">
                                      <h2>Title</h2>
                                      <a href="#0" class="cd-close">Close</a>
                                      <ul class="cd-dropdown-content">
                                        <li>
                                          <form class="cd-search">
                                            <input type="search" placeholder="Search...">
                                          </form>
                                        </li>
                                        <li class="has-children">
                                          <a href="http://codyhouse.co/?p=748">Clothing</a>
                              
                                          <ul class="cd-secondary-dropdown is-hidden">
                                            <li class="go-back"><a href="#0">Menu</a></li>
                                            <li class="see-all"><a href="http://codyhouse.co/?p=748">All Clothing</a></li>
                                            <li class="has-children">
                                              <a href="http://codyhouse.co/?p=748">Accessories</a>
                              
                                              <ul class="is-hidden">
                                                <li class="go-back"><a href="#0">Clothing</a></li>
                                                <li class="see-all"><a href="http://codyhouse.co/?p=748">All Accessories</a></li>
                                                <li class="has-children">
                                                  <a href="#0">Beanies</a>
                              
                                                  <ul class="is-hidden">
                                                    <li class="go-back"><a href="#0">Accessories</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">All Benies</a></li>
                                                    <li><a href="http://codyhouse.co/?p=748">Caps &amp; Hats</a></li>
                                                    <li><a href="http://codyhouse.co/?p=748">Gifts</a></li>
                                                    <li><a href="http://codyhouse.co/?p=748">Scarves &amp; Snoods</a></li>
                                                  </ul>
                                                </li>
                                                <li class="has-children">
                                                  <a href="#0">Caps &amp; Hats</a>
                              
                                                  <ul class="is-hidden">
                                                    <li class="go-back"><a href="#0">Accessories</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">All Caps &amp; Hats</a></li>
                                                    <li><a href="http://codyhouse.co/?p=748">Beanies</a></li>
                                                    <li><a href="http://codyhouse.co/?p=748">Caps</a></li>
                                                    <li><a href="http://codyhouse.co/?p=748">Hats</a></li>
                                                  </ul>
                                                </li>
                                                <li><a href="http://codyhouse.co/?p=748">Glasses</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Gloves</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Jewellery</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Scarves</a></li>
                                              </ul>
                                            </li>
                              
                                            <li class="has-children">
                                              <a href="http://codyhouse.co/?p=748">Bottoms</a>
                              
                                              <ul class="is-hidden">
                                                <li class="go-back"><a href="#0">Clothing</a></li>
                                                <li class="see-all"><a href="http://codyhouse.co/?p=748">All Bottoms</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Casual Trousers</a></li>
                                                <li class="has-children">
                                                  <a href="#0">Jeans</a>
                              
                                                  <ul class="is-hidden">
                                                    <li class="go-back"><a href="#0">Bottoms</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">All Jeans</a></li>
                                                    <li><a href="http://codyhouse.co/?p=748">Ripped</a></li>
                                                    <li><a href="http://codyhouse.co/?p=748">Skinny</a></li>
                                                    <li><a href="http://codyhouse.co/?p=748">Slim</a></li>
                                                    <li><a href="http://codyhouse.co/?p=748">Straight</a></li>
                                                  </ul>
                                                </li>
                                                <li><a href="#0">Leggings</a></li>
                                                <li><a href="#0">Shorts</a></li>
                                              </ul>
                                            </li>
                              
                                            <li class="has-children">
                                              <a href="http://codyhouse.co/?p=748">Jackets</a>
                              
                                              <ul class="is-hidden">
                                                <li class="go-back"><a href="#0">Clothing</a></li>
                                                <li class="see-all"><a href="http://codyhouse.co/?p=748">All Jackets</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Blazers</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Bomber jackets</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Denim Jackets</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Duffle Coats</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Leather Jackets</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Parkas</a></li>
                                              </ul>
                                            </li>
                              
                                            <li class="has-children">
                                              <a href="http://codyhouse.co/?p=748">Tops</a>
                              
                                              <ul class="is-hidden">
                                                <li class="go-back"><a href="#0">Clothing</a></li>
                                                <li class="see-all"><a href="http://codyhouse.co/?p=748">All Tops</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Cardigans</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Coats</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Polo Shirts</a></li>
                                                <li><a href="http://codyhouse.co/?p=748">Shirts</a></li>
                                                <li class="has-children">
                                                  <a href="#0">T-Shirts</a>
                              
                                                  <ul class="is-hidden">
                                                    <li class="go-back"><a href="#0">Tops</a></li>
                                                    <li class="see-all"><a href="http://codyhouse.co/?p=748">All T-shirts</a></li>
                                                    <li><a href="http://codyhouse.co/?p=748">Plain</a></li>
                                                    <li><a href="http://codyhouse.co/?p=748">Print</a></li>
                                                    <li><a href="http://codyhouse.co/?p=748">Striped</a></li>
                                                    <li><a href="http://codyhouse.co/?p=748">Long sleeved</a></li>
                                                  </ul>
                                                </li>
                                                <li><a href="http://codyhouse.co/?p=748">Vests</a></li>
                                              </ul>
                                            </li>
                                          </ul> <!-- .cd-secondary-dropdown -->
                                        </li> <!-- .has-children -->
                              
                                        <li class="has-children">
                                          <a href="http://codyhouse.co/?p=748">Gallery</a>
                              
                                          <ul class="cd-dropdown-gallery is-hidden">
                                            <li class="go-back"><a href="#0">Menu</a></li>
                                            <li class="see-all"><a href="http://codyhouse.co/?p=748">Browse Gallery</a></li>
                                            <li>
                                              <a class="cd-dropdown-item" href="http://codyhouse.co/?p=748">
                                                <img src="img/img.png" alt="Product Image">
                                                <h3>Product #1</h3>
                                              </a>
                                            </li>
                              
                                            <li>
                                              <a class="cd-dropdown-item" href="http://codyhouse.co/?p=748">
                                                <img src="img/img.png" alt="Product Image">
                                                <h3>Product #2</h3>
                                              </a>
                                            </li>
                              
                                            <li>
                                              <a class="cd-dropdown-item" href="http://codyhouse.co/?p=748">
                                                <img src="img/img.png" alt="Product Image">
                                                <h3>Product #3</h3>
                                              </a>
                                            </li>
                              
                                            <li>
                                              <a class="cd-dropdown-item" href="http://codyhouse.co/?p=748">
                                                <img src="img/img.png" alt="Product Image">
                                                <h3>Product #4</h3>
                                              </a>
                                            </li>
                                          </ul> <!-- .cd-dropdown-gallery -->
                                        </li> <!-- .has-children -->
                              
                                        <li class="has-children">
                                          <a href="http://codyhouse.co/?p=748">Services</a>
                                          <ul class="cd-dropdown-icons is-hidden">
                                            <li class="go-back"><a href="#0">Menu</a></li>
                                            <li class="see-all"><a href="http://codyhouse.co/?p=748">Browse Services</a></li>
                                            <li>
                                              <a class="cd-dropdown-item item-1" href="http://codyhouse.co/?p=748">
                                                <h3>Service #1</h3>
                                                <p>This is the item description</p>
                                              </a>
                                            </li>
                              
                                            <li>
                                              <a class="cd-dropdown-item item-2" href="http://codyhouse.co/?p=748">
                                                <h3>Service #2</h3>
                                                <p>This is the item description</p>
                                              </a>
                                            </li>
                              
                                            <li>
                                              <a class="cd-dropdown-item item-3" href="http://codyhouse.co/?p=748">
                                                <h3>Service #3</h3>
                                                <p>This is the item description</p>
                                              </a>
                                            </li>
                              
                                            <li>
                                              <a class="cd-dropdown-item item-4" href="http://codyhouse.co/?p=748">
                                                <h3>Service #4</h3>
                                                <p>This is the item description</p>
                                              </a>
                                            </li>
                              
                                            <li>
                                              <a class="cd-dropdown-item item-5" href="http://codyhouse.co/?p=748">
                                                <h3>Service #5</h3>
                                                <p>This is the item description</p>
                                              </a>
                                            </li>
                              
                                            <li>
                                              <a class="cd-dropdown-item item-6" href="http://codyhouse.co/?p=748">
                                                <h3>Service #6</h3>
                                                <p>This is the item description</p>
                                              </a>
                                            </li>
                              
                                            <li>
                                              <a class="cd-dropdown-item item-7" href="http://codyhouse.co/?p=748">
                                                <h3>Service #7</h3>
                                                <p>This is the item description</p>
                                              </a>
                                            </li>
                              
                                            <li>
                                              <a class="cd-dropdown-item item-8" href="http://codyhouse.co/?p=748">
                                                <h3>Service #8</h3>
                                                <p>This is the item description</p>
                                              </a>
                                            </li>
                              
                                            <li>
                                              <a class="cd-dropdown-item item-9" href="http://codyhouse.co/?p=748">
                                                <h3>Service #9</h3>
                                                <p>This is the item description</p>
                                              </a>
                                            </li>
                              
                                            <li>
                                              <a class="cd-dropdown-item item-10" href="http://codyhouse.co/?p=748">
                                                <h3>Service #10</h3>
                                                <p>This is the item description</p>
                                              </a>
                                            </li>
                              
                                            <li>
                                              <a class="cd-dropdown-item item-11" href="http://codyhouse.co/?p=748">
                                                <h3>Service #11</h3>
                                                <p>This is the item description</p>
                                              </a>
                                            </li>
                              
                                            <li>
                                              <a class="cd-dropdown-item item-12" href="http://codyhouse.co/?p=748">
                                                <h3>Service #12</h3>
                                                <p>This is the item description</p>
                                              </a>
                                            </li>
                              
                                          </ul> <!-- .cd-dropdown-icons -->
                                        </li> <!-- .has-children -->
                              
                                        <li class="cd-divider">Divider</li>
                              
                                        <li><a href="http://codyhouse.co/?p=748">Page 1</a></li>
                                        <li><a href="http://codyhouse.co/?p=748">Page 2</a></li>
                                        <li><a href="http://codyhouse.co/?p=748">Page 3</a></li>
                                      </ul> <!-- .cd-dropdown-content -->
                                    </nav> <!-- .cd-dropdown -->
                                    </div>
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- MeanMenu JS -->
<script src="https://techsolutionshere.com/wp-content/themes/techsolution/assets/blog-post-css-js/jquery.meanmenu.js"></script>
<script>
	// Mean Menu
	jQuery('.mean-menu').meanmenu({
		meanScreenWidth: "991"
	});
</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.9.0/jquery.hoverIntent.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js'></script>


<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/jquery-2.1.1.js') }}"></script>
<script src="{{ asset('js/jquery.menu-aim.js') }}"></script>
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
