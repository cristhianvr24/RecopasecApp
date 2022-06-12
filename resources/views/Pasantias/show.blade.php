@extends('layouts.plantilla')

@section('title', 'Datos del estudiante '. $estudiante->nombre_1)

@section('content')
    <h1>{{$estudiante->nombre_1}}</h1>
@endsection

