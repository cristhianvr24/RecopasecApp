@extends('layouts.plantilla')

@section('title', 'Servicio Comunitario')

@section('content')
    <h1>Servicio Comunitario</h1>
    <a href="{{route('serviciocom.create')}}">Añadir un estudiante</a>
    <ul>
         @foreach ($estudiantes as $estudiante)
            <li>
                <a href="{{route('serviciocom.show', $estudiante->id)}}">{{$estudiante->name}}</a>
            </li>
        @endforeach 
    </ul>
    {{$estudiantes->links()}}
@endsection
