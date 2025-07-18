@extends('layouts.layout_ecommerce')

@section('title', 'Gerar Boleto')


@section('content')
    <main>

        <section class="p-2">
            <div class="mt-6 mb-6 border rounded-md p-5 shadow-sm max-w-6xl mx-auto">

                <h2 class="text-2xl font-semibold mb-4">Pagamento via Boleto Bancário</h2>

                <p class="mb-4 text-gray-600">
                    Utilize o botão abaixo para visualizar e pagar seu boleto. O pagamento pode levar até 3 dias úteis
                    para ser confirmado.
                </p>

                <div class="mb-4">
                    <a href="{{ $boletoUrl ?? '#' }}" target="_blank"
                        class="inline-block bg-base_color hover:bg-dark text-white px-6 py-2 rounded-md text-sm">
                        Visualizar Boleto
                    </a>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Código de Barras:</label>
                    <div class="flex items-center gap-2">
                        <input type="text" readonly id="ticketCodeInput"
                            value="{{ $linhaDigitavel ?? '23791.11127 60002.123456 56000.123456 1 12340000010000' }}"
                            id="barcodeInput"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm text-gray-800">
                        <button onclick="copyTicket()"
                            class="bg-base_color hover:bg-dark text-white px-4 py-2 rounded-md text-sm">
                            Copiar
                        </button>
                    </div>
                </div>

                <div class="text-sm text-gray-600 mt-4">
                    Após o pagamento, a confirmação pode levar até 72 horas. Fique atento ao seu e-mail e ao painel de
                    pedidos.
                </div>

                <div class="mt-6 flex justify-end">
                    <a href="carrinho" class="text-base_color hover:underline text-sm"> <i
                            class="ri-arrow-left-long-line"></i>
                        Voltar ao checkout</a>
                </div>

            </div>

            <div class="mt-6 mb-6 border rounded-md  shadow-sm max-w-3xl mx-auto bg-white flex justify-center gap-2">
                <div><img src="{{ asset('images/ticket.png') }}" alt="" class="w-20"></div>
            </div>
        </section>

    </main>

@endsection


@section('scripts')
    <script>
        function copyTicket() {
            const input = document.getElementById('ticketCodeInput');

            if (!input) return;

            input.select();
            input.setSelectionRange(0, 99999);

            try {
                const success = document.execCommand('copy');
                if (success) {
                    alert('Código do boleto copiado!');
                } else {
                    alert('Não foi possível copiar o código do boleto.');
                }
            } catch (err) {
                console.error('Erro ao copiar:', err);
                alert('Erro ao copiar o código do boleto.');
            }

            // Remove a seleção
            window.getSelection().removeAllRanges();
        }
    </script>
@endsection
