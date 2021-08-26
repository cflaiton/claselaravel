@extends ('layaut')
@section('content')
<div class="row">
    <div class="col-sm-10"></div>
        <div class="col-sm-2">
        <a href="{{ route('product.form') }}" class="btn btn-primary">Nuevo Producto</a>

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
            <th>Cost</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Brand</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->cost}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->brand}}</td>
            <td>
                <a href="{{ route('product.form',['id'=> $product->id]) }}" class="btn btn-warning">Editar</a>
                <a href="{{ route('product.delete',['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
