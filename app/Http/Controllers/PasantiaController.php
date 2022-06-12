<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class PasantiaController extends Controller
{
    public function index(){
        $estudiantes = Estudiante::paginate();
        return view('Pasantias.index', compact('estudiantes'));
    }
    public function create(){
        return view('Pasantias.create');
    }
    public function show($id){
        $estudiante = Estudiante::find($id);
        return view('Pasantias.show', compact('estudiante'));
    }
}
