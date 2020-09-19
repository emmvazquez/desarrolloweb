@extends('personas.plantilla')
@section('contenido')

<div class="container">
	<div class="row">
		<div class="col-12">
			<form method="POST" action="{{ route('personas.update',['person'=>$person->id]) }}">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="Name" required class="form-control" value="{{$person->Name }}">
				</div>
				<div class="form-group">
					<label>Apellidos</label>
					<input type="text" name="LastName" required class="form-control" value="{{$person->LastName }}">
				</div>
				<div class="form-group">
					<label>Fecha de Nacimiento</label>
					<input type="date" name="Birthday" required class="form-control" value="{{$person->Birthday }}">
				</div>
				<div class="form-group">
					<label>Sexo</label>
					<select name="Gender" class="form-control">
						<option>Mujer</option>
						<option>Hombre</option>
					</select>
				</div>
				<div class="form-group">
					<label>Pasatiempo</label>
					<input type="text" name="Hobby" value="{{$person->Hobby }}" class="form-control">
				</div>
				
				<input type="submit" name="Actualizar" value="Actualizar" class="btn btn-success">
				<a href="{{ route('personas.index')}}" class="btn btn-danger">Cancelar</a>
			</form>
			</div>
	</div>
</div>

@endsection