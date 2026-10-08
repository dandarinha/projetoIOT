<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
<<<<<<< HEAD
=======
        User::updateOrCreate(
            ['email' => 'admin@escola.local'],
            ['name' => 'Administrador', 'password' => bcrypt('password')],
        );

>>>>>>> 6f2a0da7f629a084895bc1f44b04a1197587d6b0
        $this->call([
            AmbienteSeeder::class,
            SensorSeeder::class,
        ]);
    }
}
