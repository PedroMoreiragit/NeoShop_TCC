@extends('layouts.layout_ecommerce')

@section('title', 'Compra Finalizada')

@section('content')
    <main>
        <section>
            <div
                class="mt-6 mb-6 border rounded-md p-4 shadow-sm max-w-3xl mx-auto bg-white flex flex-col  text-center justify-center ">
                <h1 class="text-3xl font-semibold text-base_color ">Compra Finalizada com Sucesso!</h1>

                <img src="{{ asset('images/success.gif') }}" alt="" class="w-32 mx-auto">

                <p class="text-gray-700 mb-8">
                    Obrigado pela sua compra! Seu pedido está sendo processado e você receberá um e-mail de confirmação em
                    breve.
                </p>

                <a href="/"
                    class="  bg-base_color hover:bg-dark text-white font-medium px-4 text-center py-3 rounded-md transition mb-5">
                    Voltar para o início
                </a>

                <a href="/"
                    class="text-base_color font-medium text-center  rounded-md transition">
                    Pedidos
                </a>
            </div>
        </section>
    </main>
@endsection
