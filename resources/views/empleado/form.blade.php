<h1>{{ $modo }} empleado</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>

@endif

<div class="form-group">
<label for="Nombre">Nombre</label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">

</div>

<div class="form-group">
<label for="Apellido">Apellido</label>
<input type="text" class="form-control" name="Apellido" value="{{ isset($empleado->Apellido)?$empleado->Apellido:old('Apellido') }}" id="Apellido">

</div>

<div class="form-group">
<label for="Email">Correo</label>
<input type="email" class="form-control" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo">

</div>

<div class="form-group">
<label for="Telefono">Telefono</label>
<input type="number" class="form-control" name="Telefono" value="{{ isset($empleado->Telefono)?$empleado->Telefono:old('Telefono') }}" id="Telefono">

</div>

<div class="form-group">
<label for="Direccion">Dirección</label>
<input type="text" class="form-control" name="Direccion" value="{{ isset($empleado->Direccion)?$empleado->Direccion:old('Direccion') }}" id="Direccion">

</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos" id="Enviar">

<a class="btn btn-primary" href="{{ url('empleado/')}}">Regresar</a>

<br>