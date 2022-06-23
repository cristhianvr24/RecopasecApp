@extends('layouts.recopasec.plantillasc')

@section('title', 'Ingresar carrera')

@section('content')
    <h1>Ingrese los datos de la carrera:</h1>
    <form action="{{route('carrerass.store')}}" method="POST">
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

