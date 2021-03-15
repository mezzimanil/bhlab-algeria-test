@extends('layouts.app')
@section('content')
    

<style>
.bg-cover {
    background-size: cover !important;
}



/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/

body {
    min-height: 100vh;
}
</style>
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link href="{{ asset('css/util.css') }}" rel="stylesheet">

<body>

  

        <div style="background: url(https://i.postimg.cc/3N7wnb75/background.jpg)" class="jumbotron bg-cover text-white">
            <div class="container py-5 text-center">
                <h1 class="display-4 font-weight-bold">Découvrez nos partenaires</h1>
               
             
            </div>
        </div>
   
    <main >

        
      
      
        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
      
        <div class="container marketing ">
      
          <!-- Three columns of text below the carousel -->
          
      
      
          <!-- START THE FEATURETTES -->
      

          <section class="section-intro">
          
    
            <div class="content-intro  p-t-77 p-b-133" style="background-color: rgb(241, 241, 241)">
                <div class="container">
                    <div class="row">
                        @foreach ($fournisseurs as $fournisseur)
                            
                        @endforeach
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <img class="shadow" src="{{ asset('image/abbott.jpg') }}" alt="IMG-INTRO">
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                   abbott
                                	</h4>
    
                                    
    
                                </div>
                            </div>
                        </div>
    
                      
                    </div>
                </div>
            </div>
        </section>
        </div>
    </main>
</body>
@endsection