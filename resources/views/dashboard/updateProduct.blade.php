@extends('layouts.layout_dashboard')

@section('title', 'Editar Produto')

@section('content')
    <div class="max-w-4xl mx-auto bg-blue_gray rounded-2xl shadow-xl p-8">

        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-base_color">
                Cadastrar Novo Produto
            </h1>

            <a href="{{ route('products') }}"
                class="bg-base_color text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue_purple transition duration-200 flex items-center gap-2">
                <i class="ri-arrow-go-back-line text-lg"></i>
                Voltar
            </a>
        </div>



        <form action="{{ route('update-product', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf


            <!-- Product Name -->
            <div>
                <label for="name" class="block text-sm font-medium mb-2 text-light">Nome do Produto</label>
                <input type="text" id="name" name="name" value="{{ $product->name }}"
                    class="w-full bg-dark_blue_gray border border-gray-700 rounded-xl p-3 text-white placeholder-gray-400
                       focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                    required>
            </div>

            <!-- Short Description -->
            <div>
                <label for="short_description" class="block text-sm font-medium mb-2 text-light">Descrição Curta</label>
                <input type="text" id="short_description" name="short_description"
                    value="{{ $product->short_description }}"
                    class="w-full bg-dark_blue_gray border border-gray-700 rounded-xl p-3 text-white placeholder-gray-400
                       focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                    required>
            </div>

            <!-- Long Description -->
            <div>
                <label for="long_description" class="block text-sm font-medium mb-2 text-light">Descrição Completa</label>
                <textarea id="long_description" name="long_description" rows="5"
                    class="w-full bg-dark_blue_gray border border-gray-700 rounded-xl p-3 text-white placeholder-gray-400
                       focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                    required>{{ $product->long_description }}</textarea>
            </div>

            <!-- Technical Info -->
            <div>
                <textarea id="technical_info" name="technical_info" rows="3"
                    class="w-full bg-dark_blue_gray border border-gray-700 rounded-xl p-3 text-white placeholder-gray-400
       focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200">
    {{ is_array($product->technical_info) ? json_encode($product->technical_info) : $product->technical_info }}
</textarea>

            </div>

            <!-- Price and Stock -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="price" class="block text-sm font-medium mb-2 text-light">Preço (R$)</label>
                    <input type="number" step="0.01" id="price" name="price" value="{{ $product->price }}"
                        class="w-full bg-dark_blue_gray border border-gray-700 rounded-xl p-3 text-white placeholder-gray-400
                           focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                        required>
                </div>

                <div>
                    <label for="stock" class="block text-sm font-medium mb-2 text-light">Estoque</label>
                    <input type="number" id="stock" name="stock" value="{{ $product->stock }}"
                        class="w-full bg-dark_blue_gray border border-gray-700 rounded-xl p-3 text-white placeholder-gray-400
                           focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                        required>
                </div>
            </div>

            <!-- Product Image -->
            <div>
                <input type="file" id="image_path" name="image_path"
                    class="w-full bg-dark_blue_gray border-2 border-dashed border-gray-600 rounded-xl p-6 text-white cursor-pointer
       hover:border-base_color transition-all duration-200">
                <p class="text-gray-400 text-xs mt-1">Clique ou arraste a imagem aqui</p>

                @if ($product->image_path)
                    <div class="mt-4">
                        <p class="text-sm text-gray-300 mb-2">Imagem atual:</p>
                        <img src="{{ asset('storage/' . $product->image_path) }}" alt="Imagem atual do produto"
                            class="w-32 rounded-lg">
                    </div>
                @endif

            </div>

            <!-- Categoria -->
            <div>
                <label for="category_id" class="block text-sm font-medium mb-2 text-light">Categoria</label>
                <select id="category_id" name="category_id"
                    class="w-full bg-dark_blue_gray border border-gray-700 rounded-xl p-3 text-white placeholder-gray-400
        focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                    required>
                    <option value="">Selecione uma categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>



            <!-- Submit Button -->
            <div class="flex justify-end pt-4">
                <button type="submit"
                    class="bg-base_color text-white font-bold px-6 py-3 rounded-xl hover:bg-blue_purple transform hover:scale-105 transition duration-200">
                    Salvar Produto
                </button>
            </div>
        </form>
    </div>

@endsection
