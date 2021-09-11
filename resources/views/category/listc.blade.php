@extends ('layout')
@section('content')
<div class="row">
    <div class="col-sm-10"></div>
        <div class="col-sm-2">
        <a href="{{ route('category.formc') }}" class="btn btn-primary">Nuevo Producto</a>

    </div>

    @if(Session::has('message'))
    <p class="alert alert-success">
        {{Session::get('message')}}
    </p>
    @endif
</div>
<table class="table table -striped table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->nombre}}</td>
            <td>{{$category->descripcion}}</td>

            <td>
                <a href="{{ route('category.formc',['id'=> $category->id]) }}" class="btn btn-warning">Editar</a>
                <a href="{{ route('categories.delete',['id'=> $category->id]) }}" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
