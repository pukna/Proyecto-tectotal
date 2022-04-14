<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        Article::truncate();
        $faker = \Faker\Factory::create();
        // arreglo estado
        $array=['Activo','Inactivo',];
        $units=['Libs','Metros','unidad','litros'];
        // Crear artículos ficticios en la tabla
        for ($i = 0; $i < 50; $i++) {
            Article::create([
                'name' => $faker->sentence,
                'condition' => $faker->randomElement($array),
                'unit' => $faker->randomElement($units),
                'body' => $faker->text,
                'catalogCode' => $faker->numberBetween(),
                'amount' => $faker->randomDigit(),
                'supplier_id' => $faker->randomDigit(1,10),

            ]);
        }
    }
}
