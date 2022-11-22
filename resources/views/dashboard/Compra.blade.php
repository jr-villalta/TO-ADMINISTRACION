@extends('dashboard.Recursos.index2')

@section('content')
    <!-- Button trigger modal -->
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
    <div class="d-grid gap-2 d-md-block">
        <a href="{{ route('compra.create') }}" class="btn btn-primary" type="button">Ver Compras</a>
    </div>
    <hr>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Agregar compra
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="container text-center ">

                        <div class="row mb-4">
                            <div class="col-lg-4 d-none d-lg-block bg-white">
                                <div class="mb-3 text-dark">
                                    <h3>CREAR Compra</h3>
                                </div>
                                <img src="https://cdn-icons-png.flaticon.com/512/107/107831.png" width="100%">
                            </div>
                            <div
                                class="bg-dark text-white  col-lg-8 d-flex  align-items-end border border-2 border-dark p-4">
                                <form action="{{ route('compra.store') }}" method="POST" class="m-auto w-form "
                                    >
                                    @csrf
                                    <div class="mb-3">
                                        <label for="validationDefault04" class="form-label">Proveedores</label>
                                        <select name="proveedor" class="form-select" id="validationDefault04" required>
                                            <option selected>Seleccione un proveedor</option>
                                            @foreach ($proveedores as $key => $proveedor)
                                                <option value="{{ $proveedor->nombre_proveedor }}">
                                                    {{ $proveedor->nombre_proveedor }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">fecha de compra</label>
                                        <input name="fecha_compra" type="date" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">fecha de recicido</label>
                                        <input name="fecha_recibido" type="date" class="form-control" required>
                                    </div>
                                 
                                    <div class="d-grid gap-2 col-6 mx-auto mt-3">
                                        <button type="submit text-center" class="btn  btn-primary  "
                                            style="--bs-btn-opacity: .5;">REGISTRAR</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row row-cols-1 row-cols-md-3 g-4 d-flex justity-content-center bg-white align-items-end border border-2 border-dark p-4 m-auto">
        @foreach ($productos as $key => $producto)
            <div class="col text-center">
                <div class="card p-3 ">
                    <img width="200px" height="200px" src="{{ $producto->imagen_producto }}"
                    class="m-auto">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: {{ $producto->nombre_producto }}</h5>
                        <p class="card-text">Descripcion: {{ $producto->descripcion_producto }}</p>
                        <p class="card-text">Precio: {{ $producto->precio_producto }}</p>
                        <p class="card-text">Stock: {{ $producto->stock_producto }}</p>
                    </div>
                    <div class="col-8 m-auto">
                        <a  href="{{ route('producto.show', $producto->id) }}" style="width: 100%"
                            class="btn btn-success  mb-3">Comprar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
