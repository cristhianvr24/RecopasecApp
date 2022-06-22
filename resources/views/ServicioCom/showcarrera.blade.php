@extends('layouts.recopasec.plantillap')

@section('title', 'Datos de la carrera'. $carrera->nombre)

@section('content')
    <h1> {{$carrera->nombre}}</h1>
    <p><strong>Codigo: </strong>{{$carrera->codigo}}</p>
    <p><strong>Nombre: </strong>{{$carrera->nombre}}</p>
    <br>
    <a href="{{route('carreras.edit', $carrera)}}">Editar carrera</a>
    <br>
    <form action="{{route('carreras.destroy', $carrera)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    <br>
    <a href="{{route('serviciocom.index')}}">Volver al inicio</a>
@endsection

