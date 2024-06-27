<?php

namespace Modules\UserAdministration\database\seeders;

use Illuminate\Database\Seeder;
use Modules\UserAdministration\Entities\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
    }
}
