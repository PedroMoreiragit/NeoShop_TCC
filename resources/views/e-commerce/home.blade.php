@extends('layouts.layout_ecommerce')

@section('title', 'Home - NeoShop')


@section('content')
    <main>

        <section class="lg:mb-5">
            {{-- Swiper --}}
            <div class="swiperHome swiper w-full h-auto max-h-[300px] sm:max-h-[400px] lg:max-h-[500px] overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="w-full h-auto object-cover" src="{{ asset('images/banner_1.png') }}" alt="Logo">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full h-auto object-cover" src="{{ asset('images/banner_2.png') }}" alt="Logo">
                    </div>
                    <div class="swiper-slide">
                        <img class="w-full h-auto object-cover" src="{{ asset('images/banner_3.png') }}" alt="Logo">
                    </div>
                </div>
            </div>
        </section>


        {{-- Services --}}
        <section class="mb-10">
            <div class="flex flex-col lg:flex-row gap-6 px-4 sm:px-8 max-w-screen-xl mx-auto">


                <!-- Build -->
                <a href="" class="flex flex-1 min-w-[240px]">
                    <div class="flex w-full">
                        <div class="bg-blue_gray p-5 flex items-center justify-center">
                            <i class="ri-tools-fill text-white text-5xl sm:text-6xl hover:text-blue_purple"></i>
                        </div>
                        <div class="bg-dark_blue_gray p-6 sm:p-8 flex items-center">
                            <h1 class="uppercase text-white font-bold text-xl sm:text-2xl lg:text-3xl">monte seu pc</h1>
                        </div>
                    </div>
                </a>

                <!-- Customize -->
                <a href="" class="flex flex-1 min-w-[240px]">
                    <div class="flex w-full">
                        <div class="bg-blue_gray p-5 flex items-center justify-center">
                            <i class="ri-building-fill text-white text-5xl sm:text-6xl hover:text-blue_purple"></i>
                        </div>
                        <div class="bg-dark_blue_gray p-6 sm:p-8 flex items-center">
                            <h1 class="uppercase text-white font-bold text-xl sm:text-2xl lg:text-3xl">Gabinete custom</h1>
                        </div>
                    </div>
                </a>

                <!-- Assistance -->
                <a href="" class="flex flex-1 min-w-[240px]">
                    <div class="flex w-full">
                        <div class="bg-blue_gray p-5 flex items-center justify-center">
                            <i class="ri-question-fill text-white text-5xl sm:text-6xl hover:text-blue_purple"></i>
                        </div>
                        <div class="bg-dark_blue_gray p-6 sm:p-8 flex items-center">
                            <h1 class="uppercase text-white font-bold text-xl sm:text-2xl lg:text-3xl">Assistência</h1>
                        </div>
                    </div>
                </a>

            </div>
        </section>


        {{-- Products list --}}
        <section>
            {{-- Title --}}
            <div class="bg-blue_gray py-5 px-4 sm:px-6 lg:px-10 flex flex-col sm:flex-row  items-center gap-3">
                <i class="ri-star-fill text-xl text-white"></i>
                <h1 class="uppercase text-white text-xl sm:text-2xl font-bold text-center sm:text-left">
                    Produtos em destaque
                </h1>
            </div>

            {{-- Products --}}
            <div class="flex justify-center px-4 sm:px-6 lg:px-10 mb-8">
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 mt-6 gap-6 w-full max-w-[1600px]">
                    @foreach ($products as $product)
                        <div
                            class="border border-blue_gray rounded-lg flex flex-col justify-between p-4 shadow-sm hover:shadow-md transition w-full">
                            {{-- Top --}}
                            <div class="flex justify-between items-center mb-2">
                                {{-- Stars --}}
                                <div class="flex text-gray-500">
                                    @for ($i = 0; $i < 5; $i++)
                                        <i class="ri-star-line"></i>
                                    @endfor
                                </div>

                                {{-- Favorite and Cart --}}
                                <div class="text-gray-500 text-xl flex gap-3 items-center">
                                    <button class="hover:text-blue_purple transition">
                                        <i class="ri-shopping-cart-2-line"></i>
                                    </button>
                                    <button class="hover:text-blue_purple transition">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>

                            {{-- Mid --}}
                            <div
                                class="w-full h-56 sm:h-64 flex items-center justify-center overflow-hidden rounded-lg bg-gray-100 mb-4">
                                <img src="{{ Storage::url($product->image_path) }}" alt="{{ $product->name }}"
                                    class="w-full h-full object-cover">
                            </div>

                            {{-- Bottom --}}
                            <div class="flex flex-col gap-1 mb-4">
                                <h1 class="font-bold text-base_color truncate">{{ $product->name }}</h1>
                                <span class="price text-xl text-base_color font-bold">R$ {{ $product->price }}</span>
                                <span class="text-xs text-gray-500 leading-tight">
                                    À vista no Pix <br> ou até 30x no cartão
                                </span>
                            </div>

                            {{-- Button --}}
                            <div class="flex justify-center">
                                <a href="{{ url('product', Str::slug($product->name)) }}"
                                    class="uppercase px-12 py-2 bg-dark_blue_gray hover:bg-blue_purple text-white font-semibold rounded-lg transition text-sm sm:text-base">
                                    Comprar
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const prices = document.querySelectorAll('.price');
            prices.forEach(el => {
                const value = parseFloat(el.textContent.replace(/[^\d,.-]/g, '').replace(',', '.'));
                if (!isNaN(value)) {
                    el.textContent = value.toLocaleString('pt-BR', {
                        style: 'currency',
                        currency: 'BRL'
                    });
                }
            });
        });
    </script>



@endsection
