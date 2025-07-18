@extends('layouts.layout_ecommerce')

@section('title', 'Carrinho - NeoShop')


@section('content')
    <main>
        {{-- Cart --}}
        <section>

            <div class="bg-white  p-4 sm:p-8 text-sm text-blue_gray">
                <div class="max-w-6xl mx-auto">

                    <div class="grid md:grid-cols-3 gap-6">

                        <div class="md:col-span-2 border rounded-md p-4 shadow-sm">
                            <div class="flex items-center gap-2 mb-4 text-dark_blue_gray font-semibold text-base">
                                <i class="ri-shopping-cart-2-line text-base_color"></i>
                                <span>CARRINHO</span>
                            </div>

                            <div
                                class="flex flex-col sm:flex-row items-center sm:items-start justify-between gap-4 border-t pt-4">
                                <div class="flex items-start gap-4">
                                    <img src="{{ asset('images/product_example.png') }}" alt="Produto"
                                        class="w-24 h-auto rounded" />
                                    <div>
                                        <p class="font-medium">
                                            Placa de Vídeo Gigabyte RTX 5060 AERO OC 8G <br />
                                            NVIDIA GeForce, 8GB GDDR7, 128bits, DLSS, Triple
                                        </p>
                                        <div class="flex items-center gap-2 mt-2">
                                            <span class="text-xs text-gray-500">Quant</span>
                                            <button class="text-base_color"> &lt; </button>
                                            <span class="font-medium text-dark_blue_gray">1</span>
                                            <button class="text-base_color"> &gt; </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col items-end gap-2">
                                    <p class="text-base_color font-semibold">R$ 1.435,45</p>
                                    <button class="text-red-500 hover:text-red-600 text-xs flex items-center gap-1">
                                        <i class="ri-delete-bin-6-line"></i> Remover
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="border rounded-md p-4 shadow-sm">
                                <div class="flex items-center gap-2 mb-4 text-dark_blue_gray font-semibold text-base">
                                    <i class="ri-file-list-2-line text-base_color"></i>
                                    <span>RESUMO</span>
                                </div>

                                <div class="flex justify-between mb-2">
                                    <span>Valor dos Produtos:</span>
                                    <span class="font-medium">R$ 1.435,45</span>
                                </div>
                                <div class="flex justify-between mb-2">
                                    <span>Frete:</span>
                                    <span class="font-medium">R$ 0,00</span>
                                </div>
                                <div class="flex justify-between mb-2 bg-gray-200 px-2 py-1 rounded">
                                    <span class="font-semibold">Total a Prazo:</span>
                                    <span class="font-semibold">R$ 1.635,45</span>
                                </div>
                                <div class="flex justify-between mb-2 bg-green-200 px-2 py-1 rounded text-green-800">
                                    <span class="font-semibold">Valor à Vista no PIX:</span>
                                    <span class="font-semibold">R$ 1.235,45</span>
                                </div>


                            </div>

                            <div class="mt-6 flex justify-center">
                                <a href="finalizar"
                                    class="px-4 py-3 bg-dark_blue_gray text-white rounded-md font-bold text-sm hover:bg-base_color transition">
                                    IR PARA O PAGAMENTO
                                </a>
                            </div>
                        </div>


                    </div>
                </div>


        </section>


        {{-- Most wanted --}}
        <section>
            <div class="px-4 sm:px-10 md:px-20 lg:px-40 py-8">
                <div class="flex items-center gap-2 mb-10">
                    <i class="ri-crosshair-2-fill text-3xl text-base_color"></i>
                    <h2 class="text-3xl font-extrabold text-dark_blue_gray">QUEM COMPROU, COMRPOU TAMBÉM</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-6 justify-items-center">

                    {{-- 1 --}}
                    <div class="border border-blue_gray rounded-lg flex flex-col  justify-center p-3  w-64">
                        {{-- Top --}}
                        <div class="flex justify-between">
                            {{-- Stars --}}
                            <div>
                                <?php
                                $stars = 0;

                                while ($stars < 5) {
                                    echo '<i class="ri-star-line text-gray-500"></i>';
                                    $stars++;
                                }
                                ?>
                            </div>
                            {{-- Favorite and Cart --}}
                            <div class="text-gray-500 text-2xl flex gap-5 items-center">
                                <button class="hover:text-blue_purple">
                                    <i class="ri-shopping-cart-2-line"></i>
                                </button>

                                <button class="hover:text-blue_purple">
                                    <i class="ri-heart-line"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Mid --}}
                        <div>
                            <img src="{{ asset('images/product_example.png') }}" alt="example">
                        </div>

                        {{-- Bottom --}}
                        <div class="mb-4">
                            <h1 class="font-bold">Placa de Vídeo Gigabyte RTX 5060 AERO OC 8G NVIDIA GeForce, 8GB GDDR7,
                                128bits, DLSS, Triple
                            </h1>
                            <div class="flex flex-col">
                                <span class="text-xl text-base_color font-bold">R$ 1435,50</span>
                                <span class="text-xs text-gray-500">Á vista no Pix <br>
                                    ou ate 30x no cartão</span>
                            </div>
                        </div>

                        {{-- Button --}}
                        <div class="flex justify-center">
                            <a href="produto"
                                class="uppercase px-20 py-2 hover:bg-blue_gray bg-dark_blue_gray text-white font-semibold rounded-lg">
                                Comprar
                            </a>
                        </div>
                    </div>

                    {{-- 1 --}}
                    <div class="border border-blue_gray rounded-lg flex flex-col  justify-center p-3  w-64">
                        {{-- Top --}}
                        <div class="flex justify-between">
                            {{-- Stars --}}
                            <div>
                                <?php
                                $stars = 0;

                                while ($stars < 5) {
                                    echo '<i class="ri-star-line text-gray-500"></i>';
                                    $stars++;
                                }
                                ?>
                            </div>
                            {{-- Favorite and Cart --}}
                            <div class="text-gray-500 text-2xl flex gap-5 items-center">
                                <button class="hover:text-blue_purple">
                                    <i class="ri-shopping-cart-2-line"></i>
                                </button>

                                <button class="hover:text-blue_purple">
                                    <i class="ri-heart-line"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Mid --}}
                        <div>
                            <img src="{{ asset('images/product_example.png') }}" alt="example">
                        </div>

                        {{-- Bottom --}}
                        <div class="mb-4">
                            <h1 class="font-bold">Placa de Vídeo Gigabyte RTX 5060 AERO OC 8G NVIDIA GeForce, 8GB GDDR7,
                                128bits, DLSS, Triple
                            </h1>
                            <div class="flex flex-col">
                                <span class="text-xl text-base_color font-bold">R$ 1435,50</span>
                                <span class="text-xs text-gray-500">Á vista no Pix <br>
                                    ou ate 30x no cartão</span>
                            </div>
                        </div>

                        {{-- Button --}}
                        <div class="flex justify-center">
                            <a href="produto"
                                class="uppercase px-20 py-2 hover:bg-blue_gray bg-dark_blue_gray text-white font-semibold rounded-lg">
                                Comprar
                            </a>
                        </div>
                    </div>

                    {{-- 1 --}}
                    <div class="border border-blue_gray rounded-lg flex flex-col  justify-center p-3  w-64">
                        {{-- Top --}}
                        <div class="flex justify-between">
                            {{-- Stars --}}
                            <div>
                                <?php
                                $stars = 0;

                                while ($stars < 5) {
                                    echo '<i class="ri-star-line text-gray-500"></i>';
                                    $stars++;
                                }
                                ?>
                            </div>
                            {{-- Favorite and Cart --}}
                            <div class="text-gray-500 text-2xl flex gap-5 items-center">
                                <button class="hover:text-blue_purple">
                                    <i class="ri-shopping-cart-2-line"></i>
                                </button>

                                <button class="hover:text-blue_purple">
                                    <i class="ri-heart-line"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Mid --}}
                        <div>
                            <img src="{{ asset('images/product_example.png') }}" alt="example">
                        </div>

                        {{-- Bottom --}}
                        <div class="mb-4">
                            <h1 class="font-bold">Placa de Vídeo Gigabyte RTX 5060 AERO OC 8G NVIDIA GeForce, 8GB GDDR7,
                                128bits, DLSS, Triple
                            </h1>
                            <div class="flex flex-col">
                                <span class="text-xl text-base_color font-bold">R$ 1435,50</span>
                                <span class="text-xs text-gray-500">Á vista no Pix <br>
                                    ou ate 30x no cartão</span>
                            </div>
                        </div>

                        {{-- Button --}}
                        <div class="flex justify-center">
                            <a href="produto"
                                class="uppercase px-20 py-2 hover:bg-blue_gray bg-dark_blue_gray text-white font-semibold rounded-lg">
                                Comprar
                            </a>
                        </div>
                    </div>

                    {{-- 1 --}}
                    <div class="border border-blue_gray rounded-lg flex flex-col  justify-center p-3  w-64">
                        {{-- Top --}}
                        <div class="flex justify-between">
                            {{-- Stars --}}
                            <div>
                                <?php
                                $stars = 0;

                                while ($stars < 5) {
                                    echo '<i class="ri-star-line text-gray-500"></i>';
                                    $stars++;
                                }
                                ?>
                            </div>
                            {{-- Favorite and Cart --}}
                            <div class="text-gray-500 text-2xl flex gap-5 items-center">
                                <button class="hover:text-blue_purple">
                                    <i class="ri-shopping-cart-2-line"></i>
                                </button>

                                <button class="hover:text-blue_purple">
                                    <i class="ri-heart-line"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Mid --}}
                        <div>
                            <img src="{{ asset('images/product_example.png') }}" alt="example">
                        </div>

                        {{-- Bottom --}}
                        <div class="mb-4">
                            <h1 class="font-bold">Placa de Vídeo Gigabyte RTX 5060 AERO OC 8G NVIDIA GeForce, 8GB GDDR7,
                                128bits, DLSS, Triple
                            </h1>
                            <div class="flex flex-col">
                                <span class="text-xl text-base_color font-bold">R$ 1435,50</span>
                                <span class="text-xs text-gray-500">Á vista no Pix <br>
                                    ou ate 30x no cartão</span>
                            </div>
                        </div>

                        {{-- Button --}}
                        <div class="flex justify-center">
                            <a href="produto"
                                class="uppercase px-20 py-2 hover:bg-blue_gray bg-dark_blue_gray text-white font-semibold rounded-lg">
                                Comprar
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

@endsection
