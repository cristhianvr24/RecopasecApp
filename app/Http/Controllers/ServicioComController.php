<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioComController extends Controller
{
    public function index(){
        return view('ServicioCom.index');
    }
    public function create(){
        return view('ServicioCom.create');
    }
    public function show($estudiante){
        return view('ServicioCom.show', ['estudiante' => $estudiante]);
    }
}
