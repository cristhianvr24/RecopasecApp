@extends('layouts.plantilla')

@section('title', 'Ingreso del estudiante')

@section('content')
    <h1>Ingrese los datos del estudiante:</h1>
    <form action="{{route('serviciocom.store')}}" method="POST">
        @csrf
        <label>
            Cédula: 
            <br>
            <input type="text" name="cedula">
        </label> 
        @error('cedula')
            <br>
                <small>*{{$message}}</small>
            <br>            
        @enderror
        <br>
        <label>
            Primer nombre: 
            <br>
            <input type="text" name="nombre_1">
        </label> 
        @error('nombre_1')
            <br>
                <small>*{{$message}}</small>
            <br>            
        @enderror
        <br>
        <label>
            Segundo nombre: 
            <br>
            <input type="text" name="nombre_2">
        </label>
        @error('nombre_2')
            <br>
                <small>*{{$message}}</small>
            <br>            
        @enderror 
        <br>
        <label>
            Primer apellido: 
            <br>
            <input type="text" name="apellido_1">
        </label>
        @error('apellido_1')
            <br>
                <small>*{{$message}}</small>
            <br>            
        @enderror
        <br>
        <label>
            Segundo apellido:
            <br>
            <input type="text" name="apellido_2">
        </label>
        @error('apellido_2')
            <br>
                <small>*{{$message}}</small>
            <br>            
        @enderror
        <br>
        <label>
            Número de telefono:
            <br>
            <input type="text" name="telefono">
        </label>
        @error('telefono')
            <br>
                <small>*{{$message}}</small>
            <br>            
        @enderror
        <br>
        <label>
            Correo Electronico:
            <br>
            <input type="text" name="email">
        </label>
        @error('email')
            <br>
                <small>*{{$message}}</small>
            <br>            
        @enderror
        <br>
        <button type="submit">Registrar estudiante</button>
    </form>
    
    <br>
    <a href="{{route('serviciocom.index')}}">Volver al inicio</a>
@endsection

