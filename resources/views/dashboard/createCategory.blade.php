@extends('layouts.layout_dashboard')

@section('title', 'Adicionar Categoria')

@section('content')
    <div class="max-w-2xl mx-auto bg-dark_blue_gray rounded-2xl shadow-lg p-8 border border-gray-700">

        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-base_color">Criar Categoria</h1>

            <a href="{{ url('categories') }}"
                class="flex items-center gap-2 bg-blue_gray border border-gray-600 text-light px-4 py-2 rounded-lg hover:bg-base_color hover:text-white transition-all duration-200">
                <i class="ri-arrow-go-back-line"></i>
                Voltar
            </a>
        </div>

        <form action="{{ route('create-category') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Nome da Categoria</label>
                <input type="text" id="name" name="name"
                    class="w-full bg-blue_gray border border-gray-600 rounded-xl p-3 text-white placeholder-gray-500
                    focus:ring-2 focus:ring-base_color focus:border-base_color outline-none transition-all duration-200"
                    placeholder="Ex: Eletrônicos, Moda, Livros..." required>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit"
                    class="bg-base_color text-white font-bold px-8 py-3 rounded-xl hover:bg-blue_purple transform hover:scale-105 transition duration-200">
                    Salvar Categoria
                </button>
        </form>
    </div>
@endsection
