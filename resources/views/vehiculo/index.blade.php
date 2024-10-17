<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vehiculos') }}
        </h2>
    </x-slot>

    <div class="container">
        <br> 
        <a href="{{ route('vehiculos.create') }}" class="btn btn-success">Agregar Vehiculo</a>
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Propietario</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Año</th>
                <th scope="col">Matricula</th>
                <th scope="col">Tipo</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($vehiculos as $vehiculo)
              <tr>
                <th scope="row">{{$vehiculo->id}}</th>
                <td>{{$vehiculo->nombre}}</td>
                <td>{{$vehiculo->marca}}</td>
                <td>{{$vehiculo->modelo}}</td>
                <td>{{$vehiculo->año}}</td>
                <td>{{$vehiculo->matricula}}</td>
                <td>{{$vehiculo->tipo}}</td>
                <td>
                    <a href="{{route('vehiculos.edit',['vehiculo'=>$vehiculo->id])}}" class="btn btn-info">Editar</a>

                    <form action="{{route('vehiculos.destroy', ['vehiculo'=>$vehiculo->id])}}" method="POST" 
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