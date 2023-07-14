<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Freya Laundry | {{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="asset/css/fontawesome.css" rel="stylesheet">
    <link href="asset/css/all.css" rel="stylesheet">
    <link href="asset/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/scroll.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

</head>

<body>
    <header>
        {{-- @include('partials/user/nav') --}}
    </header>
    <main>
        @yield('content')
    </main>
    <footer>

    </footer>
    
</body>

</html>
