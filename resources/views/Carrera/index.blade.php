@extends('layouts.recopasec.plantillap')

@section('title', 'Carreras')

@section('content')
    <h1>Carreras</h1>
    <a href="{{route('carreras.create')}}">Añadir una carrera</a>
    <ul>
         @foreach ($carreras as $carrera)
            <li>
                <a href="{{route('carreras.show', $carrera->id)}}">{{$carrera->nombre}}</a>
            </li>
        @endforeach 
    </ul>
    {{$carreras->links()}}
@endsection