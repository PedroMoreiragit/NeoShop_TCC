@extends('layouts.layout_ecommerce')

@section('title', 'Home - NeoShop')


@section('content')
    <main>

        <section class="mb-5">
            {{-- Swipper --}}
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="w-screen" src="{{ asset('images/banner_1.png') }}" alt="Logo">
                    </div>
                    <div class="swiper-slide"><img class="w-screen" src="{{ asset('images/banner_2.png') }}" alt="Logo">
                    </div>
                    <div class="swiper-slide"><img class="w-screen" src="{{ asset('images/banner_3.png') }}" alt="Logo">
                    </div>
                </div>
            </div>
        </section>

        {{-- Services --}}
        <section class="mb-10">
            <div class="flex justify-between px-16 gap-3">

                {{-- Build --}}
                <a href="">
                    <div class="flex">
                        <div class="bg-blue_gray p-5 flex items-center">
                            <i class="ri-tools-fill text-white text-6xl hover:text-blue_purple"></i>
                        </div>
                        <div class="bg-dark_blue_gray p-8">
                            <h1 class="uppercase text-white font-bold text-3xl">monte seu pc</h1>
                        </div>
                    </div>
                </a>

                {{-- Customize --}}
                <a href="">
                    <div class="flex">
                        <div class="bg-blue_gray p-5 flex items-center">
                            <i class="ri-building-fill text-white text-6xl  hover:text-blue_purple"></i>
                        </div>
                        <div class="bg-dark_blue_gray p-8">
                            <h1 class="uppercase text-white font-bold text-3xl">Gabinete custom</h1>
                        </div>
                    </div>
                </a>

                {{-- Assistence --}}
                <a href="">
                    <div class="flex">
                        <div class="bg-blue_gray p-5 flex items-center">
                            <i class="ri-question-fill text-white text-6xl  hover:text-blue_purple"></i>
                        </div>
                        <div class="bg-dark_blue_gray p-8">
                            <h1 class="uppercase text-white font-bold text-3xl">Assistência</h1>
                        </div>
                    </div>
                </a>

            </div>
        </section>

        {{-- Products list --}}
        <section>
            {{-- Title --}}
            <div class="bg-blue_gray py-5 px-10 flex justify-between items-center">
                <h1 class="uppercase text-white text-2xl font-bold">Produtos em destaque </h1>
                <div class="text-white">
                    <span class="uppercase text-xl">Termina em <i class="ri-time-line"></i></span>
                    <span class="text-xl font-bold">24:00:00</span>
                </div>
            </div>

            {{-- Products --}}
            <div class="p-8">
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

             <div class="p-8">
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
    </main>

@endsection
