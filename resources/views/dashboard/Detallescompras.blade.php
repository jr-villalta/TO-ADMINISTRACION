@extends('dashboard.Recursos.index2')

@section('content')
    <div class="d-grid gap-2 d-md-block mb-3">
        <a href="{{ route('compra.create') }}" class="btn btn-primary" type="button">Volver</a>
    </div>
    <hr>
    <div class="card">
        <div class="card-body row">
            <h5 class="card-title col-12 text-center mb-3">Factura: {{ $compra->id }} </h5>
            <p class="card-text col-4">Fecha de compra: {{ $compra->fecha_compra }} </p>
            <p class="card-text col-4">Proveedor: {{ $compra->proveedor }} </p>
            <p class="card-text col-4">Fecha recibida: {{ $compra->fecha_recibido }} </p>
        </div>
        @php
            $Total = 0
        @endphp
        <div class="card-body table-responsive">
            <table id="Categoria" class="table table-bordered table-striped p-3">
                
                @foreach ($detalles as $key => $detalle)
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID Producto: {{ $detalle->producto }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                    
                            <td>
                                <div class="grid text-end">
                                    <div class="g-col-6">Unidades Pedidas: {{ $detalle->unidades_pedidas }}</div>
                                    <div class="g-col-6">Precio: {{ $detalle->precio_unitario }}</div>
                                    <div class="g-col-6">Total de producto: {{ $detalle->precio_unitario * $detalle->unidades_pedidas   }}</div>
                                    @php
                                        $Total += $detalle->precio_unitario * $detalle->unidades_pedidas
                                    @endphp
                                </div>
                            </td>
                        </tr>

                    </tbody>
                @endforeach
               
            </table>
            <table class="table table-bordered table-striped p-3">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">TOTAL </th>
                        <th scope="col "><div class="grid text-end">{{ $Total }}</div></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <hr>
@endsection
