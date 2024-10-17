<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Propietario') }}
        </h2>
    </x-slot>

    <div class="container">
      <br>
      <form method="POST" action="{{route('vehiculos.update',['vehiculo'=>$vehiculo->id])}}">
        @method('put')
        @csrf
          <div class="mb-3">
           <label for="id" class="form-label">Id</label>
           <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disable" value="{{$vehiculo->id}}">
              <div id="idHelp" class="form-text">Id Vehiculo</div>
          </div>
          <div class="mb-3">
            <label for="propietario" class="form-label">Propietario</label>
        <select class="form-select" id="propi" name="propi" required>
            <option selected disabled value="">Seleccionar Uno...</option>
            @foreach ($propietarios as $propietario )
            @if ($propietario->id ==$vehiculo->propietario_id)
            <option selected value="{{$propietario->id}}">{{$propietario->nombre}}</option>
            @else
            <option value="{{$propietario->id}}">{{$propietario->nombre}}</option>   
            
            @endif   
            @endforeach
        </select>
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" aria-describedby="marcaHelp" name="marca" 
             value="{{$vehiculo->marca}}">
          </div>

          <div class="mb-3">
              <label for="name" class="form-label">Modelo</label>
              <input type="text" class="form-control" id="modelo" aria-describedby="modeloHelp" name="modelo" 
              value="{{$vehiculo->modelo}}">
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Año</label>
              <input type="text" class="form-control" id="year" aria-describedby="yearHelp" name="year" 
              value="{{$vehiculo->año}}">
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Matricula</label>
              <input type="text" class="form-control" id="matricula" aria-describedby="matriculaHelp" name="matricula" 
              value="{{$vehiculo->matricula}}">
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Tipo</label>
              <select id="tipo" name="tipo" class="block mt-1 w-full">
                <option selected disabled value="{{$vehiculo->tipo}}"></option>
                <option value="empleado">Sedan</option>
                <option value="cliente">Camioneta</option>
                <option value="empleado">Camion</option>
                <option value="cliente">Moto</option>
            </select>
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