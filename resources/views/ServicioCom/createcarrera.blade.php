@extends('layouts.recopasec.plantillasc')

@section('title', 'Ingreso del estudiante')

@section('content')
    <h1>Ingrese los datos del estudiante:</h1>
    <form action="{{route('carreras.store')}}" method="POST">
        @csrf
        <label>
            Codigo: 
            <br>
            <input type="text" name="codigo" value= "{{old('codigo')}}">
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
            <input type="text" name="nombre" value= "{{old('nombre')}}">
        </label> 
        @error('nombre')
            <br>
                <small>*{{$message}}</small>
            <br>            
        @enderror
        
    
    <br>
    <a href="{{route('serviciocom.index')}}">Volver al inicio</a>
@endsection

