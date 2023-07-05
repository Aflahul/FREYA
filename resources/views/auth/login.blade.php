<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="asset/css/fontawesome.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('asset/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/all.css') }}" rel="stylesheet">
    <title>Login</title>
</head>

<body class="bg-cover bg-center bg-blur-20" style="background-image: url('/asset/img/freya/1copy.jpeg');">

    @if (session('error'))
        <div class="text-red-500">{{ session('error') }}</div>
    @endif
    <div class="flex h-screen">
        <div class="m-auto">
            <div class="bg-kuningpudar rounded-lg object-center text-center">
                <div class="px-32 py-2 flex justify-center rounded-t-lg items-center bg-kuning">
                    <img class="h-20" src="asset/img/logo.jpg" alt="logo">
                </div>
                <div class="py-3 center shadow-lg rounded-xl">
                    <h3 class="py-3 text-2xl font-semibold">Hello, Freyers!</h3>
                    <div class="text-center pt-3">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="px-10 py-0 flex flex-col gap-3  justify-center">
                                <div class="relative focus:outline-none focus:border-2  text-white ">
                                    <span class="absolute top-1/2 transform -translate-y-1/2 bg-belum  rounded-l-2xl">
                                        <i class="p-2 fas fa-user"></i>
                                    </span>
                                    <input type="text" placeholder="Masukkan Nama Akun" name="username"
                                        class="p-1.5 pl-10 text-sm rounded-2xl bg-white  text-black border-0 shadow-md  w-full" />
                                </div>
                                <div class="relative focus:outline-none focus:border-2  text-white">
                                    <span class="absolute top-1/2 transform -translate-y-1/2 bg-belum  rounded-l-2xl">
                                        <i class="p-2 fas fa-lock"></i>
                                    </span>
                                    <input type="password" name="password" placeholder="Masukkan Kata sandi"
                                        class="p-1.5 pl-10 text-sm rounded-2xl bg-white text-black border-0 shadow-md  w-full" />
                                </div>
                                <a href="#{{ route('password.request') }}"
                                    class="-mt-2.5 pb-3 text-left text-sm text-cyan-600 underline">Lupa Kata Sandi
                                    Anda?</a>
                            </div>
                            <button type="submit"
                                class="bg-belum p-1 px-5 text-white  rounded-2xl border-cyan-700 focus:ring-2 m-4">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script></script>
</body>

</html>
