@extends('layouts.layout_dashboard')

@section('title', 'Dashboard - NeoShop')

@section('content')
    {{-- Header --}}
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-white">Visão Geral</h1>
            <p class="text-light text-sm">Bem-vindo de volta, <strong>Admin</strong> 👋</p>
        </div>

        <div class="flex items-center gap-6">
            <div class="relative">
                <i class="ri-notification-3-line text-2xl text-light"></i>
                <span class="absolute -top-1 -right-2 bg-red-500 text-white text-xs px-1 rounded-full">3</span>
            </div>

            <div class="flex items-center gap-2 bg-dark_blue_gray px-3 py-1.5 rounded-lg">
                <i class="ri-user-3-line text-xl text-light"></i>
                <span class="text-sm text-white">Admin User</span>
            </div>
        </div>
    </div>

    {{-- Cards  --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div
            class="bg-blue_gray p-6 rounded-xl shadow-md border border-dark_blue_gray/50 hover:border-base_color/30 transition">
            <div class="flex justify-between items-center mb-2">
                <span class="text-sm text-light">Vendas Totais</span>
                <i class="ri-shopping-bag-line text-lg text-base_color"></i>
            </div>
            <h2 class="text-2xl font-semibold text-white">R$ 487.320</h2>
            <p class="text-green-400 text-xs mt-1">↑ +14% em relação ao mês passado</p>
        </div>

        <a href="{{ route('products') }}"
            class="bg-blue_gray p-6 rounded-xl shadow-md border border-dark_blue_gray/50 hover:border-yellow-400/30 transition">
            <div class="flex justify-between items-center mb-2">
                <span class="text-sm text-light">Valor em estoque</span>
                <i class="ri-coins-line text-lg text-yellow-400"></i>
            </div>
            <h2 id="price" class="text-2xl font-semibold text-white">R${{ $totalPriceInStock }}</h2>
        </a>

        <a href="{{  route('users') }}"
            class="bg-blue_gray p-6 rounded-xl shadow-md border border-dark_blue_gray/50 hover:border-green-400/30 transition">
            <div class="flex justify-between items-center mb-2">
                <span class="text-sm text-light">Novos Clientes</span>
                <i class="ri-user-smile-line text-lg text-green-400"></i>
            </div>
            <h2 class="text-2xl font-semibold text-white">{{ $usersCount }}+</h2>
        </a>

        <a href="{{ route('products') }}"
            class="bg-blue_gray p-6 rounded-xl shadow-md border border-dark_blue_gray/50 hover:border-blue_purple/30 transition">
            <div class="flex justify-between items-center mb-2">
                <span class="text-sm text-light">Quantidade de Produtos</span>
                <i class="ri-box-3-line text-lg text-blue_purple"></i>
            </div>
            <h2 class="text-2xl font-semibold text-white">{{ $productCount }}</h2>
        </a>

    </div>


    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-blue_gray p-6 rounded-xl shadow-md border border-dark_blue_gray/50">
            <h3 class="text-lg font-semibold mb-4 text-white">Desempenho de Vendas (Últimos 6 Meses)</h3>
            <div class="h-48">
                <canvas id="salesChart"></canvas>
            </div>
        </div>

        <div class="bg-blue_gray p-6 rounded-xl shadow-md border border-dark_blue_gray/50">
            <h3 class="text-lg font-semibold mb-4 text-white">Categorias Mais Vendidas</h3>
            <div class="h-48 flex items-center justify-center">
                <canvas id="categoryChart"></canvas>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctxSales = document.getElementById('salesChart');
        new Chart(ctxSales, {
            type: 'line',
            data: {
                labels: ['Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov'],
                datasets: [{
                    label: 'Vendas',
                    data: [42000, 48000, 53000, 50000, 56000, 61000],
                    borderColor: '#9b5de5',
                    backgroundColor: 'rgba(155, 93, 229, 0.15)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        const ctxCategory = document.getElementById('categoryChart');
        new Chart(ctxCategory, {
            type: 'doughnut',
            data: {
                labels: ['Eletrônicos', 'Moda', 'Casa', 'Acessórios'],
                datasets: [{
                    data: [45, 25, 20, 10],
                    backgroundColor: ['#9b5de5', '#00bbf9', '#00f5d4', '#f15bb5'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        labels: {
                            color: '#ddd'
                        }
                    }
                }
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const priceElement = document.getElementById('price');
            if (priceElement) {
                const value = parseFloat(priceElement.textContent.replace(/[^\d,.-]/g, '').replace(',', '.'));
                if (!isNaN(value)) {
                    priceElement.textContent = value.toLocaleString('pt-BR', {
                        style: 'currency',
                        currency: 'BRL'
                    });
                }
            }
        });
    </script>



@endsection
