<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>IGNIWEB</title>
  </head>
  <body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido') }} {{ Auth::user()->name }}
        </h2>
      
    </x-slot>

       <div class="py-12">
        
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg btn-group">
                <div class="p-6 text-gray-900">
                    <a href="{{ url('/misreserva') }}">
                     <button class="btn btn-primary">Mis reservas</button>
                    </a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="{{ url('/bibliotecaV') }}">
                     <button class="btn btn-primary">Bilioteca</button>
                    </a>
                </div>
            </div>
          </div>
        </div>
    
    

    <table class="table max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">              
       
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </x-app-layout>
  </body>
</html>


