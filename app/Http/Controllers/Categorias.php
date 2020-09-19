<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categoria;


class Categorias extends Controller
{
    public function index(){
    	$categorias = Categoria::all();
    	//$categorias = ::table('categorias')->first();

    	//dd($categorias);
    	//return $categorias;
    	
    	return view('categorias.home')->with([
    		'categorias'=>$categorias]);
    }

    public function show($IdCategoria){
    	$categoria = Categoria::findOrFail($IdCategoria);

    	//return $categoria;
    	return view('categorias.detalle')->with([
    		'categoria'=>$categoria]);

    }
    public function detalle($IdCategoria,$Variable){
    	//$categorias = DB::table('categorias')->get()->where('id',$IdCategoria);
    	$categorias = DB::table('categorias')->find($IdCategoria);

    	dd($categorias);
    	print "Aqui aparecerá el detalle de categoria desde el Controller ".$IdCategoria." la variable ".$Variable;
    }

    public function crear(){
    	return view('categorias.crear');
    }

    public function insert(){
        $categoria = Categoria::create(request()->all());
        return $categoria;
    }

    public function editar($categoria){

        return view('categorias.editar')->with(
            ['categoria' =>Categoria::findOrFail($categoria)]);
    }

    public function update($categoria){
        $categoria = Categoria::findOrFail($categoria);
        $categoria->update(request()->all());
        return $categoria;
    }
}
