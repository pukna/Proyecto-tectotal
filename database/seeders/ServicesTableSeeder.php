<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\services;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        Services::truncate();
        $faker = \Faker\Factory::create();
        // arreglo estado
        $units=['Libs','Metros','unidad','litros'];


        // Crear artículos ficticios en la tabla
        for ($i = 0; $i < 10; $i++) {
            Services::create([


                'name' => $faker->name,
                'unit' => $faker->randomElement($units),




            ]);
        }
    }
}
