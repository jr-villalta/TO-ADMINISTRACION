@extends('dashboard.Recursos.index2')

@section('content')
    <!-- Button trigger modal -->
    <div class="d-grid gap-2 d-md-block">
        <a href="{{ route('user.index') }}" class="btn btn-primary" type="button">Volver</a>
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
        <form action="{{ route('user.update', $user->id) }}" method="POST" class="m-auto  w-form">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input name="name" value="{{ @old('name') ?? $user->name }}" type="text" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" required min="30">
                @error('name')
                    <small class="text-danger mt-1">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                <input name="email" value="{{ @old('email') ?? $user->email }}" type="email" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('email')
                    <small class="text-danger mt-1">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                @error('password')
                    <small class="text-danger mt-1">
                        <strong>{{ $message }}</strong>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
                <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1">
                @error('password_confirmation')
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
