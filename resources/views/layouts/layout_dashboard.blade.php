<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('images/logo_solo.svg') }}" type="image/png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-dark_blue_gray text-white">
    <div class="flex min-h-screen w-full bg-dark_blue_gray text-white">

        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-blue_gray p-6 hidden md:flex flex-col h-screen">
            <a href="/" class="flex items-center justify-between mb-10">
                <img src="{{ asset('images/logo.svg') }}" class="w-48" alt="NeoShop Logo">
                <button id="sidebarToggle" class="md:hidden text-light">
                    <i class="ri-close-line text-2xl"></i>
                </button>
            </a>

            <nav class="flex flex-col gap-4 text-md flex-1">

                <a href="{{ route('dashboard') }}"
                    class="flex items-center gap-3 hover:text-light {{ request()->is('dashboard') ? 'text-base_color bg-dark_blue_gray px-3 py-2 rounded' : '' }}">
                    <i class="ri-dashboard-line"></i> Dashboard
                </a>

                <a href="{{ route('products') }}"
                    class="flex items-center gap-3 hover:text-light {{ request()->is('products') ? 'text-base_color bg-dark_blue_gray px-3 py-2 rounded' : '' }}">
                    <i class="ri-box-3-line"></i> Produtos</a>

                <a href="{{ route('orders') }}"
                    class="flex items-center gap-3 hover:text-light {{ request()->is('orders') ? 'text-base_color bg-dark_blue_gray px-3 py-2 rounded' : '' }}">
                    <i class="ri-box-3-line"></i> Pedidos</a>

                <a href="{{ route('customers') }}"
                    class="flex items-center gap-3 hover:text-light {{ request()->is('customers') ? 'text-base_color bg-dark_blue_gray px-3 py-2 rounded' : '' }}">
                    <i class="ri-box-3-line"></i> Clientes</a>

                <a href="{{ route('reports') }}"
                    class="flex items-center gap-3 hover:text-light {{ request()->is('reports') ? 'text-base_color bg-dark_blue_gray px-3 py-2 rounded' : '' }}">
                    <i class="ri-box-3-line"></i> Relatórios</a>


                {{-- <h2 class="text-light uppercase mt-6 mb-2">Categorias</h2>
                <a href="#" class="hover:text-light">Hardware</a>
                <a href="#" class="hover:text-light">PC Gamer</a>
                <a href="#" class="hover:text-light">Periféricos</a>
                <a href="#" class="hover:text-light">Componentes</a>
                <a href="#" class="hover:text-light">Notebooks</a>
                <a href="#" class="hover:text-light">Promoções</a> --}}

                <div class="mt-auto flex flex-col gap-5">
                    <a href="{{ route('home') }}"
                        class=" rounded-lg transition-colors duration-300 ease-in-out
          text-white hover:text-blue_purple hover:bg-gray-800 lg:text-lg">
                        <i class="ri-store-line text-lg"></i> Ir à Loja
                    </a>

                    <a href="{{ route('logout') }}"
                        class=" rounded-lg transition-colors duration-300 ease-in-out
          text-white hover:text-blue_purple hover:bg-gray-800 lg:text-lg">
                       <i class="ri-logout-box-line text-lg"></i> Sair
                    </a>
                </div>
            </nav>
        </aside>


        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <header class="p-4 md:hidden bg-blue_gray flex justify-between items-center">
                <img src="{{ asset('images/logo.svg') }}" class="w-28" alt="NeoShop Logo">
                <button id="sidebarToggle" class="text-light">
                    <i class="ri-menu-line text-2xl"></i>
                </button>
            </header>

            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('sidebar');

            if (toggleButton) {
                toggleButton.addEventListener('click', () => {
                    sidebar.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>

</html>
