<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderServices;

class OrderController extends Controller
{
    protected $service;

    public function __construct(OrderServices $service)
    {
        $this->service = $service;
    }

    public function store(Request $request)
    {
        $order = $this->service->create($request->all());

        return response()->json($order, 201);
    }
}

