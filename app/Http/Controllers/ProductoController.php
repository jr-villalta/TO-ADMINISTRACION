<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Compra;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $productos = Producto::all();
        $categories = Category::all();
        return view('dashboard.Producto', compact('productos','categories'));
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
    
        

        Producto::create([
            'categoria' => $request->categoria,
            'nombre_producto' => $request->nombre_producto,
            'descripcion_producto' => $request->descripcion_producto,
            'precio_producto' => $request->precio_producto,
            'stock_producto' => $request->stock_producto,
            'imagen_producto' => $request->imagen_producto,
        ]);

        return redirect()->back()->with('success', 'Proveedor agregado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
        $compras = Compra::all();
        return view('dashboard.DetallesCompra',[
            'producto' => $producto,
            'compras' => $compras,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
        $categoria = Category::all();
        return view('dashboard.Update.EditProducto',[
            'producto' => $producto,
            'categories' => $categoria,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
        $data = $request->only('categoria','nombre_producto','precio_producto','stock_producto','imagen_producto');
        $producto->update($data);
        return redirect()->back()->with('success','Producto actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
        $producto->delete();
        return redirect()->back()->with('success', 'Producto eliminado Correctamente');
    }
}
