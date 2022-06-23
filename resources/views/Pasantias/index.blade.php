@extends('layouts.recopasec.plantillap')

@section('title', 'Pasantias')

@section('content')
    <h1>Registrar Estudiantes</h1>
    <a href="{{route('pasantias.create')}}">Añadir un estudiante</a>
    <ul>
         @foreach ($estudiantes as $estudiante)
            <li>
                <a href="{{route('pasantias.show', $estudiante->id)}}">{{$estudiante->nombre_1}}</a>
            </li>
        @endforeach 
    </ul>
    {{$estudiantes->links()}}
    <br>
    <h1>Carreras</h1>
    <a href="{{route('carrerasp.create')}}">Añadir una carrera</a>
    <ul>
         @foreach ($carreras as $carrera)
            <li>
                <a href="{{route('carrerasp.show', $carrera->id)}}">{{$carrera->nombre}}</a>
            </li>
        @endforeach 
    </ul>
    {{$carreras->links()}}
@endsection
