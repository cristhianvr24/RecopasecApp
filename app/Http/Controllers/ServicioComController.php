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
        
        $estudiante = Estudiante::create($request->all);
        return redirect()->route('serviciocom.show', $estudiante);
    }
    public function show(Estudiante $estudiante){
        return view('serviciocom.show', compact('estudiante'));
    }
    public function edit(Estudiante $estudiante){
        return view('serviciocom.edit', compact('estudiante'));
    }
    public function update(Request $request, Estudiante $estudiante){
        
        $estudiante->update($request->all());
        return view('serviciocom.show', compact('estudiante'));
    }
}
