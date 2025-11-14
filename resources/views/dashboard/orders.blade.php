@extends('layouts.layout_dashboard')

@section('title', 'Pedidos')

@section('content')
<div class="max-w-7xl mx-auto p-4 space-y-8">

    <!-- Título -->
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-base_color">Pedidos</h1>

        <!-- Filtros rápidos -->
        <div class="flex gap-2">
            <button class="px-4 py-2 bg-dark_blue_gray border border-gray-700 rounded-lg text-gray-300 hover:bg-gray-800 transition">
                Hoje
            </button>
            <button class="px-4 py-2 bg-dark_blue_gray border border-gray-700 rounded-lg text-gray-300 hover:bg-gray-800 transition">
                Semana
            </button>
            <button class="px-4 py-2 bg-dark_blue_gray border border-gray-700 rounded-lg text-gray-300 hover:bg-gray-800 transition">
                Mês
            </button>
        </div>
    </div>

    <!-- KPIs -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="bg-dark_blue_gray p-6 rounded-xl border border-gray-700 shadow">
            <span class="text-gray-400 text-sm">Pedidos Hoje</span>
            <h2 class="text-2xl font-bold text-base_color mt-2">27</h2>
        </div>

        <div class="bg-dark_blue_gray p-6 rounded-xl border border-gray-700 shadow">
            <span class="text-gray-400 text-sm">Pedidos no Mês</span>
            <h2 class="text-2xl font-bold text-base_color mt-2">348</h2>
        </div>

        <div class="bg-dark_blue_gray p-6 rounded-xl border border-gray-700 shadow">
            <span class="text-gray-400 text-sm">Taxa de Conclusão</span>
            <h2 class="text-2xl font-bold text-base_color mt-2">92%</h2>
        </div>

        <div class="bg-dark_blue_gray p-6 rounded-xl border border-gray-700 shadow">
            <span class="text-gray-400 text-sm">Cancelamentos</span>
            <h2 class="text-2xl font-bold text-base_color mt-2">4</h2>
        </div>
    </div>

    <!-- Lista de Pedidos -->
    <div class="bg-dark_blue_gray p-6 rounded-xl border border-gray-700 shadow">

        <h3 class="text-lg font-semibold text-base_color mb-4">Pedidos Recentes</h3>

        <table class="w-full text-gray-300 text-sm">
            <thead>
                <tr class="border-b border-gray-700">
                    <th class="py-2 text-left">Pedido</th>
                    <th class="py-2 text-left">Cliente</th>
                    <th class="py-2 text-left">Valor</th>
                    <th class="py-2 text-left">Status</th>
                    <th class="py-2 text-left">Data</th>
                    <th class="py-2 text-left text-right">Ações</th>
                </tr>
            </thead>

            <tbody>

                <!-- Exemplo 1 -->
                <tr class="border-b border-gray-800">
                    <td class="py-3 font-semibold">#1254</td>
                    <td class="py-3">João Silva</td>
                    <td class="py-3">R$ 68,90</td>
                    <td class="py-3">
                        <span class="px-2 py-1 rounded-lg bg-green-700/40 text-green-400 text-xs font-semibold">
                            Concluído
                        </span>
                    </td>
                    <td class="py-3">12/11/2025 18:35</td>
                    <td class="py-3 text-right">
                        <a href="#" class="text-base_color hover:underline">Ver</a>
                    </td>
                </tr>

                <!-- Exemplo 2 -->
                <tr class="border-b border-gray-800">
                    <td class="py-3 font-semibold">#1253</td>
                    <td class="py-3">Maria Santos</td>
                    <td class="py-3">R$ 42,50</td>
                    <td class="py-3">
                        <span class="px-2 py-1 rounded-lg bg-yellow-700/40 text-yellow-400 text-xs font-semibold">
                            Em preparo
                        </span>
                    </td>
                    <td class="py-3">12/11/2025 18:12</td>
                    <td class="py-3 text-right">
                        <a href="#" class="text-base_color hover:underline">Ver</a>
                    </td>
                </tr>

                <!-- Exemplo 3 -->
                <tr>
                    <td class="py-3 font-semibold">#1252</td>
                    <td class="py-3">Carlos Lima</td>
                    <td class="py-3">R$ 89,90</td>
                    <td class="py-3">
                        <span class="px-2 py-1 rounded-lg bg-red-700/40 text-red-400 text-xs font-semibold">
                            Cancelado
                        </span>
                    </td>
                    <td class="py-3">12/11/2025 17:40</td>
                    <td class="py-3 text-right">
                        <a href="#" class="text-base_color hover:underline">Ver</a>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>

</div>
@endsection
