@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-6">Seu Carrinho</h2>

        @if(session('cart') && count(session('cart')) > 0)
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                    <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <tr>
                        <th class="py-3 px-6 text-left">Imagem</th>
                        <th class="py-3 px-6 text-left">Nome</th>
                        <th class="py-3 px-6 text-center">Preço Unitário</th>
                        <th class="py-3 px-6 text-center">Quantidade</th>
                        <th class="py-3 px-6 text-center">Subtotal</th>
                        <th class="py-3 px-6 text-center">Ações</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                    @php $total = 0; @endphp
                    @foreach(session('cart') as $id => $item)
                        @php
                            $subtotal = $item['price'] * $item['quantity'];
                            $total += $subtotal;
                        @endphp
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['name'] }}" class="w-16 h-16 object-cover rounded">
                            </td>
                            <td class="py-3 px-6 text-left">{{ $item['name'] }}</td>
                            <td class="py-3 px-6 text-center">R$ {{ number_format($item['price'], 2, ',', '.') }}</td>
                            <td class="py-3 px-6 text-center">{{ $item['quantity'] }}</td>
                            <td class="py-3 px-6 text-center">R$ {{ number_format($subtotal, 2, ',', '.') }}</td>
                            <td class="py-3 px-6 text-center">
                                <form action="{{ url('/cart/remove/' . $id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-3 py-1 rounded text-xs font-semibold">Remover</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="bg-gray-100 font-bold">
                        <td colspan="4" class="py-3 px-6 text-right">Total:</td>
                        <td class="py-3 px-6 text-center">R$ {{ number_format($total, 2, ',', '.') }}</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-6 flex space-x-4">
                <form action="{{ url('/orders/finalize') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded shadow">Finalizar Pedido</button>
                </form>

                <form action="{{ url('/cart/clear') }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded shadow">Limpar Carrinho</button>
                </form>
            </div>

        @else
            <p class="text-gray-700">Seu carrinho está vazio.</p>
            <a href="{{ url('/menu') }}" class="inline-block mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow">Voltar ao Cardápio</a>
        @endif
    </div>
@endsection
