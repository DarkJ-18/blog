<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Asegúrate de que la ruta sea correcta para tu estructura de directorios
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Juan Dark';
        $user->email = 'dark@gmail.com';
        $user->password = Hash::make('12345678'); // Uso de Hash::make para mayor claridad
        $user->save();

        User::factory(10)->create();
    }
}