@extends('dashboard.Recursos.index')

@section('content')
    <!-- Button trigger modal -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lista de pedidos</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="Categoria" class="table table-bordered table-striped p-3">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">pedidos_id</th>
                                    <th scope="col">usuario_id</th>
                                    <th scope="col">producto_id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Precio unitario</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Imagen</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedidos as $key => $pedido)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $pedido->pedidos_id }}</td>
                                        <td>{{ $pedido->usuario_id }}</td>
                                        <td>{{ $pedido->producto_id }}</td>
                                        <td>{{ $pedido->nombre_producto }}</td>
                                        <td>{{ $pedido->descripcion_producto }}</td>
                                        <td>{{ $pedido->precio_producto }}</td>
                                        <td>{{ $pedido->stock_producto }}</td>
                                        <td><img width="40px" src="{{ $pedido->imagen_producto}}" alt=""></td>
                                        
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
