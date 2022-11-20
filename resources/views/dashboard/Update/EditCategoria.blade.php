@extends('dashboard.Recursos.index2')

@section('content')
    <div class="d-grid gap-2 d-md-block">
        <a href="{{ route('category.index') }}" class="btn btn-primary" type="button">Volver</a>
    </div>
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
    <div class="container text-center d-flex justity-content-center bg-white p-4 ">
        <form action="{{ route('category.update', $category->id) }}" method="POST" class="m-auto  w-form">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la Categoria</label>
                <input name="nombre_categoria" value="{{ @old('nombre_categoria') ?? $category->nombre_categoria }}"
                    type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required
                    min="30">
                @error('nombre_categoria')
                    <small class="text-danger mt-1">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>

            <div class="d-grid gap-2 col-6 mx-auto mt-3">
                <button type="submit text-center" class="btn  btn-primary  " style="--bs-btn-opacity: .5;">Editar</button>
            </div>
        </form>
    </div>
    <hr>
@endsection
