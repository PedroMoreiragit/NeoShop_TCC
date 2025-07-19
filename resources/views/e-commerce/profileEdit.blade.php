@extends('layouts.layout_ecommerce')

@section('title', 'Conta - Neoshop')

@section('content')
    <main>
        <section>
            <div class="bg-white  flex items-center justify-center p-4">
                <div class="bg-blue_gray text-white w-full max-w-2xl rounded-2xl shadow-xl p-6 space-y-8">

                    <div class="flex flex-col items-center gap-3">
                        <div
                            class="w-24 h-24 bg-base_color rounded-full flex items-center justify-center text-3xl font-bold shadow-lg">
                            P
                        </div>
                        <h2 class="text-2xl font-bold">Editar Perfil</h2>
                        <p class="text-light text-sm">Atualize suas informações pessoais</p>
                    </div>

                    <form class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm mb-1" for="name">Nome completo</label>
                                <input id="name" type="text" placeholder="Pedro Moreira"
                                    class="w-full bg-dark_blue_gray text-white rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-base_color placeholder:text-light text-sm">
                            </div>
                            <div>
                                <label class="block text-sm mb-1" for="email">E-mail</label>
                                <input id="email" type="email" placeholder="pedro@email.com"
                                    class="w-full bg-dark_blue_gray text-white rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-base_color placeholder:text-light text-sm">
                            </div>
                            <div>
                                <label class="block text-sm mb-1" for="phone">Telefone</label>
                                <input id="phone" type="text" placeholder="(11) 91234-5678"
                                    class="w-full bg-dark_blue_gray text-white rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-base_color placeholder:text-light text-sm">
                            </div>
                            <div>
                                <label class="block text-sm mb-1" for="cpf">CPF</label>
                                <input id="cpf" type="text" placeholder="123.456.789-00"
                                    class="w-full bg-dark_blue_gray text-white rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-base_color placeholder:text-light text-sm">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm mb-1" for="address">Endereço</label>
                            <input id="address" type="text" placeholder="Rua Exemplo, 123 - Centro"
                                class="w-full bg-dark_blue_gray text-white rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-base_color placeholder:text-light text-sm">
                        </div>

                        <div class="flex flex-col sm:flex-row justify-between gap-4 pt-4">
                            <button type="submit"
                                class="flex-1 bg-base_color hover:bg-dark transition text-white font-semibold py-3 rounded-xl flex items-center justify-center gap-2">
                                <i class="ri-check-line text-lg"></i>
                                Salvar Alterações
                            </button>
                            <button type="button"
                                class="flex-1 bg-red-500 hover:bg-red-600 transition text-white font-semibold py-3 rounded-xl flex items-center justify-center gap-2">
                                <i class="ri-close-line text-lg"></i>
                                Cancelar
                            </button>
                        </div>
                    </form>

                </div>
            </div>


        </section>
    </main>
@endsection
