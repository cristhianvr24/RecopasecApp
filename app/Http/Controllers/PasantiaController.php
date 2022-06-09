<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasantiaController extends Controller
{
    public function index(){
        return view('Pasantias.index');
    }
    public function create(){
        return view('Pasantias.create');
    }
    public function show($estudiante){
        return view('Pasantias.show', ['estudiante' => $estudiante]);
    }
}
