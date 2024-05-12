<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::updateOrCreate(
            [
                'name' => 'dealer',
                'email' => 'dealer@mail',
                'number' => '123',
                'password' => Hash::make('dealer'),
                'user_type' => 'dealer',
                'address' => '123 Main Street',
            ]
        );
        User::updateOrCreate(
            [
                'name' => 'user',
                'email' => 'user@mail',
                'number' => '321',
                'password' => Hash::make('user'),
                'user_type' => 'customer',
                'address' => '321 Main Street',
            ]
        );

        $this->call(PaymentSeeder::class);
        $this->call(SendOptionSeeder::class);
    }
}
