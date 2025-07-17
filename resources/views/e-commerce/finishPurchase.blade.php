@extends('layouts.layout_ecommerce')

@section('title', 'Finalizar - NeoShop')


@section('content')
    <main>
        {{-- Cart --}}
        <section>

            <div class="mt-6 border rounded-md p-4 shadow-sm max-w-6xl mx-auto">
                <div class="flex items-center gap-2 mb-4 text-dark_blue_gray font-semibold text-base">
                    <i class="ri-wallet-fill text-base_color"></i>
                    <span>FORMA DE PAGAMENTO</span>
                </div>

                <form method="POST">
                    @csrf

                    {{-- Tipos de pagamento --}}
                    <div class="flex flex-col gap-3 text-sm text-dark_blue_gray">

                        <label class="flex items-center gap-3 p-3 border rounded cursor-pointer hover:border-base_color">
                            <input type="radio" name="tipo_pagamento" value="pix"
                                class="accent-base_color appearance-none w-3 h-3 border border-gray-400 rounded-full checked:bg-base_color checked:border-base_color cursor-pointer"
                                checked>
                            <span>Pagar com <strong>PIX</strong> (R$ 1.235,45 à vista)</span>
                        </label>

                        <label class="flex items-center gap-3 p-3 border rounded cursor-pointer hover:border-base_color">
                            <input type="radio" name="tipo_pagamento" value="boleto"
                                class="accent-base_color appearance-none w-3 h-3 border border-gray-400 rounded-full checked:bg-base_color checked:border-base_color cursor-pointer">
                            <span>Pagar com <strong>Boleto Bancário</strong></span>
                        </label>

                        <label class="flex items-center gap-3 p-3 border rounded cursor-pointer hover:border-base_color">
                            <input type="radio" name="tipo_pagamento" value="cartao"
                                class="accent-base_color appearance-none w-3 h-3 border border-gray-400 rounded-full checked:bg-base_color checked:border-base_color cursor-pointer">
                            <span>Pagar com <strong>Cartão de Crédito</strong></span>
                        </label>

                    </div>
                </form>
            </div>

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
                                <a href=""
                                    class="px-20 py-3 bg-dark_blue_gray text-white rounded-md font-bold text-sm hover:bg-base_color transition">
                                    Pagar
                                </a>
                            </div>
                        </div>


                    </div>
                </div>

        </section>

    </main>

@endsection
