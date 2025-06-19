<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['status', 'data_pedido', 'total'];
    protected $table = 'pedidos';
}
