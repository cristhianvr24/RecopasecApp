@extends('layouts.plantilla')

@section('title', 'Editar estudiante')

@section('content')
    <h1>Editar los datos del estudiante:</h1>
    <form action="{{route('serviciocom.update', $estudiante)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Cédula: 
            <br>
            <input type="text" name="cedula" value="{{$estudiante->cedula}}">
        </label> 
        <br>
        <label>
            Primer nombre: 
            <br>
            <input type="text" name="nombre_1" value="{{$estudiante->nombre_1}}">
        </label> 
        <br>
        <label>
            Segundo nombre: 
            <br>
            <input type="text" name="nombre_2" value="{{$estudiante->nombre_2}}">
        </label> 
        <br>
        <label>
            Primer apellido: 
            <br>
            <input type="text" name="apellido_1" value="{{$estudiante->apellido_1}}">
        </label>
        <br>
        <label>
            Segundo apellido:
            <br>
            <input type="text" name="apellido_2" value="{{$estudiante->apellido_2}}">
        </label>
        <br>
        <label>
            Número de telefono:
            <br>
            <input type="text" name="telefono" value="{{$estudiante->telefono}}">
        </label>
        <br>
        <label>
            Correo Electronico:
            <br>
            <input type="text" name="email" value="{{$estudiante->email}}">
        </label>
    </form>
    <br>
    <button type="submit">Actualizar formulario del estudiante</button>
    <br>
    <a href="{{route('serviciocom.index')}}">Volver al inicio</a>
@endsection

