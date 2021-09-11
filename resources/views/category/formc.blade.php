<h1>Bienvenido a formulario de marca</h1>

@extends('layaut')
@section('title',$category->id ? 'Actualizar Producto' : 'Nuevo Producto')
@section('header',$category->id ? 'Actualizar Producto' :'Nuevo Producto')
@section('content')

<form action="{{ route('category.save') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$category->id}}">
    <div class="row mb-3">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nombre"
            value="{{ @old('nombre') ? @old('nombre') : $category->nombre }}" >
        </div>
        @error('nombre')
        <p class="text-danger">
            {{$message}}
        </p>
        @enderror
    </div>

    <input type="hidden" name="id" value="{{$category->id}}">
    <div class="row mb-3">
        <label for="nombre" class="col-sm-2 col-form-label">descripcion</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="descripcion"
            value="{{ @old('descripcion') ? @old('descripcion') : $category->descripcion }}" >
        </div>
        @error('nombre')
        <p class="text-danger">
            {{$message}}
        </p>
        @enderror
    </div>

    <div class="row mb-3">
        <div class="class col-sm-10"></div>
        <div class="class col-sm-2">
            <a href="/categories" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </div>
</form>

@endsection
