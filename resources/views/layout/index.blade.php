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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</head>

<body class="">
    @include('partials/admin/navbar')
    @include('partials/admin/sidebar')
    @yield('content')
    <script>
        // Mengatur zona waktu JavaScript ke UTC+8
        Intl.DateTimeFormat().resolvedOptions().timeZone = 'UTC+8';
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Temukan elemen tombol unggah
        const uploadButton = document.querySelector('.fa-circle-up');

        // Ketika tombol unggah diklik
        uploadButton.addEventListener('click', function(e) {
            e.preventDefault();

            // Temukan input file tersembunyi
            const fileInput = document.querySelector('input[type="file"]');

            // Klik input file untuk memilih gambar
            fileInput.click();
        });
    });
</script>

</body>

</html>
