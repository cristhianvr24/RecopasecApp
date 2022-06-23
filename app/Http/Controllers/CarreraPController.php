<?php

namespace App\Http\Controllers;
use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraPController extends Controller
{
    public function index(){
        $carreras = Carrera::orderBy('id')->paginate();
        return view('Pasantias.index', compact('carreras'));
    }
    public function create(){
        return view('Pasantias.createcarrera');
    }
    public function store(Request $request){
        $request->validate([
            'codigo'=> 'required|max:04',
            'nombre'=> 'required|max:20',
        ]);
        $carrera = new Carrera();
        $carrera->codigo = $request->codigo;
        $carrera->nombre = $request->nombre;
        $carrera->save();
        return redirect()->route('carrerasp.show', $carrera);
    }
    public function show(Carrera $carrera){
        return view('Pasantias.showcarrera', compact('carrera'));
    }
    public function edit(Carrera $carrera){
        return view('Pasantias.editcarrera', compact('carrera'));
    }
    public function update(Request $request, Carrera $carrera){
        $request->validate([
            'codigo'=> 'required|max:04',
            'nombre'=> 'required|max:20',
        ]);
        $carrera = new Carrera();
        $carrera->codigo = $request->codigo;
        $carrera->nombre = $request->nombre;
        $carrera->save();
        return redirect()->route('carrerasp.show', $carrera);
    } 
    public function destroy(Carrera $carrera){
        $carrera->delete();
        return redirect()->route('pasantias.index');
    }
}
