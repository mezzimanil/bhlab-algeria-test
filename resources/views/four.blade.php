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
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.abbott.com/"><img class="shadow" src="{{ asset('image/abbott.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="https://www.abbott.com/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                   abbott
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.orthoclinicaldiagnostics.com/en-us/home/privacy-notice"><img src="{{ asset('image/ortho.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35 mr-4" >
                                    <a href="https://www.orthoclinicaldiagnostics.com/en-us/home/privacy-notice"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        Ortho
                                        clinical
                                        diagnostics
                                    </h4></a>
    
                                    <p class="m-b-20">
                                        ks,dflk,sdlfknsld,nvsdlknvlsdknvlskdnvsd
                                        vslkdnvlskndvlksndvlknsdlkvnsldkvn
                                    </p>
    
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.werfen.com/en"><img src="{{ asset('image/werfen.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="https://www.werfen.com/en"><h4 class="txt5 color0-hov trans-0-4 m-b-13 ">
                                       Werfen
                                    </h4></a>
    
                                    <p class="m-b-20">
                                        kdjfsdlkflskdjflskjdfklsjdflskjdflksjdflskjdfs
                                        sdflkjsdlfkjslkdfjslkdjflskjdflskjdflksjdf
                                    </p>
    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.diasorin.com/home/"><img src="{{ asset('image/diasorin.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="https://www.diasorin.com/home/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    diasorin
                                    </h4></a>
    
                                    
    
                                  
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.capp.dk/"><img src="{{ asset('image/capp.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="https://www.capp.dk/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                           CAPP
                                    </h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.lagitre.com/"><img src="{{ asset('image/lagitre.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="https://www.lagitre.com/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    lagitre
                                    </h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="http://www.adaltis.net/"><img class="shadow" src="{{ asset('image/adaltis.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="http://www.adaltis.net/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    adaltis
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="http://www.arkray.eu/english/index.html?ct=Europe"><img src="{{ asset('image/arkray.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="http://www.arkray.eu/english/index.html?ct=Europe"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        arkray
                                    </h4></a>
    
                                    <p class="m-b-20">
                                        ks,dflk,sdlfknsld,nvsdlknvlsdknvlskdnvsd
                                        vslkdnvlskndvlksndvlknsdlkvnsldkvn
                                    </p>
    
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="http://entrogen.com/web3/"><img src="{{ asset('image/e.JPG') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="http://entrogen.com/web3/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    entrogen
                                    </h4></a>
    
                                    <p class="m-b-20">
                                        kdjfsdlkflskdjflskjdfklsjdflskjdflksjdflskjdfs
                                        sdflkjsdlfkjslkdfjslkdjflskjdflskjdflksjdf
                                    </p>
    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.merckgroup.com/en"><img src="{{ asset('image/merck.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="https://www.merckgroup.com/en"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    merck
                                    </h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.bindingsite.com/en/disclaimer?returnUrl=%252f"><img src="{{ asset('image/site.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="https://www.bindingsite.com/en/disclaimer?returnUrl=%252f"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    binding site
                                    </h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="http://www.d-tek.be/en/"><img src="{{ asset('image/dtek.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="http://www.d-tek.be/en/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                            d-tek
                                    </h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://sacace.com/"><img class="shadow" src="{{ asset('image/sacace.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="https://sacace.com/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    sacace
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.bio-rad.com/"><img src="{{ asset('image/biorad.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="https://www.bio-rad.com/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        biorad
                                    </h4></a>
    
                                    <p class="m-b-20">
                                        ks,dflk,sdlfknsld,nvsdlknvlsdknvlskdnvsd
                                        vslkdnvlskndvlksndvlknsdlkvnsldkvn
                                    </p>
    
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.horiba.com/en_en/"><img src="{{ asset('image/horiba.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="https://www.horiba.com/en_en/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                        horiba
                                    </h4></a>
    
                                    <p class="m-b-20">
                                        kdjfsdlkflskdjflskjdfklsjdflskjdflksjdflskjdfs
                                        sdflkjsdlfkjslkdfjslkdjflskjdflskjdflksjdf
                                    </p>
    
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