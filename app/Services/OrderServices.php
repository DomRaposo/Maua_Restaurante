<?php

namespace App\Services;

use App\Repositories\PedidoRepository;
use Illuminate\Support\Facades\Validator;

class OrderServices
{
    protected $repository;

    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $data)
    {
        return $this->Orderrepository->create($data);
    }
}
