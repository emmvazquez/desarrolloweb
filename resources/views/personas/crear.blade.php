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
		<select name="Gender">
			<option>Mujer</option>
			<option>Hombre</option>
		</select>
	</div>
	<div class="form-group">
		<label>Pasatiempo</label>
		<input type="text" name="Hobby">
	</div>
	
	<input type="submit" name="Enviar">
</form>