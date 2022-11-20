@extends('dashboard.Recursos.index')

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
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Agregar Producto
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="container text-center ">

                        <div class="row mb-4">
                            <div class="col-lg-4 d-none d-lg-block bg-white">
                                <div class="mb-3 text-dark">
                                    <h3>CREAR Producto</h3>
                                </div>
                                <img src="https://cdn-icons-png.flaticon.com/512/1554/1554591.png" width="100%">
                            </div>
                            <div class="bg-dark text-white  col-lg-8  align-items-end border border-2 border-dark p-4">
                                <form action="{{ route('producto.store') }}" method="POST" class="row g-3" >
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="validationDefault04" class="form-label">Categoria</label>
                                        <select name="categoria" class="form-select" id="validationDefault04" required>
                                            <option selected>Seleccione una Categoria</option>
                                            @foreach ($categories as $key => $category)
                                                <option value="{{ $category->nombre_categoria }}">
                                                    {{ $category->nombre_categoria }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                                        <input name="nombre_producto" type="text" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Descripcion del producto</label>
                                        <textarea name="descripcion_producto" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleInputEmail1" class="form-label">Precio Unitario</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">$</span>
                                            <input name="precio_producto" type="text" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Imagen</label>
                                        <div class="input-group mb-3">
                                            <input name="imagen_producto" type="text" 
                                                class="form-control" id="inputGroupFile02">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleInputEmail1" class="form-label">Stock</label>
                                        <input name="stock_producto" type="text" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" required min="30">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listado de Productos</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="Categoria" class="table table-bordered table-striped p-3">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Precio unitario</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $key => $producto)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $producto->categoria }}</td>
                                        <td>{{ $producto->nombre_producto }}</td>
                                        <td>{{ $producto->descripcion_producto }}</td>
                                        <td>{{ $producto->precio_producto }}</td>
                                        <td>{{ $producto->stock_producto }}</td>
                                        <td><img width="40px" src="{{ $producto->imagen_producto}}" alt=""></td>
                                        <td>
                                            <div class="row gx-3">
                                                <div class="col">
                                                    <a  href="{{ route('producto.edit', $producto->id) }}" style="width: 100%"
                                                        class="btn btn-success  mb-3">Editar</a>
                                                </div>
                                                <div class="col">
                                                    <form method="POST"
                                                        action="{{ route('producto.destroy', $producto->id) }}">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button style="width: 100%" class="btn btn-danger"
                                                            onclick="return confirm('DESEA ELIMINARLO')">Eliminar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#Categoria').DataTable();
        });
    </script>
@endsection
