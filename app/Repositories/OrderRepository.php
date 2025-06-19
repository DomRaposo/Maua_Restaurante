<?php

namespace App\Repositories;

use App\Models\Order;

class OrderRepository
{
public function create(array $dados)
{
return Order::create($dados);
}
}
