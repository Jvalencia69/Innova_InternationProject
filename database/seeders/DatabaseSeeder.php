<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        $this->call(NacionalidadSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermisoSeeder::class);
        $this->call(GeneroSeeder::class);
    }
}
