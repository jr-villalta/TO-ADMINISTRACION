<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ControllerProveedor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('dashboard.Proveedores', compact('proveedores'));
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
        $request->validate([
            'nombre_proveedor' => 'required|min:5|max:100',
            'direccion_proveedor' => 'required|min:10|max:255',
            'mail_proveedor' => 'required',
            'telefono_proveedor' => 'required|max:9',
        ], [
            'mail_proveedor.required' => 'El correo ya ha sido usado',

        ]);

        Proveedor::create([
            'nombre_proveedor' => $request->nombre_proveedor,
            'direccion_proveedor' => $request->direccion_proveedor,
            'telefono_proveedor' => $request->telefono_proveedor,
            'mail_proveedor' => $request->mail_proveedor
        ]);

        return redirect()->back()->with('success', 'Proveedor agregado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        //
        return view('dashboard.Update.EditProveedores',[
            'proveedor' => $proveedor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        //
        $data = $request->only('nombre_proveedor','direccion_proveedor','telefono_proveedor','mail_proveedor');
        $proveedor->update($data);
        return redirect()->back()->with('success','Proveedor actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->back()->with('success', 'Proveedor eliminado Correctamente');
    }
}
