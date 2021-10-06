<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'email' => 'admin@mail.com',
                'password' => Hash::make('admin12345'),
                'role' => 'administrator',
            ],
            [
                'name' => 'Customer',
                'email' => 'cust@mail.com',
                'password' => Hash::make('cust12345'),
                'role' => 'customer',
            ],
        ]);
    }
}
