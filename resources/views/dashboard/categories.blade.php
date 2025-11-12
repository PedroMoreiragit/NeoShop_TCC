@extends('layouts.layout_dashboard')

@section('title', 'Categorias')

@section('content')
    <div class="max-w-7xl mx-auto p-4">
        {{-- Header --}}
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-base_color">Categorias</h1>

            <a href="{{ url('create-category') }}"
                class="bg-base_color text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue_purple transition duration-200 flex items-center gap-2">
                <i class="ri-add-line text-lg"></i>
                Nova Categoria
            </a>
        </div>

        <div class="bg-blue_gray rounded-xl shadow-md overflow-hidden">
            <div class="flex flex-col divide-y divide-dark_blue_gray">

                @if ($categories->isEmpty())
                    <div class="p-6 text-gray-400 text-center">
                        Nenhuma categoria cadastrada ainda.
                    </div>
                @else
                    @foreach ($categories as $category)
                        <div class="flex items-center p-4 hover:bg-dark_blue_gray transition duration-200">

                            <div
                                class="w-14 h-14 flex items-center justify-center mr-4 rounded-lg bg-dark_blue_gray/70 ring-2 ring-base_color/40">
                                <i class="ri-price-tag-3-line text-2xl text-base_color"></i>
                            </div>

                            <div class="flex-1">
                                <h2 class="text-white font-semibold leading-tight">{{ $category->name }}</h2>
                            </div>

                            <div class="flex gap-2 ml-4">
                                <a href="{{ route('update-category' , $category->id) }}"
                                    class="bg-blue_purple text-white px-3 py-1.5 rounded-md hover:bg-base_color transition duration-200">
                                    Editar
                                </a>

                                <form action="{{ route('delete-category', $category->id) }}" method="POST"
                                    onsubmit="return confirm('Deseja realmente excluir esta categoria?')">
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
                @endif

            </div>
        </div>
    </div>
@endsection
