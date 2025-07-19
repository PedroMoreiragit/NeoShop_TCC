@extends('layouts.layout_ecommerce')

@section('title', 'Compra Finalizada')

@section('content')
    <main>
        <section>

            <div class="bg-white  flex items-center justify-center p-4 mt-5">
                <div class="bg-blue_gray text-white w-full max-w-2xl rounded-2xl shadow-xl p-6 space-y-8">

                    <div class="text-center">
                        <h2 class="text-2xl font-bold">Meus Métodos de Pagamento</h2>
                        <p class="text-light text-sm mt-1">Gerencie seus cartões e formas de pagamento</p>
                    </div>

                    <img src="{{ asset('images/creditCard.png') }}" alt="Card" class="w-52 flex mx-auto">

                    <div class="space-y-4">
                        <div class="bg-dark_blue_gray rounded-xl p-4 flex items-center justify-between shadow-md">
                            <div class="flex items-center gap-4">
                                <i class="ri-mastercard-line text-3xl text-base_color"></i>
                                <div>
                                    <p class="text-sm font-semibold">Mastercard</p>
                                    <p class="text-light text-xs">**** **** **** 4590</p>
                                </div>
                            </div>
                            <button class="text-red-400 hover:underline text-sm flex items-center gap-1">
                                <i class="ri-delete-bin-line"></i>
                                Remover
                            </button>
                        </div>

                        <div class="bg-dark_blue_gray rounded-xl p-4 flex items-center justify-between shadow-md">
                            <div class="flex items-center gap-4">
                                <i class="ri-visa-line text-3xl text-blue_purple"></i>
                                <div>
                                    <p class="text-sm font-semibold">Visa</p>
                                    <p class="text-light text-xs">**** **** **** 8023</p>
                                </div>
                            </div>
                            <button class="text-red-400 hover:underline text-sm flex items-center gap-1">
                                <i class="ri-delete-bin-line"></i>
                                Remover
                            </button>
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="cartao"
                            class="bg-base_color hover:bg-dark transition text-white font-semibold py-3 rounded-xl w-full flex items-center justify-center gap-2">
                            <i class="ri-add-line text-lg"></i>
                            Adicionar Novo Cartão
                    </a>
                    </div>

                </div>
            </div>

        </section>
    </main>
@endsection
