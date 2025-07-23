@extends('layouts.layout_auth')

@section('title', 'Obriado por criar sua conta')

@section('content')

    <div class="reveal">
        {{-- Logo --}}
        <div class="mb-3 flex justify-center">
            <img class="w-56" src="{{ asset('images/logo.svg') }}" alt="Logo">
        </div>


        <div class="bg-dark_blue_gray p-8 rounded-lg mb-4 text-center">

            <i class="ri-checkbox-circle-fill text-base_color text-6xl mb-4"></i>

            <h1 class="text-2xl font-bold text-white mb-2">Conta Criada com Sucesso!</h1>

            <p class="text-gray-300 mb-6">Obrigado por se registrar na NeoShop. Sua conta foi criada com sucesso e já está pronta para uso.</p>

            <a href="login"
               class="inline-block text-white font-semibold text-xl bg-base_color rounded-lg py-2 px-8 hover:bg-dark transition">
                Fazer Login
            </a>
        </div>


        <div>
            <h2 class="text-gray-500 font-semibold text-sm text-center">Ao continuar, você aceita nossos
                <br> Termos de Uso e Política de Privacidade
            </h2>
        </div>
    </div>

@endsection
