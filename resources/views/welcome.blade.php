<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{-- Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Remixed Icons --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="flex flex-col items-center justify-center min-h-screen bg-grid">

        {{-- Logo --}}
        <div class="mb-3 flex justify-center">
            <img class="w-56" src="{{ asset('images/Logo.svg') }}" alt="Logo">
        </div>

        {{-- Login Card --}}
        <div class="bg-dark_blue_gray p-8 rounded-lg mb-4">
            {{-- Title  --}}
            <div class="text-white text-center mb-10">
                <h1 class="text-2xl font-bold mb-2">Seja Bem-Vindo de Volta</h1>
                <span class="text-gray-500">Entre com seu e-mail e senha</span>
            </div>


            {{-- Form --}}
            <div class="flex flex-col gap-10 mb-4">
                {{-- Email  --}}
                <div class="border-b pb-2  flex gap-2 font-semibold">
                    <i class="ri-mail-line text-white font-sm"></i>
                    <input type="text" placeholder="E-mail"
                        class="bg-transparent placeholder-white text-white w-full focus:outline-none font-sm">
                </div>

                {{-- Password  --}}
                <div class="border-b pb-2 flex gap-2 font-semibold">
                    <i class="ri-lock-line text-white text-sm"></i>
                    <input type="text" placeholder="Password"
                        class="bg-transparent placeholder-white text-white w-full focus:outline-none font-sm">
                </div>
            </div>

            {{-- Resset Password --}}
            <div class="mb-10">
                <h2 class="text-white font-semibold text-sm">Esqueceu sua senha?
                    <a href="" class="text-blue_purple">Redefinir Senha</a>
                </h2>
            </div>

            {{-- Button --}}
            <div class="text-center mb-6">
                <button class="text-white font-semibold text-xl bg-base rounded-lg py-2 w-full hover:bg-dark">Login</button>
            </div>

            {{-- Register --}}
            <div>
                <h2 class="text-white font-semibold text-sm text-center">Ainda não tem registro?
                    <a href="" class="text-blue_purple">Cadastre-se</a>
                </h2>
            </div>
        </div>

        {{-- Terms and conditionals --}}
        <div>
            <h2 class="text-gray-500 font-semibold text-sm text-center">Ao continuar, você aceita nossos
                <br> Termos de Uso e Política de Privacidade
            </h2>
        </div>

</body>

</html>
