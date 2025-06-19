@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <!-- Header -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-gray-900">🍽️ Mauá Restaurante</h1>
                <nav>
                    <a href="/menu" class="text-gray-700 hover:text-orange-600 mx-4">Cardápio</a>
                    <a href="/login" class="text-gray-700 hover:text-orange-600 mx-4">Entrar</a>
                </nav>
            </div>
        </header>

        <!-- Banner -->
        <section class="bg-cover bg-center h-96" style="background-image: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092');">
            <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
                <div class="text-center text-white">
                    <h2 class="text-4xl font-bold mb-4">Comida de Verdade, Sabor Inesquecível</h2>
                    <a href="/menu" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full text-lg">Ver Cardápio</a>
                </div>
            </div>
        </section>

        <!-- Sobre -->
        <section class="py-16 px-6 max-w-4xl mx-auto text-center">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Bem-vindo ao nosso restaurante</h3>
            <p class="text-gray-600">
                No Mauá Restaurante, unimos tradição e sabor para oferecer uma experiência única. Pratos preparados com ingredientes frescos e muito carinho!
            </p>
        </section>

        <!-- Rodapé -->
        <footer class="bg-white shadow py-4 text-center text-gray-500">
            &copy; {{ date('Y') }} DonRaposo. Todos os direitos reservados.
        </footer>
    </div>
@endsection
