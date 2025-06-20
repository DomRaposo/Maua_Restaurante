<?php

namespace App\Services;

use App\Models\MenuItem;

class CartService
{
    public function getCart()
    {
        return session()->get('cart', []);
    }

    public function addToCart($dishId)
    {
        $dish = MenuItem::findOrFail($dishId);
        $cart = session()->get('cart', []);

        if (isset($cart[$dishId])) {
            $cart[$dishId]['quantity']++;
        } else {
            $cart[$dishId] = [
                'id' => $dish->id,
                'name' => $dish->name,
                'price' => $dish->price,
                'image' => $dish->image,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);
        return ['message' => 'Item added to cart', 'cart' => $cart];
    }

    public function removeFromCart($dishId)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$dishId])) {
            unset($cart[$dishId]);
            session()->put('cart', $cart);
        }

        return ['message' => 'Item removed from cart', 'cart' => $cart];
    }

    public function clearCart()
    {
        session()->forget('cart');
        return ['message' => 'Cart cleared'];
    }
}
