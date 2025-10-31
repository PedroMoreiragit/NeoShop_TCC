@extends('layouts.layout_dashboard')

@section('title', 'Produtos')

@section('content')
    <div class="max-w-7xl mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-base_color">Produtos</h1>

            <a href="create-product"
                class="bg-base_color text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue_purple transition duration-200 flex items-center gap-2">
                <i class="ri-add-line text-lg"></i>
                Novo Produto
            </a>
        </div>


        <div class="bg-blue_gray rounded-xl shadow-md overflow-hidden">
            <div class="flex flex-col divide-y divide-dark_blue_gray">
                <!-- Product Item 1 -->
                <div class="flex items-center p-4 hover:bg-dark_blue_gray transition duration-200">
                    <img src="https://via.placeholder.com/80x80" alt="Produto 1"
                        class="w-20 h-20 object-cover rounded-lg mr-4">
                    <div class="flex-1">
                        <h2 class="text-white font-semibold">Teclado Mecânico RGB</h2>
                        <p class="text-gray-300 text-sm">Teclado mecânico gamer com iluminação RGB</p>
                        <p class="text-base_color font-bold mt-1">R$ 599,90</p>
                    </div>
                    <div class="flex gap-2 ml-4">
                        <button
                            class="bg-blue_purple text-white px-3 py-1.5 rounded-md hover:bg-base_color transition duration-200">
                            Editar
                        </button>
                        <button
                            class="bg-red-600 text-white px-3 py-1.5 rounded-md hover:bg-red-500 transition duration-200">
                            Excluir
                        </button>
                    </div>
                </div>

                <!-- Product Item 2 -->
                <div class="flex items-center p-4 hover:bg-dark_blue_gray transition duration-200">
                    <img src="https://via.placeholder.com/80x80" alt="Produto 2"
                        class="w-20 h-20 object-cover rounded-lg mr-4">
                    <div class="flex-1">
                        <h2 class="text-white font-semibold">Mouse Gamer Pro</h2>
                        <p class="text-gray-300 text-sm">Mouse gamer com sensor de alta precisão</p>
                        <p class="text-base_color font-bold mt-1">R$ 299,90</p>
                    </div>
                    <div class="flex gap-2 ml-4">
                        <button
                            class="bg-blue_purple text-white px-3 py-1.5 rounded-md hover:bg-base_color transition duration-200">
                            Editar
                        </button>
                        <button
                            class="bg-red-600 text-white px-3 py-1.5 rounded-md hover:bg-red-500 transition duration-200">
                            Excluir
                        </button>
                    </div>
                </div>

                <!-- Product Item 3 -->
                <div class="flex items-center p-4 hover:bg-dark_blue_gray transition duration-200">
                    <img src="https://via.placeholder.com/80x80" alt="Produto 3"
                        class="w-20 h-20 object-cover rounded-lg mr-4">
                    <div class="flex-1">
                        <h2 class="text-white font-semibold">Headset Gamer</h2>
                        <p class="text-gray-300 text-sm">Headset com som surround 7.1</p>
                        <p class="text-base_color font-bold mt-1">R$ 399,90</p>
                    </div>
                    <div class="flex gap-2 ml-4">
                        <button
                            class="bg-blue_purple text-white px-3 py-1.5 rounded-md hover:bg-base_color transition duration-200">
                            Editar
                        </button>
                        <button
                            class="bg-red-600 text-white px-3 py-1.5 rounded-md hover:bg-red-500 transition duration-200">
                            Excluir
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
