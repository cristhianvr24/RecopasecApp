@extends('layouts.plantilla')

@section('title', 'Pasantías')

@section('content')
    <h1>Pasantías</h1>
    <a href="{{route('pasantias.create')}}">Añadir un estudiante</a>
    <ul>
         @foreach ($estudiantes as $estudiante)
            <li>{{$estudiante}}</li>
        @endforeach 
    </ul>
    {{$estudiantes->links()}}
@endsection

