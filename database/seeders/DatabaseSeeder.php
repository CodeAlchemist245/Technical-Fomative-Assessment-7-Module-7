<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'lorenz',
            'full_name' => 'Lorenz Figuera',
            'email' => 'lorenz@example.com'
        ]);

        $this->call(TaskSeeder::class);
    }
}