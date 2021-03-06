@extends('personas.plantilla')
@section('contenido')

<div class="container">
	<div class="row">
		<div class="col-12">
				<form method="POST" action="{{ route('personas.insert') }}">
				@csrf
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="Name" required class="form-control">
				</div>
				<div class="form-group">
					<label>Apellidos</label>
					<input type="text" name="LastName" required class="form-control">
				</div>
				<div class="form-group">
					<label>Fecha de Nacimiento</label>
					<input type="date" name="Birthday" required class="form-control">
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
					<input type="text" name="Hobby" class="form-control">
				</div>
				
				<input type="submit" name="Enviar" class="btn btn-success">
				<a href="{{ route('personas.index')}}" class="btn btn-danger">Cancelar</a>
			</form>

		</div>
	</div>
</div>


@endsection