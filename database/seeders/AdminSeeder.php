<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Role;

class AdminSeeder extends Seeder
{
    public function run(): void
    {

        $role = Role::firstOrCreate(['name' => 'Admin']);

        // Cria o admin
        $admin = Admin::create([
            'name' => 'Neoshop Company',
            'email' => 'admin@neoshop.com',
            'password' => bcrypt('12345678'),
        ]);


        $admin->roles()->attach($role->id);
    }
}
