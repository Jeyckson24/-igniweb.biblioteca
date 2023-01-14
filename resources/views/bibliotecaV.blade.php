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

 
    
    

    <table class="table max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">              
        <thead>
            
                
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Accion</th>
            
        </thead>
        <tbody>
        
            @forelse ($libros as $item)
             @if ($item->id_usuario == 0)
                <tr>
                    
                    <td>{{$item->titulo}}</td>
                    <td>{{$item->autor}}</td>
                    <td><button class="btn btn-primary" data-id="{{ $item->id }}" onclick="reservarLibro(this)">Reservar</button></td>
                </tr>
              @endif
            @empty
              <tr>
                <td colspan="3">No hay productos activos</td>
              </tr>

                
            @endforelse
        </tbody>
        
    </table>

    <script>
      function reservarLibro(elem) {
          var id = $(elem).data('id');
          $.ajax({
              url: "bibliotecaV/" + id,
              type: "PUT",
              async: true,
              data: {
                  '_token': "{{ csrf_token() }}",
                  'id_usuario': {{ Auth::user()->id }}
              },
              success: function(data) {
                  console.log(data);
                  location.reload();
              }
          });
      }
    </script>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </x-app-layout>
  </body>
</html>


