<?php

namespace App\Http\Controllers;
use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraSController extends Controller
{
    public function index(){
        $carreras = Carrera::orderBy('id')->paginate();
        return view('ServicioCom.index', compact('carreras'));
    }
    public function create(){
        return view('ServicioCom.createcarrera');
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
        return redirect()->route('carrerass.show', $carrera);
    }
    public function show(Carrera $carrera){
        return view('ServicioCom.showcarrera', compact('carrera'));
    }
    public function edit(Carrera $carrera){
        return view('ServicioCom.editcarrera', compact('carrera'));
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
        return redirect()->route('carrerass.show', $carrera);
    } 
    public function destroy(Carrera $carrera){
        $carrera->delete();
        return redirect()->route('serviciocom.index');
    }
}
