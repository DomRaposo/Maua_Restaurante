<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Illuminate\Http\Request;
use App\Models\MenuItem;


class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {
        return response()->json($this->cartService->getCart());

    }

    public function add(Request $request, $dishId)
    {
        $result = $this->cartService->addToCart($dishId);
        return redirect('/cart');
    }

    public function remove($dishId)
    {
        $result = $this->cartService->removeFromCart($dishId);
        return redirect('/cart');
    }

    public function clear()
    {
        $result = $this->cartService->clearCart();
        return redirect('/cart');
    }

    public function show()
    {
        return view('cart');
    }
}
