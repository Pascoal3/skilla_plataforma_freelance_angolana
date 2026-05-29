<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provincia; // Certifique-se que o Model Provincia existe

class ProvinciaSeeder extends Seeder
{
    public function run()
    {
        $provincias = [
            ['nome' => 'Bengo'],
            ['nome' => 'Benguela'],
            ['nome' => 'Bié'],
            ['nome' => 'Cabinda'],
            ['nome' => 'Cunene'],
            ['nome' => 'Huambo'],
            ['nome' => 'Huíla'],
            ['nome' => 'Kuando Kubango'],
            ['nome' => 'Kwanza Norte'],
            ['nome' => 'Kwanza Sul'],
            ['nome' => 'Luanda'],
            ['nome' => 'Lunda Norte'],
            ['nome' => 'Lunda Sul'],
            ['nome' => 'Malanje'],
            ['nome' => 'Moxico'],
            ['nome' => 'Namibe'],
            ['nome' => 'Uíge'],
            ['nome' => 'Zaire'],
        ];

        foreach ($provincias as $provincia) {
            Provincia::create($provincia);
        }
    }
}