<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Propietario') }}
        </h2>
    </x-slot>

    <div class="container">
      <br>
      <form method="POST" action="{{route('propietarios.update',['propietario'=>$propietario->id])}}">
          @method('put')
          @csrf
          <div class="mb-3">
            <label for="id" class="form-label">Id</label>
            <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disable" 
                value="{{$propietario->id}}">
            <div id="idHelp" class="form-text">Id Propietario</div>
          </div>
          
          <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" aria-describedby="nameHelp" name="nombre" 
              value="{{$propietario->nombre}}">
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" aria-describedby="apellidosHelp" name="apellidos" 
                value="{{$propietario->apellidos}}">
          </div>

          <div class="mb-3">
              <label for="name" class="form-label">Telefono</label>
              <input type="text" class="form-control" id="telefono" aria-describedby="telefonoHelp" name="telefono" 
                value="{{$propietario->telefono}}">
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" 
                value="{{$propietario->email}}">
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Direccion</label>
              <input type="text" class="form-control" id="direccion" aria-describedby="direccionHelp" name="direccion" 
                value="{{$propietario->direccion}}">
            </div>

          <div class="mt-3">
              <button type="submit" class="btn btn-success">Guardar</button>
              <a href="{{route('propietarios.index')}}" class="btn btn-warning">Cancelar</a>
              
              
            </div>
          
        </form>
  
  
      </div>
  
     
  
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</x-app-layout>