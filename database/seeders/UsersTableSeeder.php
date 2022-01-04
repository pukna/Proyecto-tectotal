<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Provider\zh_TW\PhoneNumber;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla
        User::truncate();
        $faker = \Faker\Factory::create();
        // Crear la misma clave para todos los usuarios
        // conviene hacerlo antes del for para que el seeder
        // no se vuelva lento.
        $password = Hash::make('123123');
        $rol = 'Admin';
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@prueba.com',
            'password' => $password,
            'rol' => $rol,
            'telephone' => $faker->phoneNumber,
            'ext' => $faker->numberBetween($min = 1000, $max = 9000),
        ]);
        // Generar algunos usuarios para nuestra aplicacion
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
                'rol' => $rol,
                'telephone' => $faker->phoneNumber,
                'ext' => $faker->numberBetween($min = 1000, $max = 9000),

            ]);
        }
    }
}
