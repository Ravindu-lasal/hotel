<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // Create a basic test user
    User::factory()->create([
        'name' => 'user',
        'email' => 'user@gmail.com',
        'password' => Hash::make('user123'), 
    ]);

    
    //add roles seederfile
    $this->call(RolesSeeder::class);
}
}
