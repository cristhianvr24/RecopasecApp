<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Http\Requests\StorePasantias;

class PasantiaController extends Controller
{
    public function index(){
        $estudiantes = Estudiante::orderBy('id')->paginate();
        return view('Pasantias.index', compact('estudiantes'));
    }
    public function create(){
        return view('Pasantias.create');
    }
    public function store(StorePasantias $request){
        $estudiante = Estudiante::create($request->all);
        return redirect()->route('pasantias.show', $estudiante);
    }
    public function show(Estudiante $estudiante){
        return view('Pasantias.show', compact('estudiante'));
    }
    public function edit(Estudiante $estudiante){
        return view('Pasantias.edit', compact('estudiante'));
    }
    public function update(Request $request, Estudiante $estudiante){
        $estudiante->update($request->all());
        return view('Pasantias.show', compact('estudiante'));
    } 
    public function destroy(Estudiante $estudiante){
        $estudiante->delete();
        return redirect()->route('pasantias.index');
    }
}

