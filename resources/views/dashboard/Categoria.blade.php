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
                    Agregar Categoria
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="container text-center ">

                        <div class="row mb-4">
                            <div class="col-lg-5 d-none d-lg-block bg-white">
                                <div class="mb-3 text-dark">
                                    <h3>CREAR CATEGORIA</h3>
                                </div>
                                <img src="https://franciscotorreblanca.es/wp-content/uploads/2015/05/22-leyes-inmutables-marketing-ley-cateegoria-francisco-torreblanca.png"
                                width="100%">
                            </div>
                            <div
                                class="bg-dark text-white  col-lg-7 d-flex flex-column align-items-end border border-2 border-dark p-4">
                                <form action="" method="POST" class="m-auto  w-form">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombre de la Categoria</label>
                                        <input name="nombre_categoria" type="text" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" required min="30">
                                        @error('nombre_categoria')
                                            <small class="text-danger mt-1">
                                                <strong>{{ $message }}</strong>
                                            </small>
                                        @enderror
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
                        <h3 class="card-title">Listado de Categoria</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="Categoria" class="table table-bordered table-striped p-3">
                            <thead class="table-dark ">
                                <tr style=" width:100%">
                                    <th  style=" width:25%" scope="col">#</th>
                                    <th  style=" width:45%" scope="col">Nombre</th>
                                    <th  style=" width:30%" scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $category)
                                    <tr >
                                        <th   scope="row">{{ $key + 1 }}</th>

                                        <td >{{ $category->nombre_categoria }}</td>

                                        <td > 
                                            <div class="row ">
                                                <div class="col">
                                                    <a href="{{ route('category.edit' , $category->id)}}" style="width: 100%"
                                                        class="btn btn-success  mb-3">Editar</a>
                                                </div>
                                                <div class="col">
                                                    <form method="POST"
                                                        action="{{ route('category.destroy', $category->id) }}">
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
