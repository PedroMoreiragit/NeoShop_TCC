@extends('layouts.layout_ecommerce')

@section('title', 'nome do produto')


@section('content')
    <main>
        <section class="mb-5 py-10">
            <div class="flex flex-col lg:flex-row justify-between px-4 sm:px-6 lg:px-10 gap-8">

                {{-- Gallery Swiper --}}
                <div class="flex flex-col gap-2 items-center justify-center w-full lg:w-5/12">
                    <div class="swiperProduct swiper w-full h-80 sm:h-96 rounded overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('images/product_example.png') }}" alt="Product Image"
                                    class="w-full h-full object-contain" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('images/product_example.png') }}" alt="Product Image"
                                    class="w-full h-full object-contain" />
                            </div>
                        </div>

                        <div class="swiper-button-prev absolute left-2 top-1/2 -translate-y-1/2 z-10 cursor-pointer">
                            <i class="ri-arrow-left-s-line text-4xl text-dark"></i>
                        </div>
                        <div class="swiper-button-next absolute right-2 top-1/2 -translate-y-1/2 z-10 cursor-pointer">
                            <i class="ri-arrow-right-s-line text-4xl text-base_color"></i>
                        </div>
                    </div>
                </div>

                {{-- Product Description --}}
                <div class="flex flex-col justify-center px-2 sm:px-6 lg:px-16 w-full lg:w-7/12">
                    <div class="mb-10">
                        <h1 class="font-bold text-2xl sm:text-3xl mb-5">
                            Placa de Vídeo Gigabyte RTX 5060 AERO OC 8G NVIDIA GeForce, 8GB GDDR7, 128bits, DLSS, Triple
                        </h1>
                        <span class="text-gray-300 line-through text-lg sm:text-xl">R$2399,76</span>
                        <span class="text-base_color text-3xl sm:text-4xl font-bold">R$ 1435,40</span>
                        <p class="mt-4 text-gray-300 text-base sm:text-lg font-bold">À Vista com 10% de desconto no Pix</p>
                        <p class="text-base_color font-semibold text-sm sm:text-base">
                            Em até 10x de R$ 316,65 sem juros no cartão Ou em 1x no cartão com 10% OFF
                        </p>

                        <div class="flex flex-col sm:flex-row gap-3 sm:gap-2">
                            <a href="finalizar_compra"
                                class="mt-6 bg-dark_blue_gray text-white px-10 sm:px-32 py-3 rounded-md text-xl sm:text-2xl hover:bg-dark font-bold text-center">
                                Comprar
                            </a>
                            <button
                                class="mt-2 sm:mt-6 bg-dark_blue_gray text-white px-6 py-3 rounded-md text-xl hover:bg-dark">
                                <i class="ri-shopping-cart-2-line"></i>
                            </button>
                        </div>
                    </div>

                    {{-- Recommended Products --}}
                    <div>
                        <div class="flex items-center gap-2 mb-3">
                            <i class="ri-price-tag-3-fill text-base_color"></i>
                            <span class="text-gray-400 font-semibold">RELATED PRODUCTS</span>
                        </div>

                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                            @for ($i = 0; $i < 4; $i++)
                                <a href="">
                                    <div class="border p-2 flex flex-col items-center">
                                        <img class="w-24 sm:w-32" src="{{ asset('images/product_example.png') }}"
                                            alt="Product Image" />
                                        <span class="text-base_color font-bold text-sm sm:text-base">R$ 1435,40</span>
                                    </div>
                                </a>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div class="w-10/12 h-px bg-gray-300 mt-6 mb-4 mx-auto"></div>

        {{-- Geral description --}}

        {{-- Description --}}
        <section>
            {{-- Product Description Section --}}
            <div class="px-4 sm:px-6 lg:px-32 py-8">
                <div class="flex items-center gap-2 mb-4">
                    <i class="ri-file-text-fill text-2xl sm:text-3xl text-base_color"></i>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-dark_blue_gray">PRODUCT DESCRIPTION</h2>
                </div>

                <h3 class="text-gray-400 text-xl sm:text-2xl font-bold mb-8">
                    Placa de Vídeo Gigabyte RTX 5060 AERO OC 8G
                </h3>

                <div class="space-y-8">
                    {{-- Description Block --}}
                    @for ($i = 0; $i < 4; $i++)
                        <div>
                            <h4 class="text-lg sm:text-xl font-bold mb-2">Sistema De Refrigeração Windforce</h4>
                            <p class="text-gray-700 leading-relaxed text-sm sm:text-base">
                                O sistema de resfriamento WINDFORCE oferece desempenho térmico excepcional por meio de uma
                                combinação de tecnologias de ponta. Ele conta com gel condutor térmico de nível de servidor,
                                ventoinhas Hawk inovadoras com rotação alternada, tubos de calor de cobre composto, placa de
                                cobre, ventoinhas ativas 3D e resfriamento de tela.
                            </p>
                        </div>
                    @endfor
                </div>
            </div>
        </section>


        <div class="w-10/12 h-px bg-gray-300 mt-6 mb-4 mx-auto"></div>

        {{-- Information --}}
        <section>
            {{-- Technical Information Section --}}
            <div class="px-4 sm:px-6 lg:px-32 py-8">
                <div class="flex items-center gap-2 mb-4">
                    <i class="ri-information-fill text-2xl sm:text-3xl text-base_color"></i>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-dark_blue_gray">TECHNICAL INFORMATION</h2>
                </div>

                <div class="flex flex-col lg:flex-row justify-between gap-8">
                    {{-- Column 1 --}}
                    <ul class="space-y-1 text-sm sm:text-base">
                        <li class="font-bold">Features:</li>
                        <li>- Brand: Gigabyte</li>
                        <li>- Model: GV-N5060AERO OC-8GD</li>

                        <li class="font-bold mt-4">Specifications:</li>
                        <li class="font-bold">Graphics Processing</li>
                        <li>- GeForce RTX™ 5060</li>

                        <li class="font-bold">Core Clock</li>
                        <li>- 2595 MHz (reference card: 2497 MHz)</li>

                        <li class="font-bold">CUDA® Cores</li>
                        <li>- 3840</li>

                        <li class="font-bold">Memory Clock</li>
                        <li>- 28 Gbps</li>

                        <li class="font-bold">Memory Size</li>
                        <li>- 8 GB</li>

                        <li class="font-bold">Memory Type</li>
                        <li>- GDDR7</li>
                    </ul>

                    {{-- Column 2 --}}
                    <ul class="space-y-1 text-sm sm:text-base">
                        <li class="font-bold">Memory Bus</li>
                        <li>- 128 bits</li>

                        <li class="font-bold">Bus Interface</li>
                        <li>- PCI-E 5.0</li>

                        <li class="font-bold">Max Digital Resolution</li>
                        <li>- 7680×4320</li>

                        <li class="font-bold">Multi-View</li>
                        <li>- 4</li>

                        <li class="font-bold">Card Size</li>
                        <li>- L=281 W=117 H=40 mm</li>

                        <li class="font-bold">PCB Form</li>
                        <li>- ATX</li>

                        <li class="font-bold">DirectX</li>
                        <li>- DirectX 12 API</li>

                        <li class="font-bold">OpenGL</li>
                        <li>- 4.6</li>
                    </ul>

                    {{-- Column 3 --}}
                    <ul class="space-y-1 text-sm sm:text-base">
                        <li class="font-bold">Recommended PSU</li>
                        <li>- 500 W</li>

                        <li class="font-bold">Power Connectors</li>
                        <li>- 8-pin ×1</li>

                        <li class="font-bold">Output</li>
                        <li>- DisplayPort 2.1b ×3</li>
                        <li>- HDMI 2.1b ×1</li>

                        <li class="font-bold">Package Contents:</li>
                        <li>- Graphics Card</li>
                        <li>- Quick Guide</li>

                        <li class="font-bold">Warranty:</li>
                        <li>3 years (3 months legal + 33 months extended with manufacturer)</li>

                        <li class="font-bold">Weight:</li>
                        <li>820 grams (gross with packaging)</li>
                    </ul>
                </div>
            </div>
        </section>


        <div class="w-10/12 h-px bg-gray-300 mt-6 mb-4 mx-auto"></div>

        {{-- Questions --}}
        <section>
            {{-- Q&A Section --}}
            <div class="px-4 sm:px-6 lg:px-32 py-8">
                <div class="flex items-center gap-2 mb-4">
                    <i class="ri-question-fill text-2xl sm:text-3xl text-base_color"></i>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-dark_blue_gray">QUESTIONS & ANSWERS</h2>
                </div>

                <h1 class="font-semibold text-base sm:text-lg max-w-full sm:max-w-3xl">
                    Want to talk with other customers who have purchased or are interested in this product? Want to share
                    your
                    opinion and ask questions? Join our Customer Forum. Just <a href="login"
                        class="text-blue_purple hover:underline hover:underline-offset-2">log in!</a>
                </h1>
            </div>
        </section>


        <div class="w-10/12 h-px bg-gray-300 mt-6 mb-4 mx-auto"></div>

        {{-- Most wanted --}}
        <section>
            {{-- Most Searched Section --}}
            <div class="px-4 sm:px-6 lg:px-32 py-8">
                <div class="flex items-center gap-2 mb-10">
                    <i class="ri-crosshair-2-fill text-2xl sm:text-3xl text-base_color"></i>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-dark_blue_gray">MOST SEARCHED</h2>
                </div>

                <div class="flex flex-wrap gap-5 gap-y-8 justify-center">
                    @for ($i = 0; $i < 4; $i++)
                        {{-- Product Card --}}
                        <div class="border border-blue_gray rounded-lg flex flex-col justify-between p-3 w-full sm:w-64">
                            {{-- Top --}}
                            <div class="flex justify-between mb-2">
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
                                <div class="text-gray-500 text-2xl flex gap-4 items-center">
                                    <button class="hover:text-blue_purple">
                                        <i class="ri-shopping-cart-2-line"></i>
                                    </button>
                                    <button class="hover:text-blue_purple">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </div>
                            </div>

                            {{-- Image --}}
                            <div class="mb-4">
                                <img src="{{ asset('images/product_example.png') }}" alt="example" class="w-full">
                            </div>

                            {{-- Product Info --}}
                            <div class="mb-4">
                                <h1 class="font-bold text-sm leading-snug">
                                    Placa de Vídeo Gigabyte RTX 5060 AERO OC 8G NVIDIA GeForce, 8GB GDDR7, 128bits, DLSS,
                                    Triple
                                </h1>
                                <div class="flex flex-col mt-2">
                                    <span class="text-xl text-base_color font-bold">R$ 1.435,50</span>
                                    <span class="text-xs text-gray-500">À vista no Pix<br>ou até 30x no cartão</span>
                                </div>
                            </div>

                            {{-- Buy Button --}}
                            <div class="flex justify-center">
                                <a href="produto"
                                    class="uppercase px-6 py-2 text-sm sm:text-base hover:bg-blue_gray bg-dark_blue_gray text-white font-semibold rounded-lg text-center w-full">
                                    Comprar
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>


    </main>

@endsection
