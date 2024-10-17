<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Servicios') }}
        </h2>
    </x-slot>

    <div class="container">
        <br> 
        <a href="{{ route('servicios.create') }}" class="btn btn-success">Agregar Servicio</a>
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Placa Vehiculo</th>
                <th scope="col">Fecha Servicio</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Costo</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($servicios as $servicio)
              <tr>
                <th scope="row">{{$servicio->id}}</th>
                <td>{{$servicio->matricula}}</td>
                <td>{{$servicio->fecha_servicio}}</td>
                <td>{{$servicio->descripcion}}</td>
                <td>{{$servicio->costo}}</td>
                <td>
                    <a href="{{route('servicios.edit',['servicio'=>$servicio->id])}}" class="btn btn-info">Editar</a>

                    <form action="{{route('servicios.destroy', ['servicio'=>$servicio->id])}}" method="POST" 
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