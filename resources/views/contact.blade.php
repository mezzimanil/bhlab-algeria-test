@extends('layouts.app')


<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
</head>
<body>
    



    @section('content')
    <div style="background: url({{ asset('image/white.jpg') }})" class="jumbotron bg-cover text-white">
        <div class="container py-5 text-center">
            <h1 class="display-4 font-weight-bold">Contacter nous</h1>
           
         
        </div>
    </div>
    
    
        <div class="row justify-content-center">
            <div class="col-md-5 mt-5">
                <div class="card">
                   
                    <div class="card-header">
                        Envoyer un message

                    </div>
                    <div class="card-body bg-secondary">
                        @if (Session::get('message_sent'))
                       <div class="alert alert-success" role="alert">
                            {{Session::get('message_sent')}}
                       </div>
                        @endif
                        <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group row">
                                <label for="name" style="color: white">{{ __('Votre nom') }}</label>
    
                               
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>
    
                            <div class="form-group row">
                                <label for="email" style="color: white">{{ __('Votre E-Mail ') }}</label>
    
                                
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>
                            <div class="form-group row">
                                <label for="phone" style="color: white">{{ __('Votre numero de telephone') }}</label>
    
                               
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
    
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>
                            <div class="form-group">
                                <label for="message" style="color: white">{{ __('Votre message') }}</label>
                               
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
            <div class="col-md-5">
                <div class="map bo8 bo-rad-10 of-hidden">
                    <!--data-pin="images/icons/icon-position-map.png" 
                    
                    class="contact-map size37" id="google_map" data-map-x="40.704644" data-map-y="-74.011987" data-scrollwhell="0" data-draggable="1"
                
                -->
                    <div class="contact-map size37">
                        
                        <iframe  src="https://maps.google.com/maps?q=BH%20Lab%20Alg%C3%A9rie&t=&z=13&ie=UTF8&iwloc=&output=embed"  width="600" height="440" frameborder="0" style="border:0; margin:0 auto;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

      

        
    

        @endsection
</body>

</html>
