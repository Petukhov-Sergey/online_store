<?php

namespace Modules\UserAdministration\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\UserAdministration\Entities\Role;
use Modules\UserAdministration\Entities\User;

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
