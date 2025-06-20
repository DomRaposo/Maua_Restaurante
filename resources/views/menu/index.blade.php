@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto py-10 px-4">
        <h1 class="text-4xl font-bold text-center mb-10">Cardápio</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($items as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                    @if ($item->image)
                        <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                            Sem imagem
                        </div>
                    @endif

                    <div class="p-4 flex-grow flex flex-col justify-between">
                        <div>
                            <h2 class="text-xl font-semibold mb-1">{{ $item->name }}</h2>
                            <p class="text-sm text-gray-600 mb-2">{{ $item->description }}</p>
                            <div class="text-lg font-bold text-green-700 mb-3">
                                R$ {{ number_format($item->price, 2, ',', '.') }}
                            </div>
                        </div>

                        <form action="{{ url('/cart/add/' . $item->id) }}" method="POST" class="mt-auto">
                            @csrf
                            <button type="submit"
                                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded">
                                Adicionar ao Carrinho
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500 col-span-full">Nenhum item disponível no cardápio.</p>
            @endforelse
        </div>
    </div>
@endsection
