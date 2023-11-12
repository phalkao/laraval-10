<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div
        class="min-h-screen w-full flex items-center justify-center bg-gradient-to-r from-green-500 via-yellow-500 to-black ">
        @yield('content')
    </div>
</body>

</html>
