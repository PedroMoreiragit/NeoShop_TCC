<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Icon --}}
    <link rel="icon" href="{{ asset('images/logo_solo.svg') }}" type="image/png">

    {{-- Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- JS and CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <header>
        <nav class="p-9 bg-dark_blue_gray">
            <div class="flex gap-10 items-center justify-between">

                <div class="flex gap-10 items-center">
                    {{-- Menu --}}
                    <div>
                        <button>
                            <i class="ri-menu-fill font-bold text-3xl text-white hover:text-blue_purple"></i>
                        </button>
                    </div>

                    {{-- Logo --}}
                    <div>
                        <a href="/">
                            <img class="w-48" src="{{ asset('images/logo.svg') }}" alt="Logo">
                        </a>
                    </div>
                </div>

                {{-- Search --}}
                <div class="relative flex-1 w-screen max-w-screen-lg">
                    <input type="text" placeholder="Pesquise aqui..."
                        class="rounded-md h-10 w-full pl-3 pr-10 text-sm focus:outline-none">
                    <div class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <i class="ri-search-line"></i>
                    </div>
                </div>


                <div class="flex gap-8">
                    {{-- Login or Register --}}
                    <div class="flex items-center">
                        <i class="ri-account-circle-fill text-6xl text-white"></i>
                        <div>
                            <span class="text-white font-semibold text-xs"><a href="login"
                                    class="hover:text-blue_purple hover:underline hover:underline-offset-2">ENTRE</a>
                                ou <br> <a class="hover:text-blue_purple hover:underline hover:underline-offset-2"
                                    href="registro">CADASTRE-SE</a></span>
                        </div>
                    </div>

                    {{-- Cart and Favorites --}}
                    <div class="text-white text-3xl flex gap-5 items-center">
                        <button class="hover:text-blue_purple">
                            <i class="ri-shopping-cart-2-line"></i>
                        </button>

                        <button class="hover:text-blue_purple">
                            <i class="ri-heart-line"></i>
                        </button>
                    </div>
                </div>

            </div>
        </nav>

        {{-- Filters --}}
        <div class=" text-white font-semibold bg-blue_gray flex justify-between px-10 py-2 uppercase">
            <a href="" class="hover:text-blue_purple">Hardware</a>
            <div class="border-r border-gray-500"></div>
            <a href="" class="hover:text-blue_purple">PC gamer</a>
            <div class="border-r border-gray-500"></div>
            <a href="" class="hover:text-blue_purple">escritório</a>
            <div class="border-r border-gray-500"></div>
            <a href="" class="hover:text-blue_purple">periféricos</a>
            <div class="border-r border-gray-500"></div>
            <a href="" class="hover:text-blue_purple">computadores</a>
            <div class="border-r border-gray-500"></div>
            <a href="" class="hover:text-blue_purple">descontos</a>
            <div class="border-r border-gray-500"></div>
            <a href="" class="hover:text-blue_purple">notebooks</a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>


    <footer class="bg-dark_blue_gray p-10 flex flex-col justify-center items-center">
        {{-- Logo --}}
        <a href="" class="mb-2">
            <img class="w-56" src="{{ asset('images/logo.svg') }}" alt="Logo">
        </a>

        {{-- Social Media --}}
        <div class="text-white text-4xl mb-2 flex gap-5 items-center">
            {{-- Facebook --}}
            <a href=""><i class="ri-facebook-circle-fill"></i></a>

            {{-- Phone --}}
            <a href=""><i class="ri-phone-fill"></i></a>

            {{-- Instagram --}}
            <a href=""><i class="ri-instagram-fill"></i></a>

            {{-- Youtube --}}
            <a href=""><i class="ri-youtube-fill"></i></a>
        </div>

        {{-- Advertising --}}
        <div class="text-center">
            <span class="text-xs text-gray-500">Neoshop!® é uma marca registrada de Neoshop S.A | CNPJ:
                05.570.714/0001-59 | Todos os direitos
                reservados. Os preços anunciados neste site ou via e-mail promocional podem ser alterados sem prévio
                aviso. O neoshop! não é responsável por erros descritivos. As fotos contidas nesta página são
                meramente ilustrativas do produto e podem variar de acordo com o fornecedor/lote do fabricante. Este
                site trabalha 100% em criptografia SSL.  Clique aqui e veja as políticas de nossa empresa.</span>
        </div>

    </footer>
</body>

</html>
