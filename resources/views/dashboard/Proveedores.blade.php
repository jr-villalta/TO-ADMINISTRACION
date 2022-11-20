@extends('dashboard.Recursos.index')

@section('content')
    <!-- Button trigger modal -->
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <small>
                {{ session()->get('success') }}
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
                    Agregar Proveedor
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="container text-center ">

                        <div class="row mb-4">
                            <div class="col-lg-5 d-none d-lg-block bg-white">
                                <div class="mb-3 text-dark">
                                    <h3>CREAR PROVEEDOR</h3>
                                </div>
                                <img src="https://cdn-icons-png.flaticon.com/512/4003/4003697.png" width="100%">
                            </div>
                            <div
                                class="bg-dark text-white  col-lg-7 d-flex flex-column align-items-end border border-2 border-dark p-4">
                                <form action="" method="POST" class="m-auto w-form">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Nombre del proveedor</label>
                                        <input name="nombre_proveedor" type="text" class="form-control" required>
                                        @error('nombre_proveedor')
                                            <small class="text-danger mt-1">
                                                <strong>{{ $message }}</strong>
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Direccion</label>
                                        <input name="direccion_proveedor" type="text" class="form-control" required>
                                        @error('direccion_proveedor')
                                            <small class="text-danger mt-1">
                                                <strong>{{ $message }}</strong>
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Telefono</label>
                                        <input name="telefono_proveedor" type="tel" pattern="[0-9]{4}-[0-9]{4}"
                                            class="form-control" required>
                                        <small>Formato: ****-****</small><br><br>
                                        @error('telefono_proveedor')
                                            <small class="text-danger mt-1">
                                                <strong>{{ $message }}</strong>
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mail</label>
                                        <input name="mail_proveedor" type="email" class="form-control" required>
                                        @error('mail_proveedor')
                                            <small class="text-danger mt-1">
                                                <strong>{{ $message }}</strong>
                                            </small>
                                        @enderror
                                    </div>

                                    <div class="d-grid gap-2 col-6 mx-auto">
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
                        <h3 class="card-title">Listado de Proveedores</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="Proveedor" class="table table-bordered table-striped p-3">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Proveedor</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Mail</th>
                                    <th scope="col">Telelefono</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proveedores as $key => $proveedor)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $proveedor->nombre_proveedor }}</td>
                                        <td>{{ $proveedor->direccion_proveedor }}</td>
                                        <td>{{ $proveedor->mail_proveedor }}</td>
                                        <td>{{ $proveedor->telefono_proveedor }}</td>
                                        <td>
                                            <div class="row gx-3">
                                                <div class="col">
                                                    <a href="{{ route('proveedor.edit', $proveedor->id) }}" style="width: 100%"
                                                        class="btn btn-success  mb-3">Editar</a>
                                                </div>
                                                <div class="col">
                                                    <form method="POST"
                                                        action="{{ route('proveedor.destroy', $proveedor->id) }}">
                                                        @method('DELETE')
                                                        @csrf
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
            $('#Proveedor').DataTable();
        });
    </script>
@endsection
