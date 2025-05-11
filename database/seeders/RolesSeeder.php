<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{

    User::factory()->create([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('admin123'), // 🔐 Use a secure password in real apps
    ]);
}
}


