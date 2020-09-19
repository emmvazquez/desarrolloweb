@extends('layouts.master')

@section('content')
	<h1>{{ $categoria->descripcion }}</h1>
	<h2>{{ $categoria->categoria}}</h2>

	<a href="{{route('categorias.index')}}">Regresar a categorias</a>
@endsection