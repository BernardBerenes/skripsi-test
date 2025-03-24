<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i=0; $i < 300; $i++) { 
            User::create([
                'name' => 'newuser'.$i,
                'email' => 'newuser'.$i.'@example.com',
                'password' => 'password',
            ]);
        }
    }
}
