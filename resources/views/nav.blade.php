<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<style>
.navbar {
  padding:0rem;
  margin-bottom:2rem;
}

.dropdown .dropdown-menu {
  border-radius:0;
 }


/* Medium devices (tablets, 768px and up) 
The navbar toggle appears at this breakpoint */
@media (min-width: 768px) {  
.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
  border-radius:0;
 }
  
  .kd-on{
    border:solid;
    border-color:#50ebeb;
    border-width:1px;
    background:#e2e2e2;
  }
}

</style>
<body>
  
    
    <div class="d-flex flex-row p-2 justify-content-between kd-on">
        <div class="p-2 kd-on">Flex item Logo</div>
        <div class="p-2 kd-on">Flex item Main Menu with icons</div>
        <div class="p-2 kd-on">Flex item Search Form, Socials, Langs</div>
        </div>
      
      <!-- SNIPPET CODE: 1.NAVBAR TOGLLE BUTTON-->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
       
        
        <!-- SNIPPET CODE: 1.NAVBAR TOGLLE BUTTON-->
        <div class="navbar-toggler-right">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
        </div>
      
      
        <!-- SNIPPET CODE: 2.NAVBAR MAIN MENU-->
      
        <div class="collapse navbar-collapse flex-column " id="navbar">
      
          <ul class="navbar-nav  w-100 justify-content-center px-3">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home1 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown 1
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown 2
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown 3
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
      
          <ul class="navbar-nav justify-content-center w-100 bg-secondary px-3">
         
        <li class="social">
              <a href="http://twitter.com"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="social">
              <a href="http://facebook.com"><i class="fab fa-facebook-square"></i></a>
            </li>
            <li class="social">
              <a href="http://youtube.com"><i class="fab fa-youtube-square"></i></a>
            </li>
            <li class="social">
              <a href="http://instagram.com"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
      
      
        </div>
      
      </nav>
   
     
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>