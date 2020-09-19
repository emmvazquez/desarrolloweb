@extends('personas.plantilla')

@section('contenido')

  	<div class="container">
  		<div class="row">
  			<div class="col">
  				
  			
    <h1>Categorias</h1>
    @empty ($categorias)
        <div class="alert alert-warning">
          No hay productos
        </div>
    @else

  <a href="{{ route('categorias.crear')}}" class="btn btn-success">Crear categoría</a>
   <table class="table table-striped">
	<thead>
		<th>Id</th>
		<th>Categoría</th>
    <th>Acciones</th>
	</thead>  
	<tbody>
    @foreach ($categorias as $key)
		<tr>
			<td>
        {{ $key->id}}   
      </td>
			<td>

				
					{{ $key->descripcion}}
				
			</td>
      <td>
       <a class="btn btn-info" href="{{ route('categorias.show',$key->id)}}">Ver</a>
       <a class="btn btn-info" href="{{ route('categorias.editar',$key->id)}}">Editar</a>
      </td>
		</tr>
    @endforeach
	</tbody> 		
   </table>


		</div>
  		</div>
  	</div>
 @endempty

@endsection
    