@extends('layouts.recopasec.plantillasc')

@section('title', 'Editar estudiante')

@section('content')
    <h1>Editar los datos del estudiante:</h1>
    <form action="{{route('carrera.update', $estudiante)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Codigo: 
            <br>
            <input type="text" name="codigo" value="{{old('codigo', $carrera->codigo)}}">
        </label> 
        @error('codigo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Nombre de la carrera: 
            <br>
            <input type="text" name="nombre" value="{{old('nombre', $carrera->nombre)}}">
        </label> 
        @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Actualizar datos de la carrera</button>
    </form>
    <br>
    <a href="{{route('serviciocom.index')}}">Volver al inicio</a>
@endsection

