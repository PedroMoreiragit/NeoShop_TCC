@extends('layouts.layout_dashboard')

@section('title', 'Adicionar Produto')

@section('content')
    <div class="max-w-4xl mx-auto bg-blue_gray rounded-2xl shadow-xl p-8">

        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-base_color">
                Cadastrar Novo Produto
            </h1>

            <a href="products"
                class="bg-base_color text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue_purple transition duration-200 flex items-center gap-2">
                <i class="ri-arrow-go-back-line text-lg"></i>
                Voltar
            </a>
        </div>



        <form action="{{ route('store-product') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf


            <!-- Product Name -->
            <div>
                <label for="name" class="block text-sm font-medium mb-2 text-light">Nome do Produto</label>
                <input type="text" id="name" name="name"
                    class="w-full bg-dark_blue_gray border border-gray-700 rounded-xl p-3 text-white placeholder-gray-400
                       focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                    placeholder="Ex: Teclado Mecânico RGB" required>
            </div>

            <!-- Short Description -->
            <div>
                <label for="short_description" class="block text-sm font-medium mb-2 text-light">Descrição Curta</label>
                <input type="text" id="short_description" name="short_description"
                    class="w-full bg-dark_blue_gray border border-gray-700 rounded-xl p-3 text-white placeholder-gray-400
                       focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                    placeholder="Breve resumo do produto" required>
            </div>

            <!-- Long Description -->
            <div>
                <label for="long_description" class="block text-sm font-medium mb-2 text-light">Descrição Completa</label>
                <textarea id="long_description" name="long_description" rows="5"
                    class="w-full bg-dark_blue_gray border border-gray-700 rounded-xl p-3 text-white placeholder-gray-400
                       focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                    placeholder="Detalhes técnicos, funcionalidades e benefícios..." required></textarea>
            </div>

            <!-- Technical Info -->
            <div>
                <label for="technical_info" class="block text-sm font-medium mb-2 text-light">Informações Técnicas
                    (opcional)</label>
                <textarea id="technical_info" name="technical_info" rows="3"
                    class="w-full bg-dark_blue_gray border border-gray-700 rounded-xl p-3 text-white placeholder-gray-400
                       focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                    placeholder='Ex: {"marca": "Logitech", "modelo": "G Pro", "garantia": "2 anos"}'></textarea>
                <p class="text-gray-400 text-xs mt-1">Use JSON para atributos técnicos opcionais</p>
            </div>

            <!-- Price and Stock -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="price" class="block text-sm font-medium mb-2 text-light">Preço (R$)</label>
                    <input type="number" step="0.01" id="price" name="price"
                        class="w-full bg-dark_blue_gray border border-gray-700 rounded-xl p-3 text-white placeholder-gray-400
                           focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                        placeholder="Ex: 599.90" required>
                </div>

                <div>
                    <label for="stock" class="block text-sm font-medium mb-2 text-light">Estoque</label>
                    <input type="number" id="stock" name="stock"
                        class="w-full bg-dark_blue_gray border border-gray-700 rounded-xl p-3 text-white placeholder-gray-400
                           focus:ring-2 focus:ring-base_color focus:border-base_color transition-all duration-200"
                        placeholder="Ex: 25" required>
                </div>
            </div>

            <!-- Product Image -->
            <div>
                <label for="image_path" class="block text-sm font-medium mb-2 text-light">Imagem do Produto</label>
                <input type="file" id="image_path" name="image_path"
                    class="w-full bg-dark_blue_gray border-2 border-dashed border-gray-600 rounded-xl p-6 text-white cursor-pointer
                       hover:border-base_color transition-all duration-200">
                <p class="text-gray-400 text-xs mt-1">Clique ou arraste a imagem aqui</p>
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
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
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
