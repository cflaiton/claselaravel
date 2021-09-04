<h1>Bienvenido a formulario de marca</h1>

@extends('layaut')
@section('title',$brand->id ? 'Actualizar Producto' : 'Nuevo Producto')
@section('header',$brand->id ? 'Actualizar Producto' :'Nuevo Producto')
@section('content')

<form action="{{ route('brand.save') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$brand->id}}">
    <div class="row mb-3">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nombre"
            value="{{ @old('nombre') ? @old('nombre') : $brand->nombre }}" >
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
            <a href="/brands" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </div>
</form>

@endsection
