@extends('layouts.layout_dashboard')

@section('title', 'Produtos')

@section('content')
    <div class="max-w-7xl mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-base_color">Produtos</h1>

            <a href="{{ url('create-product') }}"
                class="bg-base_color text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue_purple transition duration-200 flex items-center gap-2">
                <i class="ri-add-line text-lg"></i>
                Novo Produto
            </a>
        </div>

        <div class="bg-blue_gray rounded-xl shadow-md p-6">
            @if ($products->isEmpty())
                <div class="text-gray-400 text-center py-10">
                    Nenhum produto cadastrado ainda.
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach ($products as $product)
                        <div
                            class="bg-dark_blue_gray/70 hover:bg-dark_blue_gray p-4 rounded-xl transition duration-200 shadow-lg flex flex-col justify-between">

                            {{-- Imagem do produto --}}
                            <div class="flex items-center gap-4 mb-3">
                                <img src="{{ Storage::url($product->image_path) }}" alt="{{ $product->name }}"
                                    class="w-20 h-20 object-cover rounded-lg shadow-md">

                                <div>
                                    <h2 class="text-white font-semibold text-lg leading-tight">{{ $product->name }}</h2>
                                    <p class="text-gray-400 text-sm">Estoque: {{ $product->stock }}</p>
                                </div>
                            </div>

                            {{-- Descrição curta --}}
                            <p class="text-gray-400 text-sm mb-2 truncate">{{ $product->short_desc }}</p>

                            {{-- Preço e categoria --}}
                            <div class="flex items-center justify-between mt-auto">
                                <span class="text-base_color font-bold text-md">
                                    R$ {{ number_format($product->price, 2, ',', '.') }}
                                </span>
                                <span class="text-gray-300 text-xs bg-blue_purple/20 px-2 py-0.5 rounded-md">
                                    {{ $product->category ? $product->category->name : 'Sem categoria' }}
                                </span>
                            </div>

                            {{-- Botões --}}
                            <div class="flex gap-2 mt-4">
                                <a href="{{ url('update-product/' . $product->id) }}"
                                    class="flex-1 bg-blue_purple text-white text-center px-4 py-1.5 rounded-md hover:bg-base_color transition duration-200 shadow-sm">
                                    Editar
                                </a>

                                <form action="{{ url('delete-product/' . $product->id) }}" method="POST"
                                    onsubmit="return confirm('Tem certeza que deseja excluir este produto?')"
                                    class="flex-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-full bg-red-600 text-white px-4 py-1.5 rounded-md hover:bg-red-500 transition duration-200 shadow-sm">
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </div>
@endsection
