<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $user = User::create(['name' => 'Admin',
            'email' => 'admin@example.org',
            'password' => Hash::make('Aa123456')]);
        $user->roles()->attach($adminRole->id);
    }
}
