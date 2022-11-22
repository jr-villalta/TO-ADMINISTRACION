<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\DetalleCompra;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ControllerCompra extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proveedores = Proveedor::all();
        $compras = Compra::all();
        $productos = Producto::all();
        return view('dashboard.Compra', compact('compras','productos','proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $compras = Compra::all();
        return view('dashboard.Compras', compact('compras'));
    
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
        Compra::create([
            'fecha_compra' => $request->fecha_compra,
            'proveedor' => $request->proveedor,
            'fecha_recibido' => $request->fecha_recibido,
            'total' => "0",
        ]);
        return redirect()->back()->with('success', 'Compra agregado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
        //  
        $detalles = DetalleCompra::where('n_compra',$compra->id)->get();
        return view('dashboard.Detallescompras',[
            'compra' => $compra,
            'detalles' => $detalles,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(Compra $compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra $compra)
    {
        /*
        $producto = Producto::all();
        DetalleCompra::create([
            'n_compra' => $request->n_compra,
            'producto' => $request->producto,
            'unidades_pedidas' => $request->descripcion_producto,
            'precio_unitario' => $request->precio_unitario,
        ]);

        $data = $request->only('stock_producto');
        $producto->update($data);
        return redirect()->back()->with('success','Producto actualizado Correctamente');
         */
        return $compra;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
        //
    }
}
