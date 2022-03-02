<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\supplier;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        Customer::truncate();
        $faker = \Faker\Factory::create();
        // arreglo estado
        $array=['Nacional','Extrangero',];
        $units=['si','no'];
        $typedocument=['Cedula','ruc'];



        // Crear artículos ficticios en la tabla
        for ($i = 0; $i < 10; $i++) {
            Customer::create([


                'name' => $faker->name,
                'address' => $faker->address,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'creditLimit' => $faker->randomDigit(),



            ]);
        }
    }
}
