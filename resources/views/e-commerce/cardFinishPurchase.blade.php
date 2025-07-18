@extends('layouts.layout_ecommerce')

@section('title', 'Pagar com cartão')


@section('content')
    <main>

        <section>
            <div class="mt-6 mb-6 border rounded-md p-4 shadow-sm max-w-3xl mx-auto bg-white">

                <h2 class="text-2xl font-semibold text-dark mb-4">Adicionar Cartão de Crédito</h2>

                <p class="mb-6 text-gray-600 text-sm">
                    Insira os dados do cartão abaixo. Suas informações estão seguras e criptografadas.
                </p>

                <img src="{{ asset('images/creditCard.png') }}" alt="Card" class="w-52">

                {{-- Formulário --}}
                <form method="POST" action="" class="space-y-5">
                    @csrf

                    {{-- Nome do titular --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nome do Titular</label>
                        <input type="text" name="nome_titular" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-base_color focus:border-base_color">
                    </div>

                    {{-- Número do cartão --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Número do Cartão</label>
                        <input type="text" name="numero_cartao" maxlength="19" placeholder="XXXX XXXX XXXX XXXX" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-base_color focus:border-base_color">
                    </div>

                    {{-- Validade e CVV --}}
                    <div class="flex flex-col sm:flex-row gap-4">
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Validade (MM/AA)</label>
                            <input type="text" name="validade" maxlength="5" placeholder="MM/AA" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-base_color focus:border-base_color">
                        </div>
                        <div class="w-full">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Código de Segurança (CVV)</label>
                            <input type="text" name="cvv" maxlength="4" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-base_color focus:border-base_color">
                        </div>
                    </div>

                    {{-- Salvar cartão (opcional) --}}
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="salvar_cartao" id="salvar_cartao" class="accent-base_color">
                        <label for="salvar_cartao" class="text-sm text-gray-700">Salvar este cartão para futuras
                            compras</label>
                    </div>

                    {{-- Botão --}}
                    <div>
                        <button type="submit"
                            class="bg-base_color hover:bg-dark text-white font-medium px-6 py-2 rounded-md transition">
                            Adicionar Cartão
                        </button>
                    </div>
                </form>

                {{-- Instruções de segurança --}}
                <div class="mt-8 bg-gray-100 rounded-md p-4 text-sm text-gray-600">
                    <h3 class="font-semibold text-base_color mb-2">Dicas de Segurança:</h3>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Não compartilhe os dados do seu cartão com terceiros.</li>
                        <li>Verifique se o site está usando HTTPS (cadeado no navegador).</li>
                        <li>Os dados são criptografados e usados apenas para o pagamento.</li>
                    </ul>
                </div>

                {{-- Voltar --}}
                <div class="mt-6">
                    <a href="carrinho" class="text-base_color hover:underline text-sm"><i
                            class="ri-arrow-left-long-line"></i> Voltar ao checkout</a>
                </div>

            </div>

            <div class="mt-6 mb-6 border rounded-md p-4 shadow-sm max-w-3xl mx-auto bg-white flex justify-center gap-2">
                <div><img src="{{ asset('images/visaMasterCard.png') }}" alt="" class="w-32"></div>
                <div><img src="{{ asset('images/paypal.png') }}" alt="" class="w-32"></div>
            </div>
        </section>

    </main>

@endsection
