@extends('layouts.layout_ecommerce')

@section('title', 'Pesquisa ')


@section('content')
    <main>

        <div class="flex justify-center p-5">
            <span class="text-gray-400">Você pesquisou por “Placa de video 5060”</span>
        </div>

        {{-- Products list --}}
        <section>
            {{-- Products --}}
            <div class="p-8 lg:flex lg:justify-center">
                <div class="inline-grid grid-cols-5 gap-6">
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



                    {{-- 2 --}}

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
                            <a href="#"
                                class="uppercase px-20 py-2 hover:bg-blue_gray bg-dark_blue_gray text-white font-semibold rounded-lg">
                                Comprar
                            </a>
                        </div>
                    </div>

                    {{-- 3 --}}
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
                            <a href="#"
                                class="uppercase px-20 py-2 hover:bg-blue_gray bg-dark_blue_gray text-white font-semibold rounded-lg">
                                Comprar
                            </a>
                        </div>
                    </div>

                    {{-- 4 --}}
                    <div class="border border-blue_gray rounded-lg flex flex-col  justify-center p-3 w-64">
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
                            <a href="#"
                                class="uppercase px-20 py-2 hover:bg-blue_gray bg-dark_blue_gray text-white font-semibold rounded-lg">
                                Comprar
                            </a>
                        </div>
                    </div>

                    {{-- 5 --}}
                    <div class="border border-blue_gray rounded-lg flex flex-col  justify-center p-3 w-64">
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
                            <a href="#"
                                class="uppercase px-20 py-2 hover:bg-blue_gray bg-dark_blue_gray text-white font-semibold rounded-lg">
                                Comprar
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-8 lg:flex lg:justify-center">
                <div class="inline-grid grid-cols-5 gap-6">


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
                            <a href="#"
                                class="uppercase px-20 py-2 hover:bg-blue_gray bg-dark_blue_gray text-white font-semibold rounded-lg">
                                Comprar
                            </a>
                        </div>
                    </div>



                    {{-- 2 --}}

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
                            <a href="#"
                                class="uppercase px-20 py-2 hover:bg-blue_gray bg-dark_blue_gray text-white font-semibold rounded-lg">
                                Comprar
                            </a>
                        </div>
                    </div>

                    {{-- 3 --}}
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
                            <a href="#"
                                class="uppercase px-20 py-2 hover:bg-blue_gray bg-dark_blue_gray text-white font-semibold rounded-lg">
                                Comprar
                            </a>
                        </div>
                    </div>

                    {{-- 4 --}}
                    <div class="border border-blue_gray rounded-lg flex flex-col  justify-center p-3 w-64">
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
                            <a href="#"
                                class="uppercase px-20 py-2 hover:bg-blue_gray bg-dark_blue_gray text-white font-semibold rounded-lg">
                                Comprar
                            </a>
                        </div>
                    </div>

                    {{-- 5 --}}
                    <div class="border border-blue_gray rounded-lg flex flex-col  justify-center p-3 w-64">
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
                            <a href="#"
                                class="uppercase px-20 py-2 hover:bg-blue_gray bg-dark_blue_gray text-white font-semibold rounded-lg">
                                Comprar
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        {{-- Paginator --}}
        <div class="flex justify-center mb-10">
            <span class="text-2xl">< 1 <span class="text-gray-400">2 3 4 5 6 7 </span>></span>
        </div>
    </main>

@endsection
