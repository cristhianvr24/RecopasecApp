@extends('layouts.plantilla')

@section('title', 'Datos del estudiante '. $estudiante->nombre_1)

@section('content')
    <h1> {{$estudiante->nombre_1}} {{$estudiante->apellido_1}}</h1>
    <p><strong>Cédula: </strong>{{$estudiante->cedula}}</p>
    <p><strong>Nombres: </strong>{{$estudiante->nombre_1}} {{$estudiante->nombre_2}}</p>
    <p><strong>Apellidos: </strong>{{$estudiante->apellido_1}} {{$estudiante->apellido_2}}</p>
    <p><strong>Telefono: </strong>{{$estudiante->telefono}}</p>
    <p><strong>Correo: </strong>{{$estudiante->email}}</p>
    <a href="{{route('serviciocom.index')}}">Volver al inicio</a>
    <br>
    <a href="{{route('serviciocom.edit', $estudiante)}}">Editar estudiante</a>
@endsection
