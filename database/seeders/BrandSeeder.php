<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'IKEA',
                'description' => 'Merupakan merk terkenal di seluruh dunia.',
                'image' => 'images/bear-brand.jpg'
            ],
            [
                'name' => 'PRO-DESIGN',
                'description' => 'Merupakan merk lokal terkenal di Indonesia .',
                'image' => 'images/chitato.jpg'
            ],
        ]);
    }
}
