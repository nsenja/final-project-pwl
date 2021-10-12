<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\ShoppingCart;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            // UserSeeder::class,
            BrandSeeder::class,
            // ShoppingCart::class
        ]);
    }
}
