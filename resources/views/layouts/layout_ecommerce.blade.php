<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Icon --}}
    <link rel="icon" href="{{ asset('images/logo_solo.svg') }}" type="image/png">

    {{-- JS and CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="flex flex-col min-h-screen">

    <header>
        <nav class="p-9 bg-dark_blue_gray">
            <div class="flex gap-10 items-center justify-between">

                <div class="flex gap-10 items-center">
                    {{-- Menu --}}
                    <div>
                        <button id="menu-btn">
                            <i class="ri-menu-fill font-bold text-3xl text-white hover:text-blue_purple"></i>
                        </button>
                    </div>

                    {{-- Logo --}}
                    <div class="hidden lg:block">
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
                    <div class="lg:flex items-center hidden lg:visible">
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

                        <button id="fav-btn" class="hover:text-blue_purple">
                            <i class="ri-heart-line"></i>
                        </button>
                    </div>
                </div>

            </div>
        </nav>

        {{-- Filters --}}
        <div
            class="text-white font-semibold bg-blue_gray flex gap-6 px-6 py-2 uppercase overflow-x-auto whitespace-nowrap lg:justify-between">
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

        {{-- Menu --}}
        <nav>
            <div id="sidebar"
                class="fixed top-0 left-0 h-full flex flex-col justify-between w-10/12 sm:w-6/12 md:w-4/12 lg:w-2/12  bg-dark_blue_gray text-white p-6 transform -translate-x-full transition-transform duration-300 z-50">

                <div>
                    <div class="mb-6  justify-between hidden lg:flex">
                        <div class="flex items-center gap-2">
                            <i class="ri-account-circle-fill text-6xl text-white"></i>
                            <span class="font-semibold text-sm">ACESSE SUA CONTA</span>
                        </div>
                        <button id="menuClose">
                            <i class="ri-close-fill text-xl hover:text-blue_purple"></i>
                        </button>
                    </div>

                    <a href="/">
                        <img class="w-48" src="{{ asset('images/logo.svg') }}" alt="Logo">
                    </a>


                    <ul class="flex flex-col gap-5 text-xl mt-5">

                        <li>
                            <a href="/" class="flex items-center gap-2 hover:text-blue_purple">
                                <i class="ri-home-9-fill"></i> Home
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center gap-2 hover:text-blue_purple">
                                <i class="ri-user-fill"></i> Minha conta
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center gap-2 hover:text-blue_purple">
                                <i class="ri-truck-fill"></i> Meus pedidos
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center gap-2 hover:text-blue_purple">
                                <i class="ri-wallet-fill"></i> Carteira
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center gap-2 hover:text-blue_purple">
                                <i class="ri-customer-service-fill"></i> Atendimento ao cliente
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mt-8 flex flex-col gap-5 text-center text-xl">
                    <a href="login"
                        class="w-full bg-base_color hover:bg-dark font-bold text-white py-2 rounded-lg">ENTRE</a>
                    <a href="registro"
                        class="w-full mt-2 text-white text-sm font-bold hover:text-blue_purple">CADASTRE-SE</a>
                </div>

            </div>
        </nav>
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>


        {{-- Favoritos --}}
        <nav>
            <div id="sidebar-Fav"
                class="fixed top-0 right-0 h-full w-10/12 sm:w-6/12 md:w-4/12 lg:w-2/12 bg-white p-6 transform translate-x-full transition-transform duration-300 z-50">

                <div class="flex justify-between mb-5">
                    <h1 class="font-bold uppercase">Favoritos</h1>
                    <button id="FavClose">
                        <i class="ri-close-fill text-xl hover:text-blue_purple"></i>
                    </button>
                </div>


                <div class="flex flex-col gap-5">
                    <a href="">
                        <div class="border p-5 flex justify-between items-center ">
                            <div class="flex flex-col items-center gap-2">
                                <img class="w-20" src="{{ asset('images/product_example.png') }}" alt="">
                                <span class="text-base_color text-xs font-semibold">R$ 1435,50</span>
                            </div>
                    </a>

                    <div class="flex gap-2">
                        {{-- Heart --}}
                        <button>
                            <i class="ri-poker-hearts-fill text-base_color text-2xl"></i>
                        </button>
                        {{-- Trash --}}
                        <button>
                            <i class="ri-delete-bin-fill text-2xl"></i>
                        </button>
                    </div>
                </div>
            </div>


            </div>
        </nav>


        <div id="overlay-Fav" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>
    </header>

    <main class="flex-grow">
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
        <div class="text-center max-w-6xl">
            <span class="text-xs text-gray-500 ">Neoshop!® é uma marca registrada de Neoshop S.A | CNPJ:
                05.570.714/0001-59 | Todos os direitos
                reservados. Os preços anunciados neste site ou via e-mail promocional podem ser alterados sem prévio
                aviso. O neoshop! não é responsável por erros descritivos. As fotos contidas nesta página são
                meramente ilustrativas do produto e podem variar de acordo com o fornecedor/lote do fabricante. Este
                site trabalha 100% em criptografia SSL.  Clique aqui e veja as políticas de nossa empresa.</span>
        </div>

    </footer>

        @yield('scripts')

</body>

</html>
