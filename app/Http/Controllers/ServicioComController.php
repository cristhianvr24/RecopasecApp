<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServicioCom;

class ServicioComController extends Controller
{
    public function index(){

        $estudiantes = Estudiante::orderBy('id')->paginate();
        return view('ServicioCom.index', compact('estudiantes'));
    }
    public function create(){
        return view('ServicioCom.create');
    }
    public function store(StoreServicioCom $request){
        $estudiante = new Estudiante();
        $estudiante->cedula = $request->cedula;
        $estudiante->nombre_1 = $request->nombre_1;
        $estudiante->nombre_2 = $request->nombre_2;
        $estudiante->apellido_1 = $request->apellido_1;
        $estudiante->apellido_2 = $request->apellido_2;
        $estudiante->telefono = $request->telefono;
        $estudiante->email = $request->email;

        $estudiante->save();
        return redirect()->route('serviciocom.show', $estudiante);
    }
    public function show(Estudiante $estudiante){
        return view('serviciocom.show', compact('estudiante'));
    }
    public function edit(Estudiante $estudiante){
        return view('serviciocom.edit', compact('estudiante'));
    }
    public function update(Request $request, Estudiante $estudiante){
        $estudiante->cedula = $request->cedula;
        $estudiante->nombre_1 = $request->nombre_1;
        $estudiante->nombre_2 = $request->nombre_2;
        $estudiante->apellido_1 = $request->apellido_1;
        $estudiante->apellido_2 = $request->apellido_2;
        $estudiante->telefono = $request->telefono;
        $estudiante->email = $request->email;

        $estudiante->save();
        return view('serviciocom.show', compact('estudiante'));
    }
}
