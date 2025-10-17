@extends('layouts.layout_ecommerce')

@section('title', 'Conta - Neoshop')

@section('content')
    <main>
        <section>
            <div class="bg-white min-h-screen flex items-center justify-center p-4">
                <div class="bg-blue_gray text-white w-full max-w-2xl rounded-2xl shadow-xl p-6 space-y-8">

                    <div class="flex flex-col items-center gap-3">
                        <div
                            class="w-24 h-24 bg-base_color rounded-full flex items-center justify-center text-3xl font-bold shadow-lg">
                            P
                        </div>
                        <h2 class="text-2xl font-bold">{{ auth()->user()->name }}</h2>
                        <p class="text-light text-sm">{{ auth()->user()->email }}</p>
                        <button class="text-sm text-base_color hover:underline">Editar Perfil</button>
                    </div>

                    <div class="bg-dark_blue_gray p-5 rounded-2xl shadow-md space-y-3">
                        <h3 class="text-lg font-semibold flex items-center gap-2">
                            <i class="ri-user-3-line text-base_color text-xl"></i>
                            Informações Pessoais
                        </h3>
                        <div class="text-sm text-light">
                            <p><strong>Telefone:</strong> (11) 91234-5678</p>
                            <p><strong>CPF:</strong> 123.456.789-00</p>
                        </div>
                    </div>

                    <div class="bg-dark_blue_gray p-5 rounded-2xl shadow-md space-y-2">
                        <h3 class="text-lg font-semibold flex items-center gap-2">
                            <i class="ri-map-pin-line text-base_color text-xl"></i>
                            Endereço
                        </h3>
                        <p class="text-sm text-light">Rua Exemplo, 123 - Centro</p>
                        <p class="text-sm text-light">São Paulo - SP, 01000-000</p>
                        <button class="text-sm text-base_color hover:underline mt-1">Editar Endereço</button>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @customer
                            <a href="recuperacao_de_senha"
                                class="bg-base_color hover:bg-dark transition text-white font-semibold py-3 rounded-xl w-full flex items-center justify-center gap-2">
                                <i class="ri-lock-password-line text-lg"></i>
                                Alterar Senha
                            </a>
                            <a href="metodos_de_pagameto"
                                class="bg-base_color hover:bg-dark transition text-white font-semibold py-3 rounded-xl w-full flex items-center justify-center gap-2">
                                <i class="ri-bank-card-line text-lg"></i>
                                Métodos
                            </a>
                        @endcustomer

                        @admin
                        <a href="{{ route('dashboard') }}"
                            class="bg-indigo-600 hover:bg-indigo-700 transition text-white font-semibold py-3 rounded-xl w-full col-span-full flex items-center justify-center gap-2">
                            <i class="ri-dashboard-line text-lg"></i>
                            Entrar na Dashboard
                        </a>
                        @endadmin


                        <a href="{{ route('logout') }}"
                            class="bg-red-500 hover:bg-red-600 transition text-white font-semibold py-3 rounded-xl w-full col-span-full flex items-center justify-center gap-2">
                            <i class="ri-logout-box-line text-lg"></i>
                            Sair da Conta
                        </a>
                    </div>

                </div>
            </div>

        </section>
    </main>
@endsection
