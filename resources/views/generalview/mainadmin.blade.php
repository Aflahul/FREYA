<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body >
    @include('partials/admin/navbar')
    @include('partials/admin/sidebar')
    @yield('content')
</body>
</html>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body >
    @include('partials/admin/navbar')
    @include('partials/admin/sidebar')
    @include('partials/admin/conten')
 
</body>
</html> --}}