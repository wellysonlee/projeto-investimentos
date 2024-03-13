<?php

namespace Database\Seeders;
use App\Entities\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'cpf' => '11122233344', 
            'name' => 'Wellyson Lee', 
            'phone' => '85997191633', 
            'birth' => '2002-04-26', 
            'gender' => 'M', 
            'email' => 'EXAMPLE@gmail.com', 
            'password' => bcrypt('12345678'),   
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
