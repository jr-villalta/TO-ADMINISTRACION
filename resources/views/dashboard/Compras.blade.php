@extends('dashboard.Recursos.index')

@section('content')    
    <!-- Modal -->
    <div class="d-grid gap-2 d-md-block">
        <a href="{{ route('compra.index') }}" class="btn btn-primary" type="button">Volver</a>
    </div>
    <hr>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listado de Compras</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="Compras" class="table table-bordered table-striped p-3">
                            <thead class="table-dark ">
                                <tr style=" width:100%">
                                    <th scope="col">#</th>
                                    <th scope="col">Fecha compra</th>
                                    <th scope="col">proveedor</th>
                                    <th scope="col">fecha recibido</th>
                                    <th scope="col">Acciones</th>
            
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($compras as $key => $compra)
                                    <tr >
                                        <th   scope="row">{{ $compra->id}}</th>
                                        <td >{{ $compra->fecha_compra }}</td>
                                        <td >{{ $compra->proveedor }}</td>
                                        <td >{{ $compra->fecha_recibido }}</td>
                                        <td > 
                                            <div class="row ">
                                                <div class="col">
                                                    <a href="{{ route('compra.show' , $compra->id)}}" style="width: 100%"
                                                        class="btn btn-success  mb-3">Ver</a>
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
            $('#Compras').DataTable();
        });
    </script>
@endsection
