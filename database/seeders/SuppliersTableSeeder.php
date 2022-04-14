<?php

namespace Database\Seeders;


use App\Models\supplier;
use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        Supplier::truncate();
        $faker = \Faker\Factory::create();
        // arreglo estado
        $array=['Nacional','Extrangero',];
        $units=['si','no'];
        $typedocument=['Cedula','ruc'];



        // Crear artículos ficticios en la tabla
        for ($i = 0; $i < 10; $i++) {
            Supplier::create([

                'typeDocument' => $faker->randomElement($typedocument),
                'typeSuppliers' => $faker->randomElement($array),
                'name' => $faker->name,
                'tradename' => $faker->name,
                'country' => $faker->country,
                'specialTaxpayer' => $faker->randomElement($units),
                'telephone' => $faker->phoneNumber,
                'mail' => $faker->email,
                'address' => $faker->address,


            ]);
        }
    }
}
