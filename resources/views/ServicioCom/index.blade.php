@extends('layouts.recopasec.plantillasc')

@section('title', 'Servicio Comunitario')

@section('content')
    <h1>Servicio Comunitario</h1>
    <a href="{{route('serviciocom.create')}}">Añadir un estudiante</a>
    <ul>
         @foreach ($estudiantes as $estudiante)
            <li>
                <a href="{{route('serviciocom.show', $estudiante->id)}}">{{$estudiante->nombre_1}}</a>
            </li>
        @endforeach 
    </ul>
    {{$estudiantes->links()}}
    <br>
    <h1>Carreras</h1>
    <a href="{{route('carrerass.create')}}">Añadir una carrera</a>
    <ul>
         @foreach ($carreras as $carrera)
            <li>
                <a href="{{route('carrerass.show', $carrera->id)}}">{{$carrera->nombre}}</a>
            </li>
        @endforeach 
    </ul>
    {{$carreras->links()}}
@endsection
