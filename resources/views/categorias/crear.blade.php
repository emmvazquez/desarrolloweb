<h2>Formulario Categorias</h2>
<form action="{{ route('categorias.insert')}}" method="POST">
	@csrf
	<div class="form-group">
		<label for="categoria">Categoría</label>
		<input type="text" name="categoria">
	</div>
	<div class="form-group">
		<label for="descripcion">Descripción</label>
		<input type="text" name="descripcion">
	</div>
	<input type="submit" name="Guardar" >
	

	
</form>