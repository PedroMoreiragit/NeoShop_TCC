<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(RoleSeeder::class);

        $this->call(ProductsSeed::class);


        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@neoshop.com',
            'password' => Hash::make('12345678'),
            'role_id' => 1,
        ]);


        User::factory()->create([
            'name' => 'Customer User',
            'email' => 'customer@neoshop.com',
            'password' => Hash::make('password'),
            'role_id' => 2,
        ]);
    }
}
