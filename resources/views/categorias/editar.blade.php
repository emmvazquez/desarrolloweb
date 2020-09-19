<h2>Formulario Categorias</h2>
<form action="{{ route('categorias.update',['categoria'=>$categoria->id])}}" method="POST">
	@csrf
	@method('PUT')
	<div class="form-group">
		<label for="categoria" value="categoria">Categoría</label>
		<input type="text" name="categoria" value="{{$categoria->categoria}}">
	</div>
	<div class="form-group">
		<label for="descripcion">Descripción</label>
		<input type="text" name="descripcion" value="{{$categoria->descripcion}}">
	</div>
	<input type="submit" name="Guardar" >
	

	
</form>