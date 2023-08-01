{{-- <!DOCTYPE html>
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

</head> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title id="page-title">Freya Laundry |</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('asset/css/fontawesome.css') }}" rel="stylesheet">

    <script src="{{ asset('asset/tinymce/js/tinymce/tinymce.min.js') }}"></script>

    <link href="{{ asset('asset/css/all.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="font-mono font-thin">
    <header>
        @include('partials/user/nav')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>

    </footer>

    {{-- <script>
        // Fungsi untuk mencari id section dari elemen yang diklik
        function findSectionId(element) {
            if (element.hasAttribute('id')) {
                return element.getAttribute('id');
            } else if (element.parentElement) {
                return findSectionId(element.parentElement);
            } else {
                return null;
            }
        }

        // Fungsi untuk mengubah judul di tab berdasarkan nama section yang dipilih
        function changePageTitle(sectionName) {
            document.title = "Freya Laundry | " + sectionName;
        }

        // Panggil fungsi changePageTitle ketika elemen dengan id di dalam section diklik
        const clickableElements = document.querySelectorAll("section [id]");
        clickableElements.forEach(element => {
            element.addEventListener("click", function() {
                const sectionId = findSectionId(this);
                if (sectionId) {
                    changePageTitle(sectionId);
                }
            });
        });
    </script> --}}


</body>

</html>
