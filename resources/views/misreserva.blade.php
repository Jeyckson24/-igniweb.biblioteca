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


    <!-- The table and columns are created to display the information -->

    <table class="table max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">              
        <thead>
            
                
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Accion</th>
            
        </thead>
    <!--The database is scanned with the information found, but only those whose value is the user id in the id_usuario column are shown-->
        <tbody>
        
            @forelse ($libros as $item)
             @if ($item->id_usuario == Auth::user()->id)
                <tr>
                    
                    <td>{{$item->titulo}}</td>
                    <td>{{$item->autor}}</td>
                    <td><button class="btn btn-success" data-id="{{ $item->id }}" onclick="deactivateBook(this)">Devolver</button></td>
                </tr>
              @endif
            @empty
                
            @endforelse
        </tbody>
        
    </table>

    <!-- Code for the return of the book, what it does is that it takes the value of the user's id and sends it to change the field in the id_user database, which is the identifier for
    know which user has the book -->

    
    <script>
      function deactivateBook(elem) {
          var id = $(elem).data('id');
          $.ajax({
              url: "misreserva/" + id,
              type: "PUT",
              async: true,
              data: {
                  '_token': "{{ csrf_token() }}",
                  'id_usuario': 0
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


