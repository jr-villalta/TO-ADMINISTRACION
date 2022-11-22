<?php

namespace App\Http\Controllers;

use App\Models\DetalleCompra;
use App\Models\Producto;
use Illuminate\Http\Request;

class ControllerCompraDetalle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $producto = Producto::all();
        DetalleCompra::create([
            'n_compra' => $request->n_compra,
            'producto' => $request->producto,
            'unidades_pedidas' => $request->unidades_pedidas,
            'precio_unitario' => $request->precio_unitario,
        ]);

        $producto=Producto::findOrFail($request->producto);
        $producto->stock_producto=$request->stock_producto;
        $producto->save();
        return redirect()->back()->with('success','Producto comprado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetalleCompra  $detalleCompra
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleCompra $detalleCompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetalleCompra  $detalleCompra
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleCompra $detalleCompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetalleCompra  $detalleCompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleCompra $detalleCompra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalleCompra  $detalleCompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleCompra $detalleCompra)
    {
        //
    }
}
