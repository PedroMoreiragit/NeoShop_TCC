@extends('layouts.layout_ecommerce')

@section('title', 'Erro')

@section('content')
    <main>
        <section class=" py-20 px-4 sm:px-6 lg:px-32 text-center flex flex-col items-center justify-center">
            {{-- Error Icon --}}
            <i class="ri-error-warning-fill text-base_color text-6xl mb-6"></i>

            {{-- Title --}}
            <h1 class="text-3xl sm:text-4xl font-extrabold text-dark_blue_gray mb-4">Oops! Algo deu errado.</h1>

            {{-- Description --}}
            <p class="text-base sm:text-lg text-gray-600 mb-8 max-w-xl">
                Parece que houve um problema ao processar sua solicitação. Tente novamente mais tarde ou entre em contato
                com nosso suporte.
            </p>

            {{-- Action Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ url('/') }}"
                    class="px-6 py-3 bg-base_color text-white font-semibold rounded-lg hover:bg-opacity-90 transition">
                    Voltar à página inicial
                </a>

                <a href="{{ url('/contato') }}"
                    class="px-6 py-3 bg-transparent border border-base_color text-base_color font-semibold rounded-lg hover:bg-base_color hover:text-white transition">
                    Contatar Suporte
                </a>
            </div>
        </section>

    </main>
@endsection
