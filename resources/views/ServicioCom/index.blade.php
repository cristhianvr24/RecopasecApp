@extends('layauts.plantilla')

@section('title', 'Servicio Comunitario')

@section('content')
    <h1>Servicio Comunitario</h1>
    <ul>
        @foreach ($estudiantes as $estudiante)
            <li>{{$estudiante->nombre}}</li>
        @endforeach
    </ul>
@endsection
