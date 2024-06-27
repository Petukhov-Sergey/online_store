<?php

namespace Modules\Store\database\seeders;

use Illuminate\Database\Seeder;
use Modules\Store\Entities\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(10)->create();
    }
}
