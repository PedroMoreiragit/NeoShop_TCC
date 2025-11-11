@extends('layouts.layout_auth')

@section('title', 'Login - NeoShop')


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
                <h1 class="text-2xl font-bold mb-2">Seja Bem-Vindo de Volta</h1>
                <span class="text-gray-500">Entre com seu e-mail e senha</span>
            </div>


            {{-- Form --}}
            <form action="login" method="post">
                @csrf
                <div class="flex flex-col gap-10 mb-4">
                    {{-- Email  --}}
                    <div class="border-b pb-2  flex gap-2 font-semibold">
                        <i class="ri-mail-line text-white font-sm"></i>
                        <input type="email" placeholder="E-mail" value="{{ old('email') }}" name="email"
                            class="bg-transparent placeholder-white text-white w-full focus:outline-none font-sm">
                    </div>

                    {{-- Password --}}
                    <div class="border-b pb-2 flex items-center font-semibold relative">
                        <i class="ri-lock-line text-white text-sm mr-2"></i>

                        <!-- Container para o input e o botão -->
                        <div class="relative w-full">
                            <input id="password" type="password" placeholder="Senha" name="password"
                                class="bg-transparent placeholder-white text-white w-full focus:outline-none font-sm pr-8">

                            <!-- Botão do olho -->
                            <button type="button" id="togglePassword"
                                class="absolute right-0 top-1/2 -translate-y-1/2 text-white hover:text-gray-300 focus:outline-none">
                                <i id="eyeIcon" class="ri-eye-off-line text-lg"></i>
                            </button>
                        </div>
                    </div>

                </div>

                {{-- Resset Password --}}
                <div class="mb-10">
                    <h2 class="text-white font-semibold text-sm">Esqueceu sua senha?
                        <a href="recuperacao_de_senha" class="text-blue_purple">Redefinir Senha</a>
                    </h2>
                </div>

                {{-- Button --}}
                <div class="text-center mb-6">
                    <button
                        class="text-white font-semibold text-xl bg-base_color rounded-lg py-2 w-full hover:bg-dark">Login</button>
                </div>
            </form>
            {{-- Register --}}
            <div>
                <h2 class="text-white font-semibold text-sm text-center">Ainda não tem registro?
                    <a href="register" class="text-blue_purple">Cadastre-se</a>
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



    {{-- Eye password --}}
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', () => {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            eyeIcon.classList.toggle('ri-eye-off-line');
            eyeIcon.classList.toggle('ri-eye-line');
        });
    </script>

@endsection
