<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class OrderRepository
{
public function create(array $data)
{
return Order::create($data);
}

public function createOrderWithItems(array $orderData, array $items)
{
return DB::transaction(function () use ($orderData, $items) {
$order = Order::create($orderData);

foreach ($items as $item) {
OrderItem::create([
'order_id' => $order->id,
'dish_id' => $item['id'],
'quantity' => $item['quantity'],
'price' => $item['price']
]);
}

return $order;
});
}
}
