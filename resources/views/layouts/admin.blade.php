<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/admin.js')

</head>

<body class="bg-blue-100 font-sans leading-normal tracking-normal">

    <div class="flex flex-col min-h-screen" id="main">

        <!-- Sidebar -->
        @include('layouts.partials.sidebar')

        <!-- Conteúdo da página -->
        <div class="flex-1 flex flex-col overflow-hidden ml-40">
            <header class="bg-gray-800 text-white py-2 px-2 text-right">
                {{ auth()->user()->name }}
            </header>
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container px-4 mx-auto py-4">
                    <h1 class="text-3xl">
                        @yield('header')
                    </h1>
                </div>
                <!-- Conteúdo da página vai aqui -->
                <div class="container px-4 mx-auto py-4">
                    <x-messages />
                    @yield('content')
                </div>
            </main>
        </div>

        <!-- Rodapé -->
        @include('layouts.partials.footer')
    </div>
</body>
</html>