@extends('personas.plantilla')
@section('contenido')
    <h1>Listado de personas</h1>

    <div class="container">
      <div class="row">
          <div class="col">
            <a href="{{ route('personas.crear')}}" class="btn btn-success">+ Persona</a>
            <table class="table table-striped">
              <thead>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Genero</th>
                <th>Acciones</th>
              </thead>

              <tbody>
                @foreach ($personas as $key)
                <tr>
                  <td><a href="personas/detalle/{{ $key->id}}">{{ $key->Name }}</a></td>
                  <td>{{ $key->LastName }}</td>
                  <td>{{ $key->Gender }}</td>
                  <td>
                    <a href="{{ route('personas.actualizar', $key->id) }}" class="btn btn-warning">Editar</a>
                  </td>
                </tr>
                @endforeach
              </tbody>

            </table>

          </div>
      </div>
    </div>
@endsection
