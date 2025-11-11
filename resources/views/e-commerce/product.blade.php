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
                            @foreach ($images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . ltrim($image, '/')) }}" alt="{{ $product->name }}"
                                        class="w-full h-full object-contain" />
                                </div>
                            @endforeach
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
                            {{ $product->name }}
                        </h1>
                        <span class="text-base_color text-3xl sm:text-4xl font-bold price">R$ {{ $product->price }}</span>
                        <p class="mt-4 text-gray-300 text-base sm:text-lg font-bold">À Vista com 10% de desconto no Pix</p>
                        <p id="installmentText" class="text-base_color font-semibold text-sm sm:text-base">
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
                            <span class="text-gray-400 font-semibold">PRODUTOS RELACIONADOS</span>
                        </div>

                        @if ($relatedProducts->isNotEmpty())
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                @foreach ($relatedProducts as $related)
                                    <a href="{{ url('product', Str::slug($related->name)) }}">
                                        <div
                                            class="border border-blue_gray p-3 flex flex-col items-center rounded-md hover:shadow-lg transition">
                                            <img class="w-24 sm:w-32 object-contain mb-2"
                                                src="{{ Storage::url($related->image_path) }}" alt="{{ $related->name }}" />
                                            <span class="text-base_color font-bold text-sm sm:text-base">
                                                R$ {{ number_format($related->price, 2, ',', '.') }}
                                            </span>
                                            <p class="text-center text-gray-500 text-xs mt-1 truncate max-w-[100px]">
                                                {{ $related->name }}
                                            </p>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @else
                            <div class="text-gray-400 text-center py-6 font-medium">
                                😔 Nenhum produto relacionado encontrado no momento.<br>
                                <span class="text-base_color">Explore nossas outras categorias!</span>
                            </div>
                        @endif
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
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-dark_blue_gray">Descrição do Produto</h2>
                </div>

                <h3 class="text-gray-400 text-xl sm:text-2xl font-bold mb-8">
                    {{ $product->name }}
                </h3>

                <div class="space-y-8">
                    {{-- Description Block --}}
                    <div>
                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">
                            {{ $product->long_description }}
                        </p>
                    </div>
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
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-dark_blue_gray">Informações Técnicas</h2>
                </div>
                <ul class="text-gray-700 leading-relaxed text-sm sm:text-base list-disc pl-6">
                    @foreach ($product->technical_info as $info)
                        <li>{{ $info }}</li>
                    @endforeach
                </ul>
            </div>
        </section>


        <div class="w-10/12 h-px bg-gray-300 mt-6 mb-4 mx-auto"></div>

        {{-- Questions --}}
        <section>
            {{-- Q&A Section --}}
            <div class="px-4 sm:px-6 lg:px-32 py-8">
                <div class="flex items-center gap-2 mb-4">
                    <i class="ri-question-fill text-2xl sm:text-3xl text-base_color"></i>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-dark_blue_gray">Perguntas e Respostas</h2>
                </div>

                <h1 class="font-semibold text-base sm:text-lg max-w-full sm:max-w-3xl">
                    Quer conversar com outros clientes que compraram ou têm interesse neste produto? Quer compartilhar sua
                    opinião e fazer perguntas? Junte-se ao nosso Fórum de Clientes. <a href="login"
                        class="text-blue_purple hover:underline hover:underline-offset-2">logar</a>
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
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-dark_blue_gray">Mais Pesquisados</h2>
                </div>

                <div class="flex flex-wrap gap-5 gap-y-8 justify-center">
                    @foreach ($products as $product)
                        <div
                            class="border border-blue_gray rounded-lg flex flex-col justify-between p-4 w-72 shadow-sm hover:shadow-md transition">
                            {{-- Top --}}
                            <div class="flex justify-between items-center mb-2">
                                {{-- Stars --}}
                                <div class="flex text-gray-500">
                                    @for ($i = 0; $i < 5; $i++)
                                        <i class="ri-star-line"></i>
                                    @endfor
                                </div>

                                {{-- Favorite and Cart --}}
                                <div class="text-gray-500 text-xl flex gap-4 items-center">
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
                                class="w-full h-64 flex items-center justify-center overflow-hidden rounded-lg bg-gray-100 mb-4">
                                <img src="{{ Storage::url($product->image_path) }}" alt="{{ $product->name }}"
                                    class="w-full h-full object-cover">
                            </div>

                            {{-- Bottom --}}
                            <div class="flex flex-col gap-1 mb-4">
                                <h1 class="font-bold text-base_color truncate">{{ $product->name }}</h1>
                                <span class=" price text-xl text-base_color font-bold">R$ {{ $product->price }}</span>
                                <span class="text-xs text-gray-500 leading-tight">
                                    À vista no Pix <br> ou até 30x no cartão
                                </span>
                            </div>

                            {{-- Button --}}
                            <div class="flex justify-center">
                                <a href="{{ url('product', Str::slug($product->name)) }}"
                                    class="uppercase px-16 py-2 bg-dark_blue_gray hover:bg-blue_purple text-white font-semibold rounded-lg transition">
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

            prices.forEach(priceElement => {
                // Pega o texto e remove tudo que não for número, vírgula ou ponto
                const cleanText = priceElement.textContent.replace(/[^\d.,]/g, '').replace(',', '.');
                const value = parseFloat(cleanText);

                if (!isNaN(value)) {
                    priceElement.textContent = value.toLocaleString('pt-BR', {
                        style: 'currency',
                        currency: 'BRL'
                    });
                }
            });
        });
    </script>
    <script>
        // Suponha que o valor do produto venha do Blade
        const productPrice = {{ $product->price }}; // exemplo: 3166.50

        // Calcula parcelas (10x sem juros)
        const installmentCount = 10;
        const installmentValue = (productPrice / installmentCount).toFixed(2);

        // Calcula valor à vista com 10% de desconto
        const discount = 0.10;
        const priceWithDiscount = (productPrice * (1 - discount)).toFixed(2);

        // Formata para R$ corretamente
        const formatCurrency = (value) => {
            return value.toLocaleString('pt-BR', {
                style: 'currency',
                currency: 'BRL'
            });
        };

        // Monta o texto final
        document.getElementById('installmentText').innerText =
            `Em até ${installmentCount}x de ${formatCurrency(installmentValue)} sem juros no cartão ` +
            `Ou em 1x no cartão com 10% OFF (${formatCurrency(priceWithDiscount)})`;
    </script>

@endsection
