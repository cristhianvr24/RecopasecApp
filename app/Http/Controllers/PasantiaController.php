<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasantiaController extends Controller
{
    public function index(){
        return "Pasantías";
    }
    public function create(){
        return "Ingrese los datos del estudiante:";
    }
    public function show($estudiante){
        return "$estudiante";
    }
}
