@extends('layouts.layout_dashboard')

@section('title', 'Dashboard - NeoShop')

@section('content')

    <div class="flex justify-between items-center mb-6" >
        <div>
            <h1 class="text-2xl font-bold text-white">Dashboard</h1>
            <p class="text-light text-sm">Bem-vindo ao seu painel de controle, <strong>Admin</strong></p>
        </div>

        <div class="flex items-center gap-6">
            <div class="relative">
                <i class="ri-notification-3-line text-xl text-light"></i>
                <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs px-1 rounded-full">3</span>
            </div>

            <div class="flex items-center gap-2">
                <i class="ri-user-3-line text-xl text-light"></i>
                <span class="text-sm">Admin User</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-blue_gray p-5 rounded-lg shadow">
            <div class="flex items-center justify-between mb-2">
                <span class="text-sm text-light">Vendas Totais</span>
                <i class="ri-shopping-cart-line text-lg text-base_color"></i>
            </div>
            <h2 class="text-2xl font-semibold">R$ 324.652,00</h2>
            <p class="text-green-400 text-sm mt-1">↑ 12</p>
        </div>
        <div class="bg-blue_gray p-5 rounded-lg shadow">
            <div class="flex items-center justify-between mb-2">
                <span class="text-sm text-light">Receita Mensal</span>
                <i class="ri-money-dollar-circle-line text-lg text-yellow-400"></i>
            </div>
            <h2 class="text-2xl font-semibold">R$ 32.459,90</h2>
            <p class="text-green-400 text-sm mt-1">↑ 8%</p>
        </div>
        <div class="bg-blue_gray p-5 rounded-lg shadow">
            <div class="flex items-center justify-between mb-2">
                <span class="text-sm text-light">Novos Clientes</span>
                <i class="ri-user-add-line text-lg text-green-400"></i>
            </div>
            <h2 class="text-2xl font-semibold">243</h2>
            <p class="text-green-400 text-sm mt-1">↑ 5%</p>
        </div>
        <div class="bg-blue_gray p-5 rounded-lg shadow">
            <div class="flex items-center justify-between mb-2">
                <span class="text-sm text-light">Taxa de Conversão</span>
                <i class="ri-bar-chart-line text-lg text-blue_purple"></i>
            </div>
            <h2 class="text-2xl font-semibold">3.2%</h2>
            <p class="text-red-400 text-sm mt-1">↓ 0.5%</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-blue_gray p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold mb-2 text-white">Vendas vs. Visitas</h3>
            <canvas id="salesChart" height="200"></canvas>
        </div>
        <div class="bg-blue_gray p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold mb-2 text-white">Vendas por Categoria</h3>
            <canvas id="categoryChart" height="200"></canvas>
        </div>
    </div>
@endsection
