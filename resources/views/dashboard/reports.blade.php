@extends('layouts.layout_dashboard')

@section('title', 'Relatórios')

@section('content')
<div class="max-w-7xl mx-auto p-4 space-y-8">

    <!-- Título -->
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-base_color">Relatórios</h1>
    </div>

    <!-- KPIs -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="bg-dark_blue_gray p-6 rounded-xl border border-gray-700 shadow">
            <span class="text-gray-400 text-sm">Vendas Totais</span>
            <h2 class="text-2xl font-bold text-base_color mt-2">R$ 12.450,00</h2>
        </div>

        <div class="bg-dark_blue_gray p-6 rounded-xl border border-gray-700 shadow">
            <span class="text-gray-400 text-sm">Pedidos</span>
            <h2 class="text-2xl font-bold text-base_color mt-2">348</h2>
        </div>

        <div class="bg-dark_blue_gray p-6 rounded-xl border border-gray-700 shadow">
            <span class="text-gray-400 text-sm">Ticket Médio</span>
            <h2 class="text-2xl font-bold text-base_color mt-2">R$ 35,80</h2>
        </div>

        <div class="bg-dark_blue_gray p-6 rounded-xl border border-gray-700 shadow">
            <span class="text-gray-400 text-sm">Clientes Novos</span>
            <h2 class="text-2xl font-bold text-base_color mt-2">72</h2>
        </div>
    </div>

    <!-- Gráficos (placeholders) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <!-- Vendas por dia -->
        <div class="bg-dark_blue_gray p-6 rounded-xl border border-gray-700 shadow">
            <h3 class="text-lg font-semibold text-base_color mb-4">Vendas por Dia</h3>
            <div class="h-56 bg-gray-800 rounded-lg flex items-center justify-center text-gray-500">
                Gráfico aqui
            </div>
        </div>

        <!-- Produtos mais vendidos -->
        <div class="bg-dark_blue_gray p-6 rounded-xl border border-gray-700 shadow">
            <h3 class="text-lg font-semibold text-base_color mb-4">Produtos Mais Vendidos</h3>
            <div class="h-56 bg-gray-800 rounded-lg flex items-center justify-center text-gray-500">
                Gráfico aqui
            </div>
        </div>
    </div>

    <!-- Relatório de clientes -->
    <div class="bg-dark_blue_gray p-6 rounded-xl border border-gray-700 shadow">
        <h3 class="text-lg font-semibold text-base_color mb-4">Clientes</h3>

        <table class="w-full text-gray-300 text-sm">
            <thead>
                <tr class="border-b border-gray-700">
                    <th class="py-2 text-left">Cliente</th>
                    <th class="py-2 text-left">Última Compra</th>
                    <th class="py-2 text-left">Total Gasto</th>
                    <th class="py-2 text-left">Pedidos</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-800">
                    <td class="py-3">João Silva</td>
                    <td class="py-3">2025-11-10</td>
                    <td class="py-3">R$ 420,00</td>
                    <td class="py-3">12</td>
                </tr>

                <tr class="border-b border-gray-800">
                    <td class="py-3">Maria Santos</td>
                    <td class="py-3">2025-11-08</td>
                    <td class="py-3">R$ 310,00</td>
                    <td class="py-3">9</td>
                </tr>

                <tr>
                    <td class="py-3">Carlos Lima</td>
                    <td class="py-3">2025-11-07</td>
                    <td class="py-3">R$ 150,00</td>
                    <td class="py-3">3</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
