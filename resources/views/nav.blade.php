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

@media (max-width: 768px) {
    .fixed-top-sm {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030;
    }
    body {
        padding-top: 44px;
    }
}

</style>
<body>
  
    
    <nav class="navbar navbar-expand-md fixed-top-sm justify-content-start flex-nowrap bg-dark navbar-dark">
        <a href="/" class="navbar-brand">Top</a>
        <ul class="navbar-nav flex-row">
            <li class="nav-item active">
                <a class="nav-link px-2" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2" href="#">Link</a>
            </li>
        </ul>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <nav class="navbar navbar-expand-md bg-light navbar-light">
        <div class="navbar-collapse collapse pt-2 pt-md-0" id="navbar2">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
            </ul>
        </div>
    </nav>
     
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>