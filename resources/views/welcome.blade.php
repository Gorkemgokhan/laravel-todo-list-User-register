<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Üye Görevleri</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body class="antialiased">

        <div class="">
            <div class="px-8 py-3 text-center md:flex justify-between items-center bg-gray-700  text-gray-300">
                <h1 class="md:mb-0 font-bold uppercase text-xl">Üye GÖrevleri</h1>
                @if (Route::has('login'))
                    <ul class="md:flex gap-4">
                        @auth
                            <li class="mt-4 mb-4 md:mt-0 md:mb-0"><a href="{{ url('/dashboard') }}" class="text-gray-900 bg-gray-200 py-1 px-4 rounded-lg hover:bg-gray-200 hover:text-gray-500 cursor-pointer focus:outline-none">Dashboard</a></li>
                        @else
                            <li class="mt-4 mb-4 md:mt-0 md:mb-0"><a href="{{ route('login') }}" class="text-gray-900 bg-gray-200 py-1 px-4 rounded-lg hover:bg-gray-200 hover:text-gray-500 cursor-pointer focus:outline-none">Giriş</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="text-gray-900 bg-gray-200 py-1 px-4 rounded-lg hover:bg-gray-200 hover:text-gray-500 cursor-pointer focus:outline-none">Kayıt Ol</a></li>
                            @endif
                        @endauth
                    </ul>
                @endif
            </div>

            <div class="grid lg:grid lg:grid-cols-3">
                <div class="lg:col-span-1 bg-red-200">
                    <img class="object-cover lg:h-full lg:w-full opacity-80" src="img/landing-img.jpeg" alt="">
                </div>
                <div class="lg:col-span-2 overflow-hidden bg-gray-200">
                    <div class="bg-gray-200 transform -skew-y-6">
                        <div class="transform skew-y-6 text-center py-16">
                            <h1 class="text-xl">Üye Görev (Not Defteri)</h1>
                            <p class="italic mt-4 text-md">Üye girişi yapıp Her kullanıcıya özel not defteri şeklinde bilgileri veri tabanına kaydetmek amacıyla yazılmıştır.</p>
                        </div>
                    </div>

                </div>
            </div>
            <x-footer/>
        </div>
    </body>
</html>

