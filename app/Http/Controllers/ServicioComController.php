<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class ServicioComController extends Controller
{
    public function index(){

        $estudiantes = Estudiante::paginate();
        return view('ServicioCom.index', compact('estudiantes'));
    }
    public function create(){
        return view('ServicioCom.create');
    }
    public function store(Request $request){
        return $request->all();
    }
    public function show($id){
        $estudiante = Estudiante::find($id);
        return view('ServicioCom.show', compact('estudiante'));
    }
}
