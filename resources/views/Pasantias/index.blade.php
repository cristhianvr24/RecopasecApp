@extends('layouts.recopasec.plantillap')

@section('title', 'Pasantías')

@section('content')
    <h1>Pasantías</h1>
    <a href="{{route('pasantias.create')}}">Añadir un estudiante</a>
    <ul>
         @foreach ($estudiantes as $estudiante)
            <li>
                <a href="{{route('pasantias.show', $estudiante->id)}}">{{$estudiante->nombre_1}}</a>
            </li>
        @endforeach 
    </ul>
    {{$estudiantes->links()}}
@endsection
