@extends('layouts.plantilla')

@section('title', 'Pasantías')

@section('content')
    <h1>Servicio Comunitario</h1>
    <ul>
        <!-- @foreach ($estudiantes as $estudiante)
            <li>{{$estudiante}}</li>
        @endforeach -->
    </ul>
    {{$estudiantes->links()}}
@endsection
