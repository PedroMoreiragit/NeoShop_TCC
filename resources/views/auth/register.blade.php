@extends('layouts.layout_auth')

@section('title', 'Registro - NeoShop')


@section('content')

    <div id="toast-container" class="fixed top-5 right-5 space-y-2 z-50">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div
                    class="toast relative px-4 py-2 bg-red-100 border border-red-300 text-red-600 rounded-lg shadow-md overflow-hidden">
                    {{ $error }}
                    <div class="progress-bar absolute bottom-0 left-0 h-1 bg-red-400 w-full"></div>
                </div>
            @endforeach
        @endif
    </div>

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
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="flex flex-col gap-10 mb-10">

                    {{-- Name  --}}
                    <div class="border-b pb-2 flex gap-2 font-semibold">
                        <i class="ri-user-line text-white font-sm"></i>
                        <input type="text" name="name" placeholder="Nome completo" value="{{ old('name') }}"
                            class="bg-transparent placeholder-white text-white w-full focus:outline-none font-sm">
                    </div>

                    {{-- Email  --}}
                    <div class="border-b pb-2  flex gap-2 font-semibold">
                        <i class="ri-mail-line text-white font-sm"></i>
                        <input type="text" name="email" placeholder="E-mail" value="{{ old('name') }}"
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

                    {{-- Password Confirmation  --}}
                    <div class="border-b pb-2 flex gap-2 font-semibold">
                        <i class="ri-shield-line text-white text-sm"></i>
                        <input type="password" name="password_confirmation" placeholder="Confirmar senha"
                            class="bg-transparent placeholder-white text-white w-full focus:outline-none font-sm">
                    </div>
                </div>

                {{-- Button --}}
                <div class="text-center mb-6">
                    <button
                        class="text-white font-semibold text-xl bg-base_color rounded-lg py-2 w-full hover:bg-dark">Cadastrar-se</button>
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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toasts = document.querySelectorAll('.toast');
            toasts.forEach((toast) => {
                setTimeout(() => {
                    toast.classList.add('opacity-0', 'transition', 'duration-500');
                    setTimeout(() => toast.remove(), 500);
                }, 7000);
            });
        });
    </script>

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
