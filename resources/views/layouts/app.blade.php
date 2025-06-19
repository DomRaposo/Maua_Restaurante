<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mauá Restaurante</title>
    @vite('resources/css/app.css') {{-- Se estiver usando Vite --}}
</head>
<body class="bg-gray-50 text-gray-800">

{{-- Área dinâmica das páginas --}}
<main>
    @yield('content')
</main>

</body>
</html>
