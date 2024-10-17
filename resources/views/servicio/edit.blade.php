<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Servicio') }}
        </h2>
    </x-slot>

    <div class="container">
      <br>
      <form method="POST" action="{{route('servicios.update',['servicio'=>$servicio->id])}}">
        @method('put')
        @csrf
          <div class="mb-3">
           <label for="id" class="form-label">Id</label>
           <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disable" value="{{$servicio->id}}">
              <div id="idHelp" class="form-text">Cod Servicio</div>
          </div>
          <div class="mb-3">
            <label for="matricula" class="form-label">Placa Vehiculo</label>
        <select class="form-select" id="matricula" name="matricula" required>
            <option selected disabled value="">Seleccionar Uno...</option>
            @foreach ($vehiculos as $vehiculo )
            @if ($vehiculo->id ==$servicio->vehiculo_id)
            <option selected value="{{$vehiculo->id}}">{{$vehiculo->matricula}}</option>
            @else
            <option value="{{$vehiculo->id}}">{{$vehiculo->matricula}}</option>   
            
            @endif   
            @endforeach
        </select>
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Fecha de Servicio</label>
            <input type="date" id="fecha" name="fecha" value="{{$servicio->fecha_servicio}}" min="1900-01-01" max="2024-12-31" /> 
             
          </div>

          <div class="mb-3">
              <label for="name" class="form-label">Costo</label>
              <input type="text" class="form-control" id="costo" aria-describedby="costoHelp" name="costo" 
              value="{{$servicio->costo}}">
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Descripcion</label>
              <textarea class="form-control" id="descri"  name="descri" narows="3" value="">{{$servicio->descripcion}}</textarea>
            </div>  

        <div class="mt-3">
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{route('vehiculos.index')}}" class="btn btn-warning">Cancelar</a>
            
            
          </div>
      </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</x-app-layout>