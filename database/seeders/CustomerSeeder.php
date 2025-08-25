<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create test customers
        User::create([
            'name' => 'John Customer',
            'email' => 'customer1@interior.com',
            'password' => bcrypt('password'),
            'role' => 'customer',
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'customer2@interior.com',
            'password' => bcrypt('password'),
            'role' => 'customer',
        ]);

        User::create([
            'name' => 'Robert Wilson',
            'email' => 'customer3@interior.com',
            'password' => bcrypt('password'),
            'role' => 'customer',
        ]);
    }
}
