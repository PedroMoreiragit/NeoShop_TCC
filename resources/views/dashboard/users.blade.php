@extends('layouts.layout_dashboard')

@section('title', 'Usuários')

@section('content')
    <div class="max-w-7xl mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-base_color">Usuários</h1>

            <a href="{{ url('create-user') }}"
                class="bg-base_color text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue_purple transition duration-200 flex items-center gap-2">
                <i class="ri-add-line text-lg"></i>
                Novo Usuário
            </a>
        </div>

        <div class="bg-blue_gray rounded-xl shadow-md overflow-hidden">
            <div class="flex flex-col divide-y divide-dark_blue_gray">

                @if ($users->isEmpty())
                    <div class="p-6 text-gray-400 text-center">
                        Nenhum usuário cadastrado ainda.
                    </div>
                @else
                    @foreach ($users as $user)
                        <div class="flex items-center p-4 hover:bg-dark_blue_gray transition duration-200">

                            {{-- Avatar --}}
                            <div class="relative w-16 h-16 flex items-center justify-center mr-4">
                                <div
                                    class="w-14 h-14 rounded-full overflow-hidden ring-2 ring-base_color/60 shadow-lg shadow-base_color/20">
                                    <img src="{{ asset('images/user.png') }}" alt="Avatar"
                                        class="w-full h-full object-cover object-center">
                                </div>
                                <span
                                    class="absolute bottom-1 right-1 w-3.5 h-3.5 bg-green-500 rounded-full ring-2 ring-blue_gray"></span>
                            </div>

                            {{-- Info --}}
                            <div class="flex-1">
                                <h2 class="text-white font-semibold leading-tight">{{ $user->name }}</h2>
                                <p class="text-gray-400 text-sm">{{ $user->email }}</p>
                            </div>

                            {{-- Actions --}}
                            <div class="flex gap-2 ml-4">
                                <a href="{{ url('update-user/' . $user->id) }}"
                                    class="bg-blue_purple text-white px-3 py-1.5 rounded-md hover:bg-base_color transition duration-200">
                                    Editar
                                </a>

                                <form action="{{ url('delete-user', $user->id) }}" method="POST"
                                    onsubmit="return confirm('Deseja realmente excluir este usuário?')">
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
