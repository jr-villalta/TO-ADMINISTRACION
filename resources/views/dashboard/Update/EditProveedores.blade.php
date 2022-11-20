@extends('dashboard.Recursos.index2')

@section('content')
    <!-- Button trigger modal -->
    <div class="d-grid gap-2 d-md-block">
        <a href="{{ route('proveedor.index') }}" class="btn btn-primary" type="button">Volver</a>
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
    <div class="container text-center d-flex justity-content-center bg-white p-4 ">
        <form action="{{ route('proveedor.update', $proveedor->id) }}" method="POST" class="m-auto  w-form">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre del proveedor</label>
                <input name="nombre_proveedor" value="{{ @old('name') ?? $proveedor->nombre_proveedor }}" type="text" class="form-control" required>
                @error('nombre_proveedor')
                    <small class="text-danger mt-1">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Direccion</label>
                <input name="direccion_proveedor"  value="{{ @old('name') ?? $proveedor->direccion_proveedor}}" type="text" class="form-control" required>
                @error('direccion_proveedor')
                    <small class="text-danger mt-1">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>
            <div class="mb-1">
                <label class="form-label">Telefono</label>
                <input name="telefono_proveedor" value="{{ @old('name') ?? $proveedor->telefono_proveedor }}" type="tel" pattern="[0-9]{4}-[0-9]{4}"
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
                <input name="mail_proveedor" value="{{ @old('name') ?? $proveedor->mail_proveedor }}" type="email" class="form-control" required>
                @error('mail_proveedor')
                    <small class="text-danger mt-1">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit text-center" class="btn  btn-primary  "
                    style="--bs-btn-opacity: .5;">Actualizar</button>
            </div>
        </form>
    </div>
    <hr>
@endsection
