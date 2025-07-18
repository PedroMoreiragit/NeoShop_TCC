@extends('layouts.layout_ecommerce')

@section('title', 'Gerar Código Pix')


@section('content')
    <main>
        {{-- Cart --}}
        <section>

            <div class="mt-6 mb-6 border rounded-md p-4 shadow-sm max-w-6xl mx-auto">

                <h2 class="text-2xl font-semibold mb-4">Pagamento via Pix</h2>

                <p class="mb-4 text-gray-600">
                    Gere o código Pix abaixo para finalizar sua compra. O pagamento é confirmado automaticamente após a
                    transação.
                </p>

                <div class="bg-gray-100 rounded-md p-4 flex flex-col gap-4">

                    <div class="flex justify-center">
                        <img src="{{ asset('images/qr_code.png') }}" alt="QR Code Pix" class="w-56 h-56">
                    </div>


                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Código Copia e Cola:</label>
                        <div class="flex items-center gap-2">
                            <input type="text" readonly value="{{ $pixCode ?? '000201010212...' }}" id="pixCodeInput"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm text-gray-800">
                            <button onclick="copyPixCode()"
                                class="bg-base_color hover:bg-dark text-white px-4 py-2 rounded-md text-sm">
                                Copiar
                            </button>
                        </div>
                    </div>

                    <div class="text-sm text-gray-600 mt-2">
                        Após realizar o pagamento, ele será identificado automaticamente em até 2 minutos.
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <a href="carrinho" class="text-base_color hover:underline text-sm"><i
                            class="ri-arrow-left-long-line"></i> Voltar ao checkout</a>
                </div>
            </div>

            <div class="mt-6 mb-6 border rounded-md p-4 shadow-sm max-w-3xl mx-auto bg-white flex justify-center gap-2">
                <div><img src="{{ asset('images/pix.png') }}" alt="" class="w-32"></div>
            </div>

        </section>

    </main>

@endsection

@section('scripts')
    <script>
        function copyPixCode() {
            const input = document.getElementById('pixCodeInput');

            if (!input) return;


            input.select();
            input.setSelectionRange(0, 99999);

            try {
                const success = document.execCommand('copy');
                if (success) {
                    alert('Código Pix copiado!');
                } else {
                    alert('Não foi possível copiar o código Pix.');
                }
            } catch (err) {
                console.error('Erro ao copiar:', err);
                alert('Erro ao copiar o código Pix.');
            }

            // Remove a seleção
            window.getSelection().removeAllRanges();
        }
    </script>

@endsection
