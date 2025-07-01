@extends('layouts.layout_auth')

@section('title', 'Registro - NeoShop')


@section('content')

    <div class="reveal">
        {{-- Logo --}}
        <div class="mb-3 flex justify-center">
            <img class="w-56" src="{{ asset('images/logo.svg') }}" alt="Logo">
        </div>

        {{-- Login Card --}}
        <div class="bg-dark_blue_gray p-8 rounded-lg mb-4">
            {{-- Title  --}}
            <div class="text-white text-center mb-10 ">
                <h1 class="text-2xl font-bold mb-2">Cadastre-se</h1>
                <span class="text-gray-500">Preencha os dados abaixo para continuar</span>
            </div>
            {{-- Form --}}
            <form action="" method="post">
                @csrf
                <div class="flex flex-col gap-10 mb-10">

                    {{-- Name  --}}
                    <div class="border-b pb-2 flex gap-2 font-semibold">
                        <i class="ri-user-line text-white font-sm"></i>
                        <input type="text" placeholder="Nome completo"
                            class="bg-transparent placeholder-white text-white w-full focus:outline-none font-sm" required>
                    </div>

                    {{-- Email  --}}
                    <div class="border-b pb-2  flex gap-2 font-semibold">
                        <i class="ri-mail-line text-white font-sm"></i>
                        <input type="text" placeholder="E-mail"
                            class="bg-transparent placeholder-white text-white w-full focus:outline-none font-sm" required>
                    </div>

                    {{-- Password  --}}
                    <div class="border-b pb-2 flex gap-2 font-semibold">
                        <i class="ri-lock-line text-white text-sm"></i>
                        <input type="password" placeholder="Senha"
                            class="bg-transparent placeholder-white text-white w-full focus:outline-none font-sm" required>
                    </div>

                    {{-- Password Confirmation  --}}
                    <div class="border-b pb-2 flex gap-2 font-semibold">
                        <i class="ri-shield-line text-white text-sm"></i>
                        <input type="password" placeholder="Confirmar senha"
                            class="bg-transparent placeholder-white text-white w-full focus:outline-none font-sm" required>
                    </div>
                </div>

                {{-- Button --}}
                <div class="text-center mb-6">
                    <button
                        class="text-white font-semibold text-xl bg-base rounded-lg py-2 w-full hover:bg-dark">Cadastrar-se</button>
                </div>
            </form>
            {{-- Register --}}
            <div>
                <h2 class="text-white font-semibold text-sm text-center">Já tem uma conta?
                    <a href="login" class="text-blue_purple">Entre</a>
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
