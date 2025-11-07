@extends('layouts.layout_dashboard')

@section('title', 'Produtos')

@section('content')
    <div class="max-w-7xl mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-base_color">Produtos</h1>

            <a href="create-product"
                class="bg-base_color text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue_purple transition duration-200 flex items-center gap-2">
                <i class="ri-add-line text-lg"></i>
                Novo Produto
            </a>
        </div>


        <div class="bg-blue_gray rounded-xl shadow-md overflow-hidden">
            <div class="flex flex-col divide-y divide-dark_blue_gray">


                @foreach ($products as $product)
                    <div class="flex items-center p-4 hover:bg-dark_blue_gray transition duration-200">
                        <img src="{{ Storage::url($product->image_path) }}" alt=""
                            class="w-20 h-20 object-cover rounded-lg mr-4">
                        <div class="flex-1">
                            <h2 class="text-white font-semibold">{{ $product->name }}</h2>
                            <p class="text-gray-300 text-sm">{{ $product->short_desc }}</p>
                            <p class="text-base_color font-bold mt-1">R$ {{ $product->price }}</p>
                        </div>
                        <div class="flex gap-2 ml-4">
                            <button
                                class="bg-blue_purple text-white px-3 py-1.5 rounded-md hover:bg-base_color transition duration-200">
                                Editar
                            </button>

                            <form action="delete-product/{{ $product->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-600 text-white px-3 py-1.5 rounded-md hover:bg-red-500 transition duration-200">
                                    Excluir
                                </button>
                            </form>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
