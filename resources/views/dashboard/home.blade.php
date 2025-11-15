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
            <div class="flex items-center gap-2 bg-dark_blue_gray px-3 py-1.5 rounded-lg">
                <i class="ri-user-3-line text-xl text-light"></i>
                <span class="text-sm text-white">Admin User</span>
            </div>
        </div>
    </div>

    {{-- Top Cards --}}
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

        <a href="{{ route('users') }}"
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



    {{-- Charts --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">

        <div class="bg-blue_gray p-6 rounded-xl shadow-md border border-dark_blue_gray/50">
            <h3 class="text-lg font-semibold mb-4 text-white">Entrada do Estoque</h3>
            <div class="h-48">
                <canvas id="stockChart"></canvas>
            </div>
        </div>

        <div class="bg-blue_gray p-6 rounded-xl shadow-md border border-dark_blue_gray/50">
            <h3 class="text-lg font-semibold mb-4 text-white">Produtos por Categoria</h3>
            <div class="h-48 flex items-center justify-center">
                <canvas id="categoryChart"></canvas>
            </div>
        </div>

    </div>

    <div class="bg-dark_blue_gray border border-gray-700 rounded-2xl p-6 shadow-lg mt-8">
        <h2 class="text-2xl font-bold text-base_color mb-6 flex items-center gap-2">
            <i class="ri-user-add-fill"></i>
            Últimos Usuários Cadastrados
        </h2>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($recentUsers->take(3) as $user)
                <div class="bg-gray-800 border border-gray-700 rounded-2xl p-5 flex items-center justify-between h-32">
                    <div>
                        <p class="text-base_color font-semibold text-lg">{{ $user->name }}</p>
                        <p class="text-gray-400 text-sm mt-1">{{ $user->email }}</p>
                        <p class="text-gray-500 text-xs mt-2">
                            Cadastrado em: {{ $user->created_at->format('d/m/Y') }}
                        </p>
                    </div>

                    <div
                        class="w-14 h-14 rounded-full bg-gray-700 flex items-center justify-center text-gray-400 text-sm font-bold">
                        {{ strtoupper(substr($user->name, 0, 1)) }}{{ strtoupper(substr(explode(' ', $user->name)[1] ?? '', 0, 1)) }}
                    </div>
                </div>
            @endforeach
        </div>

    </div>





    {{-- SCRIPTS --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', () => {


            async function loadStockChart() {
                try {
                    const response = await fetch('/chart/stock');
                    const result = await response.json();

                    console.log('Stock Chart Data:', result);

                    const ctxStock = document.getElementById('stockChart').getContext('2d');

                    new Chart(ctxStock, {
                        type: 'bar',
                        data: {
                            labels: result.labels,
                            datasets: [{
                                label: 'Entradas no Estoque',
                                data: result.data,
                                backgroundColor: 'rgba(0, 187, 249, 0.35)',
                                borderColor: 'rgba(0, 187, 249, 1)',
                                borderWidth: 2,
                                borderRadius: 8
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        color: '#ccc'
                                    },
                                    grid: {
                                        color: 'rgba(255,255,255,0.06)'
                                    }
                                },
                                x: {
                                    ticks: {
                                        color: '#ccc'
                                    },
                                    grid: {
                                        display: false
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    labels: {
                                        color: '#ddd'
                                    }
                                }
                            }
                        }
                    });
                } catch (error) {
                    console.error('Erro ao carregar Stock Chart:', error);
                }
            }


            async function loadCategoryChart() {
                try {
                    const response = await fetch('/chart/categories');
                    const result = await response.json();

                    console.log('Category Chart Data:', result);

                    const ctxCategories = document.getElementById('categoryChart').getContext('2d');

                    function generateNeoShopColor() {
                        const baseColors = [
                            [0, 187, 249],
                            [4, 102, 200],
                            [61, 52, 139],
                            [78, 205, 196],
                        ];
                        const base = baseColors[Math.floor(Math.random() * baseColors.length)];
                        const variation = () => Math.floor(Math.random() * 40) - 20;
                        return `rgb(${base[0] + variation()}, ${base[1] + variation()}, ${base[2] + variation()})`;
                    }

                    const colors = result.labels.map(() => generateNeoShopColor());

                    new Chart(ctxCategories, {
                        type: 'doughnut',
                        data: {
                            labels: result.labels,
                            datasets: [{
                                data: result.data,
                                backgroundColor: colors,
                                borderColor: '#0A0F16',
                                borderWidth: 2,
                                hoverOffset: 12
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    labels: {
                                        color: '#ccc',
                                        font: {
                                            size: 13
                                        }
                                    }
                                }
                            }
                        }
                    });
                } catch (error) {
                    console.error('Erro ao carregar Category Chart:', error);
                }
            }

            loadStockChart();
            loadCategoryChart();
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
