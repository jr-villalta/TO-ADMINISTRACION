@extends('dashboard.Recursos.index2')

@section('content')
    <!-- Button trigger modal -->
    <div class="d-grid gap-2 d-md-block">
        <a href="{{ route('producto.index') }}" class="btn btn-primary" type="button">Volver</a>
    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <small>
                {{ session('success') }}
            </small>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Modal -->
    <hr>
    <div
        class="container text-center d-flex justity-content-center bg-white align-items-end border border-2 border-dark p-4 ">
        <form action="{{ route('producto.update', $producto->id) }}" method="POST" class="m-auto row g-3">
            @method('PUT')
            @csrf
            <div class="col-md-12">
                <img width="200px" src="{{ $producto->imagen_producto }}" alt="">
            </div>
            <div class="col-md-6">
                <label for="validationDefault04" class="form-label">Categoria</label>
                <select name="categoria" class="form-select" id="validationDefault04" required>
                    <option selected>{{ $producto->categoria }}</option>
                    @foreach ($categories as $key => $category)
                        <option value="{{ $category->nombre_categoria }}">
                            {{ $category->nombre_categoria }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                <input name="nombre_producto" value="{{ @old('name') ?? $producto->nombre_producto }}" type="text"
                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="col-md-8">
                <label class="form-label">Descripcion del producto</label>
                <textarea name="descripcion_producto" class="form-control" id="exampleFormControlTextarea1" rows="3" required> {{ $producto->descripcion_producto }}</textarea>
            </div>
            <div class="col-md-4">
                <label for="exampleInputEmail1" class="form-label">Precio Unitario</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input name="precio_producto" type="text" class="form-control" id="exampleInputEmail1"
                        value="{{ @old('name') ?? $producto->precio_producto }}" aria-describedby="emailHelp" required>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label">Imagen</label>
                <div class="input-group mb-3">
                    <input name="imagen_producto"   value="{{ @old('name') ?? $producto->imagen_producto }}" type="text" class="form-control" id="inputGroupFile02">
                </div>
            </div>
            <div class="col-md-2">
                <label for="exampleInputEmail1" class="form-label">Stock</label>
                <input readonly disabled type="number" class="form-control" name="stock" step="0.001" id="stock"
                    value="{{ @old('name') ?? $producto->stock_producto }}" aria-describedby="emailHelp" required>
            </div>





            <div class="d-grid gap-2 col-4 mx-auto mt-3">
                <button type="submit text-center" class="btn  btn-primary  "
                    style="--bs-btn-opacity: .5;">Actualizar</button>
            </div>
        </form>
    </div>
    <hr>
@endsection
