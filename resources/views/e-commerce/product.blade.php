@extends('layouts.layout_ecommerce')

@section('title', 'nome do produto')


@section('content')
    <main>
        <section class="mb-5 py-10">

            <div class="flex justify-between px-10">
                {{-- Galery  Swiper --}}
                <div class="flex flex-col gap-2 items-center justify-center w-5/12">

                    {{-- Swiper --}}
                    <div class="swiperProduct swiper w-full h-96 rounded overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('images/product_example.png') }}" alt="Imagem Produto"
                                    class="w-full h-full object-contain" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('images/product_example.png') }}" alt="Imagem Produto"
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
                <div class="flex flex-col justify-center px-44">
                    <div class="mb-10">
                        <h1 class="font-bold text-3xl mb-5">
                            Placa de Vídeo Gigabyte RTX 5060 AERO OC 8G NVIDIA GeForce, 8GB GDDR7, 128bits, DLSS, Triple
                        </h1>
                        <span class="text-gray-300 line-through text-xl">R$2399,76</span>
                        <span class="text-base_color text-4xl font-bold">R$ 1435,40</span>
                        <p class="mt-4 text-gray-300 text-lg font-bold">À Vista com 10% de desconto no Pix</p>
                        <p class="text-base_color font-semibold">Em até 10x de R$ 316,65 sem juros no cartãoOu em 1x no
                            cartão
                            com 10% OFF</p>

                        <div class="flex gap-2">
                            <a href="finalizar_compra"
                                class="mt-6 bg-dark_blue_gray text-white px-32 py-3 rounded-md text-2xl hover:bg-dark font-bold">
                                COMPRAR
                            </a>
                            <button class="mt-6 bg-dark_blue_gray text-white px-6 py-3 rounded-md text-xl hover:bg-dark">
                                <i class="ri-shopping-cart-2-line"></i>
                            </button>
                        </div>
                    </div>

                    {{-- Recommended --}}
                    <div>
                        <div class="flex gap-2 mb-3">
                            <i class="ri-price-tag-3-fill text-base_color"></i>
                            <span class="text-gray-400 font-semibold">PRODUTOS RELACIONADOS</span>
                        </div>

                        <div class="flex gap-2">

                            {{-- Recommended --}}
                            <a href="">
                                <div class="border p-2 flex flex-col items-center">
                                    <img class="w-32" src="{{ asset('images/product_example.png') }}"
                                        alt="Imagem Produto" />
                                    <span class="text-base_color font-bold">R$ 1435,40</span>
                                </div>
                            </a>

                            {{-- Recommended --}}
                            <a href="">
                                <div class="border p-2 flex flex-col items-center">
                                    <img class="w-32" src="{{ asset('images/product_example.png') }}"
                                        alt="Imagem Produto" />
                                    <span class="text-base_color font-bold">R$ 1435,40</span>
                                </div>
                            </a>
                            {{-- Recommended --}}
                            <a href="">
                                <div class="border p-2 flex flex-col items-center">
                                    <img class="w-32" src="{{ asset('images/product_example.png') }}"
                                        alt="Imagem Produto" />
                                    <span class="text-base_color font-bold">R$ 1435,40</span>
                                </div>
                            </a>

                            {{-- Recommended --}}
                            <a href="">
                                <div class="border p-2 flex flex-col items-center">
                                    <img class="w-32" src="{{ asset('images/product_example.png') }}"
                                        alt="Imagem Produto" />
                                    <span class="text-base_color font-bold">R$ 1435,40</span>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>


            </div>
        </section>


        <div class="w-10/12 h-px bg-gray-300 mt-6 mb-4 mx-auto"></div>

        {{-- Geral description --}}

        {{-- Description --}}
        <section>
            <div class="px-32 py-8">
                <div class="flex items-center gap-2 mb-4">
                    <i class="ri-file-text-fill text-3xl text-base_color"></i>
                    <h2 class="text-3xl font-extrabold text-dark_blue_gray">DESCRIÇÃO DO PRODUTO</h2>
                </div>

                <h3 class="text-gray-400 text-2xl font-bold mb-8">
                    Placa de Vídeo Gigabyte RTX 5060 AERO OC 8G
                </h3>

                <div class="space-y-8">
                    <div>
                        <h4 class="text-xl font-bold mb-2">Sistema De Refrigeração Windforce</h4>
                        <p class="text-gray-700 leading-relaxed">
                            O sistema de resfriamento WINDFORCE oferece desempenho térmico excepcional por meio de uma
                            combinação
                            de tecnologias de ponta. Ele conta com gel condutor térmico de nível de servidor, ventoinhas
                            Hawk
                            inovadoras com rotação alternada, tubos de calor de cobre composto, placa de cobre, ventoinhas
                            ativas
                            3D e resfriamento de tela.
                        </p>
                    </div>

                    <div>
                        <h4 class="text-xl font-bold mb-2">Sistema De Refrigeração Windforce</h4>
                        <p class="text-gray-700 leading-relaxed">
                            O sistema de resfriamento WINDFORCE oferece desempenho térmico excepcional por meio de uma
                            combinação
                            de tecnologias de ponta. Ele conta com gel condutor térmico de nível de servidor, ventoinhas
                            Hawk
                            inovadoras com rotação alternada, tubos de calor de cobre composto, placa de cobre, ventoinhas
                            ativas
                            3D e resfriamento de tela.
                        </p>
                    </div>

                    <div>
                        <h4 class="text-xl font-bold mb-2">Sistema De Refrigeração Windforce</h4>
                        <p class="text-gray-700 leading-relaxed">
                            O sistema de resfriamento WINDFORCE oferece desempenho térmico excepcional por meio de uma
                            combinação
                            de tecnologias de ponta. Ele conta com gel condutor térmico de nível de servidor, ventoinhas
                            Hawk
                            inovadoras com rotação alternada, tubos de calor de cobre composto, placa de cobre, ventoinhas
                            ativas
                            3D e resfriamento de tela.
                        </p>
                    </div>

                    <div>
                        <h4 class="text-xl font-bold mb-2">Sistema De Refrigeração Windforce</h4>
                        <p class="text-gray-700 leading-relaxed">
                            O sistema de resfriamento WINDFORCE oferece desempenho térmico excepcional por meio de uma
                            combinação
                            de tecnologias de ponta. Ele conta com gel condutor térmico de nível de servidor, ventoinhas
                            Hawk
                            inovadoras com rotação alternada, tubos de calor de cobre composto, placa de cobre, ventoinhas
                            ativas
                            3D e resfriamento de tela.
                        </p>
                    </div>
                </div>
            </div>

        </section>

        <div class="w-10/12 h-px bg-gray-300 mt-6 mb-4 mx-auto"></div>

        {{-- Information --}}
        <section>
            <div class="px-32 py-8">
                <div class="flex items-center gap-2 mb-4">
                    <i class="ri-information-fill text-3xl text-base_color"></i>
                    <h2 class="text-3xl font-extrabold text-dark_blue_gray">INFORMAÇÕES TECNICAS</h2>
                </div>

                <div class="flex justify-between">
                    <ul class="space-y-1">
                        <li class="font-bold">Características:</li>
                        <li>- Marca: Gigabyte</li>
                        <li>- Modelo: GV-N5060AERO OC-8GD</li>
                        <li class="font-bold mt-4">Especificações:</li>
                        <li class="font-bold">Processamento Gráfico</li>
                        <li>- GeForce RTX™ 5060</li>
                        <li class="font-bold">Relógio central</li>
                        <li>- 2595 MHz (placa de referência: 2497 MHz)</li>
                        <li class="font-bold">Núcleos CUDA®</li>
                        <li>- 3840</li>
                        <li class="font-bold">Relógio de memória</li>
                        <li>- 28 Gbps</li>
                        <li class="font-bold">Tamanho da memória</li>
                        <li>- 8 GB</li>
                        <li class="font-bold">Tipo de memória</li>
                        <li>- GDDR7</li>
                    </ul>

                    <ul class="space-y-1">
                        <li class="font-bold">Barramento de memória</li>
                        <li>- 128 bits</li>
                        <li class="font-bold">Ônibus de cartas</li>
                        <li>- PCI-E 5.0</li>
                        <li class="font-bold">Resolução máxima digital</li>
                        <li>- 7680×4320</li>
                        <li class="font-bold">Multivisualização</li>
                        <li>- 4</li>
                        <li class="font-bold">Tamanho do cartão</li>
                        <li>- C=281 L=117 A=40</li>
                        <li class="font-bold">Formulário PCB</li>
                        <li>- ATX</li>
                        <li class="font-bold">DirectX</li>
                        <li>- API do DirectX 12</li>
                        <li class="font-bold">OpenGL</li>
                        <li>- 4.6</li>
                    </ul>

                    <ul class="space-y-1">
                        <li class="font-bold">Fonte de alimentação recomendada</li>
                        <li>- 500 W</li>
                        <li class="font-bold">Conectores de energia</li>
                        <li>- 8 pinos *1</li>
                        <li class="font-bold">Saída</li>
                        <li>- Porta de exibição 2.1b *3</li>
                        <li>- HDMI 2.1b *1</li>
                        <li class="font-bold">Conteúdo da Embalagem:</li>
                        <li>- Placa de Vídeo</li>
                        <li>- Guia rápido</li>
                        <li class="font-bold">Garantia:</li>
                        <li>3 anos de garantia (3 meses de garantia legal + 33 meses de garantia contratual junto ao
                            fabricante)</li>
                        <li class="font-bold">Peso:</li>
                        <li>820 gramas (bruto com embalagem)</li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="w-10/12 h-px bg-gray-300 mt-6 mb-4 mx-auto"></div>

        {{-- Questions --}}
        <section>
            <div class="px-32 py-8">
                <div class="flex items-center gap-2 mb-4">
                    <i class="ri-question-fill text-3xl text-base_color"></i>
                    <h2 class="text-3xl font-extrabold text-dark_blue_gray">PERGUNTAS E RESPOSTAS</h2>
                </div>

                <h1 class="font-semibold text-lg w-9/12">Quer conversar com outros clientes que já compraram ou têm
                    interesse
                    neste produto? Deseja compartilhar
                    a sua opinião e tirar dúvidas? Participe do nosso Fórum de Clientes. Basta <a href="login"
                        class="text-blue_purple hover:underline hover:underline-offset-2""> fazer seu login!</a></h1>

            </div>
        </section>

        <div class="w-10/12 h-px bg-gray-300 mt-6 mb-4 mx-auto"></div>

        {{-- Most wanted --}}
        <section>
            <div class="px-32 py-8">
                <div class="flex items-center gap-2 mb-10">
                    <i class="ri-crosshair-2-fill text-3xl text-base_color"></i>
                    <h2 class="text-3xl font-extrabold text-dark_blue_gray">MAIS PROCURADOS</h2>
                </div>

                <div class="flex gap-5">

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
