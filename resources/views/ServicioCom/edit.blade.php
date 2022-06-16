@extends('layouts.plantilla')

@section('title', 'Editar estudiante')

@section('content')
    <h1>Editar los datos del estudiante:</h1>
    <form action="{{route('serviciocom.store')}}" method="POST">
        @csrf
        <label>
            Cédula: 
            <br>
            <input type="text" name="cedula">
        </label> 
        <br>
        <label>
            Primer nombre: 
            <br>
            <input type="text" name="nombre_1">
        </label> 
        <br>
        <label>
            Segundo nombre: 
            <br>
            <input type="text" name="nombre_2">
        </label> 
        <br>
        <label>
            Primer apellido: 
            <br>
            <input type="text" name="apellido_1">
        </label>
        <br>
        <label>
            Segundo apellido:
            <br>
            <input type="text" name="apellido_2">
        </label>
        <br>
        <label>
            Número de telefono:
            <br>
            <input type="text" name="telefono">
        </label>
        <br>
        <label>
            Correo Electronico:
            <br>
            <input type="text" name="email">
        </label>
    </form>
    <br>
    <button type="submit">Actualizar formulario del estudiante</button>
    <br>
    <a href="{{route('serviciocom.index')}}">Volver al inicio</a>
@endsection

