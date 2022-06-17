@extends('layouts.plantilla')

@section('title', 'Editar estudiante')

@section('content')
    <h1>Editar los datos del estudiante:</h1>
    <form action="{{route('pasantias.update', $estudiante)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Cédula: 
            <br>
            <input type="text" name="cedula" value="{{old('cedula', $estudiante->cedula)}}">
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
            <input type="text" name="nombre_1" value="{{old('nombre_1', $estudiante->nombre_1)}}">
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
            <input type="text" name="nombre_2" value="{{old('nombre_2', $estudiante->nombre_2)}}">
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
            <input type="text" name="apellido_1" value="{{old('apellido_1', $estudiante->apellido_1)}}">
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
            <input type="text" name="apellido_2" value="{{old('apellido_2', $estudiante->apellido_2)}}">
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
            <input type="text" name="telefono" value="{{old('telefono', $estudiante->telefono)}}">
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
            <input type="text" name="email" value="{{old('email', $estudiante->email)}}">
        </label>
        @error('email')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Actualizar formulario del estudiante</button>
    </form>
    <br>
    <a href="{{route('pasantias.index')}}">Volver al inicio</a>
@endsection

