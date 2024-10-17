<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Propietario') }}
        </h2>
    </x-slot>

    <div class="container">
        <br> 
        <a href="{{ route('propietarios.create') }}" class="btn btn-success">Agregar Propietario</a>
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Direccion</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($propietarios as $propietario)
              <tr>
                <th scope="row">{{$propietario->id}}</th>
                <td>{{$propietario->nombre}}</td>
                <td>{{$propietario->apellidos}}</td>
                <td>{{$propietario->telefono}}</td>
                <td>{{$propietario->email}}</td>
                <td>{{$propietario->direccion}}</td>
                <td>
                    <a href="{{route('propietarios.edit',['propietario'=>$propietario->id])}}" class="btn btn-info">Editar</a>

                    <form action="{{route('propietarios.destroy', ['propietario'=>$propietario->id])}}" method="POST" 
                        style="display: inline-block">
                        @method('delete')
                        @csrf
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                        </form>
                </td>
              </tr>
              @endforeach
            </tbody>
            
          </table>
    
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
        </div>
</x-app-layout>