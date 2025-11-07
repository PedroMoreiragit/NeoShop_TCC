<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeed extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Notebook Gamer X15',
                'short_description' => 'Notebook gamer com RTX 4060 e Ryzen 7',
                'long_description' => 'Equipado com GPU NVIDIA RTX 4060, processador AMD Ryzen 7, 16GB RAM e SSD de 1TB. Ideal para jogos e produtividade.',
                'technical_info' => json_encode([
                    'GPU' => 'RTX 4060 8GB',
                    'CPU' => 'Ryzen 7 7840HS',
                    'RAM' => '16GB DDR5',
                    'Storage' => '1TB SSD NVMe'
                ]),
                'price' => 8999.90,
                'stock' => 12,
                'image_path' => 'products/notebook_gamer_x15.jpg',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mouse Logitech G Pro X Superlight',
                'short_description' => 'Mouse sem fio ultraleve para eSports',
                'long_description' => 'O Logitech G Pro X Superlight é um dos mouses mais leves e precisos do mercado, ideal para FPS e uso profissional.',
                'technical_info' => json_encode([
                    'Sensor' => 'HERO 25K',
                    'Peso' => '63g',
                    'Conectividade' => 'Wireless',
                    'Bateria' => '70 horas'
                ]),
                'price' => 799.99,
                'stock' => 35,
                'image_path' => 'products/mouse_logitech_gpro.jpg',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Monitor UltraWide LG 34"',
                'short_description' => 'Monitor curvo 144Hz com HDR10',
                'long_description' => 'Monitor LG 34" UltraWide curvo, com resolução QHD, taxa de atualização de 144Hz e suporte a HDR10.',
                'technical_info' => json_encode([
                    'Resolução' => '3440x1440',
                    'Taxa de atualização' => '144Hz',
                    'Tempo de resposta' => '1ms',
                    'Painel' => 'IPS Curvo'
                ]),
                'price' => 2999.00,
                'stock' => 8,
                'image_path' => 'products/monitor_lg_ultrawide.jpg',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Teclado Mecânico Redragon Kumara K552',
                'short_description' => 'Teclado mecânico compacto RGB',
                'long_description' => 'O Kumara K552 possui switches Outemu Blue, iluminação RGB e design durável ideal para gamers e programadores.',
                'technical_info' => json_encode([
                    'Switches' => 'Outemu Blue',
                    'Layout' => 'ABNT2',
                    'Iluminação' => 'RGB',
                    'Conectividade' => 'USB'
                ]),
                'price' => 279.90,
                'stock' => 42,
                'image_path' => 'products/teclado_kumara_k552.jpg',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headset HyperX Cloud II',
                'short_description' => 'Headset gamer com som 7.1',
                'long_description' => 'O HyperX Cloud II oferece conforto e qualidade sonora com som surround 7.1 e microfone removível com cancelamento de ruído.',
                'technical_info' => json_encode([
                    'Som' => '7.1 Surround',
                    'Microfone' => 'Removível com cancelamento',
                    'Conexão' => 'USB / P2',
                    'Drivers' => '53mm'
                ]),
                'price' => 649.90,
                'stock' => 27,
                'image_path' => 'products/headset_hyperx_cloud2.jpg',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
