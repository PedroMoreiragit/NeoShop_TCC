@extends('layouts.layout_ecommerce')

@section('title', 'Pedidos - Neoshop')

@section('content')
    <main>
        <section>
            <div class="max-w-6xl mx-auto px-4 mt-5">
                <h1 class="text-3xl font-bold text-base_color mb-10">Meus Pedidos</h1>


                <div class="bg-white rounded-lg shadow-md p-6 mb-6 border border-blue_gray">
                    {{-- Info do pedido --}}
                    <div class="flex flex-col sm:flex-row sm:justify-between mb-4">
                        <div>
                            <span class="text-sm text-gray-600">Pedido #123456</span><br>
                            <span class="text-sm text-gray-600">Realizado em: 15/07/2025</span>
                        </div>
                        <div class="mt-2 sm:mt-0">
                            <span
                                class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700">Entregue</span>
                        </div>
                    </div>


                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-32">
                            <img src="{{ asset('images/product_example.png') }}" alt="Produto" class="rounded-lg">
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg font-bold text-dark_blue_gray">
                                Placa de Vídeo Gigabyte RTX 5060 AERO OC 8G NVIDIA GeForce, 8GB GDDR7, 128bits, DLSS, Triple
                            </h2>
                            <p class="text-sm text-gray-500 mt-1">Vendido e entregue por NeoShop</p>
                            <p class="text-base font-bold text-base_color mt-2">R$ 1.435,50</p>
                        </div>
                        <div>
                            <a href="#" class="text-sm text-blue_purple hover:underline">Ver detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 mb-6 border border-blue_gray">
                    {{-- Info do pedido --}}
                    <div class="flex flex-col sm:flex-row sm:justify-between mb-4">
                        <div>
                            <span class="text-sm text-gray-600">Pedido #123456</span><br>
                            <span class="text-sm text-gray-600">Realizado em: 15/07/2025</span>
                        </div>
                        <div class="mt-2 sm:mt-0">
                            <span
                                class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-200 text-yellow-600">A caminho</span>
                        </div>
                    </div>


                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-32">
                            <img src="{{ asset('images/product_example.png') }}" alt="Produto" class="rounded-lg">
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg font-bold text-dark_blue_gray">
                                Placa de Vídeo Gigabyte RTX 5060 AERO OC 8G NVIDIA GeForce, 8GB GDDR7, 128bits, DLSS, Triple
                            </h2>
                            <p class="text-sm text-gray-500 mt-1">Vendido e entregue por NeoShop</p>
                            <p class="text-base font-bold text-base_color mt-2">R$ 1.435,50</p>
                        </div>
                        <div>
                            <a href="#" class="text-sm text-blue_purple hover:underline">Ver detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 mb-6 border border-blue_gray">
                    {{-- Info do pedido --}}
                    <div class="flex flex-col sm:flex-row sm:justify-between mb-4">
                        <div>
                            <span class="text-sm text-gray-600">Pedido #123456</span><br>
                            <span class="text-sm text-gray-600">Realizado em: 15/07/2025</span>
                        </div>
                        <div class="mt-2 sm:mt-0">
                            <span
                                class="px-3 py-1 text-xs font-medium rounded-full bg-red-200 text-red-600">Cancelado</span>
                        </div>
                    </div>


                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-32">
                            <img src="{{ asset('images/product_example.png') }}" alt="Produto" class="rounded-lg">
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg font-bold text-dark_blue_gray">
                                Placa de Vídeo Gigabyte RTX 5060 AERO OC 8G NVIDIA GeForce, 8GB GDDR7, 128bits, DLSS, Triple
                            </h2>
                            <p class="text-sm text-gray-500 mt-1">Vendido e entregue por NeoShop</p>
                            <p class="text-base font-bold text-base_color mt-2">R$ 1.435,50</p>
                        </div>
                        <div>
                            <a href="#" class="text-sm text-blue_purple hover:underline">Ver detalhes</a>
                        </div>
                    </div>
                </div>


                <div class="bg-white rounded-lg shadow-md p-6 mb-6 border border-blue_gray">
                    {{-- Info do pedido --}}
                    <div class="flex flex-col sm:flex-row sm:justify-between mb-4">
                        <div>
                            <span class="text-sm text-gray-600">Pedido #123456</span><br>
                            <span class="text-sm text-gray-600">Realizado em: 15/07/2025</span>
                        </div>
                        <div class="mt-2 sm:mt-0">
                            <span
                                class="px-3 py-1 text-xs font-medium rounded-full bg-red-200 text-red-600">Não entregue</span>
                        </div>
                    </div>


                    <div class="flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-32">
                            <img src="{{ asset('images/product_example.png') }}" alt="Produto" class="rounded-lg">
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg font-bold text-dark_blue_gray">
                                Placa de Vídeo Gigabyte RTX 5060 AERO OC 8G NVIDIA GeForce, 8GB GDDR7, 128bits, DLSS, Triple
                            </h2>
                            <p class="text-sm text-gray-500 mt-1">Vendido e entregue por NeoShop</p>
                            <p class="text-base font-bold text-base_color mt-2">R$ 1.435,50</p>
                        </div>
                        <div>
                            <a href="#" class="text-sm text-blue_purple hover:underline">Ver detalhes</a>
                        </div>
                    </div>
                </div>



            </div>
        </section>
    </main>
@endsection
