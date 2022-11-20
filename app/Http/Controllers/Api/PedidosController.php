<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pedido = pedido::all();
        return $pedido;
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
        $pedido = new pedido();
        $pedido->pedidos_id = $request->pedidos_id;
        $pedido->usuario_id = $request->usuario_id;
        $pedido->producto_id = $request->producto_id;
        $pedido->nombre_producto = $request->nombre_producto;
        $pedido->descripcion_producto = $request->descripcion_producto;
        $pedido->precio_producto = $request->precio_producto;
        $pedido->stock_producto = $request->stock_producto;
        $pedido->imagen_producto = $request->imagen_producto;

        $pedido->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
