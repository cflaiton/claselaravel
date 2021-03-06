@extends('layaut')

@section('content')

    <form action="" method="post">
        @csrf
        <div class="row">

            <div class="col-sm-3"><b>Producto</b></div>
            <div class="col-sm-3"><b>Cantidad</b></div>
            <div class="col-sm-3"><b>Precio</b></div>
            <div class="col-sm-3"><b>Total Producto</b></div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <select name="product[]" id="product" class="form-select">
                    @foreach ($products as $product)
                        <option value="{{$product ->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
            </div>

        <div class="col-sm-3">
            <input type="number" class="form-control" name="quantity[]">
        </div>
        <div class="col-sm-3">
            <input type="number" class="form-control" name="price[]">
        </div>
        <div class="col-sm-3">
            <input type="number" readonly class="form-control-plaintext">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@endsection
