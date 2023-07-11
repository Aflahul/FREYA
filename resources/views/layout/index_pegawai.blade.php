<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Freya Laundry | {{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('asset/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/all.css') }}" rel="stylesheet">


</head>

<body>
    @include('partials/pegawai/navbar')
    @include('partials/pegawai/sidebar')
    @yield('content')
    <script>
        // Mengatur zona waktu JavaScript ke UTC+8
        Intl.DateTimeFormat().resolvedOptions().timeZone = 'UTC+8';
    </script>
</body>

</html>
