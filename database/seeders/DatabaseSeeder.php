<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Store\database\seeders\ProductSeeder;
use Modules\UserAdministration\database\seeders\RoleSeeder;
use Modules\UserAdministration\database\seeders\UserSeeder;
use Modules\UserAdministration\Entities\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
