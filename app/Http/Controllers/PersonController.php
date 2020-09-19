<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Person;

class PersonController extends Controller
{
     public function index(){
     	//$personas = Person::all();

     	$personas = Person::where('Gender','Mujer')->
     				orderBy('Name')->get();
    	
    		return view('personas.inicio')->with([
    		'personas'=>$personas]);
    }


    public function detalle($Id){
    	$persona = Person::findOrFail($Id);

    	return view('personas.detalle')->with([
    		'persona'=>$persona]);
    }


    public function crear()
    {
        return view('personas.crear');
    }

    public function insert()
    {
        $person = Person::create(request()->all());
        dd("ya se insertó");
    }

}

