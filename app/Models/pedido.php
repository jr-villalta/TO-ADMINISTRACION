<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'pedidos_id',
        'usuario_id',
        'producto_id',
        'nombre_producto',
        'descripcion_producto',
        'precio_producto',
        'stock_producto',
        'imagen_producto', 
    ];
}
