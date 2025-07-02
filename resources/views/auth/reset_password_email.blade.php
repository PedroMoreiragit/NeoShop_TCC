@extends('layouts.layout_auth')

@section('title', 'Recuperar senha - NeoShop')


@section('content')

    <div class="reveal">
        {{-- Logo --}}
        <div class="mb-3 flex justify-center">
            <img class="w-56" src="{{ asset('images/logo.svg') }}" alt="Logo">
        </div>

        {{-- Login Card --}}
        <div class="bg-dark_blue_gray p-8 rounded-lg mb-4">
            {{-- Title  --}}
            <div class="text-white text-center mb-10">
                <h1 class="text-2xl font-bold mb-2">Recuperação de senha</h1>
                <span class="text-gray-500">Digite seu e-mail para receber o link de <br> recuperação </span>
            </div>


            {{-- Form --}}
            <form action="" method="post">
                @csrf
                <div class="flex flex-col gap-10 mb-10">
                    {{-- Email  --}}
                    <div class="border-b pb-2  flex gap-2 font-semibold">
                        <i class="ri-mail-line text-white font-sm"></i>
                        <input type="text" placeholder="E-mail"
                            class="bg-transparent placeholder-white text-white w-full focus:outline-none font-sm">
                    </div>
                </div>

                {{-- Button --}}
                <div class="text-center mb-6">
                    <button
                        class="text-white font-semibold text-xl bg-base_color rounded-lg py-2 w-full hover:bg-dark">Enviar</button>
                </div>
            </form>
            {{-- Recognize --}}
            <div>
                <h2 class="text-white font-semibold text-sm text-center">Lembrou a senha?
                    <a href="login" class="text-blue_purple">Voltar ao login</a>
                </h2>
            </div>
        </div>

        {{-- Terms and conditionals --}}
        <div>
            <h2 class="text-gray-500 font-semibold text-sm text-center">Ao continuar, você aceita nossos
                <br> Termos de Uso e Política de Privacidade
            </h2>
        </div>
    </div>

@endsection
