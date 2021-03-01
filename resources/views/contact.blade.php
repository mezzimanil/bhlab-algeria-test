@extends('layouts.app')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
</head>


@section('content')
<body>

    <div style="background: url({{ asset('image/white.jpg') }})" class="jumbotron bg-cover text-white">
        <div class="container py-5 text-center">
            <h1 class="display-4 font-weight-bold">Contacter nous</h1>
           
         
        </div>
    </div>
    <div class="container">
        <div class="map bo8 bo-rad-10 of-hidden">
            <!--data-pin="images/icons/icon-position-map.png" 
            
            class="contact-map size37" id="google_map" data-map-x="40.704644" data-map-y="-74.011987" data-scrollwhell="0" data-draggable="1"
        
        -->
            <div class="contact-map size37">
                
                <iframe  src="https://maps.google.com/maps?q=BH%20Lab%20Alg%C3%A9rie&t=&z=13&ie=UTF8&iwloc=&output=embed" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                   
                    <div class="card-header">
                        Envoyer un message

                    </div>
                    <div class="card-body">
                        @if (Session::get('message_sent'))
                       <div class="alert alert-success" role="alert">
                            {{Session::get('message_sent')}}
                       </div>
                        @endif
                        <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group row">
                                <label for="name">{{ __('Votre nom') }}</label>
    
                               
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>
    
                            <div class="form-group row">
                                <label for="email" >{{ __('Votre E-Mail ') }}</label>
    
                                
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>
                            <div class="form-group row">
                                <label for="phone">{{ __('Votre numero de telephone') }}</label>
    
                               
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
    
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>
                            <div class="form-group">
                                <label for="message">{{ __('Votre message') }}</label>
                               
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
            
        </div>

        
    


</body>
@endsection
</html>