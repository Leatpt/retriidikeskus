<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Piibli Õpikoda',
            'Jumalateenistus',
            'Kasvu Õpikoda',
            'Palvesaladus',
            'Laubaõhta',
            'Retriit'
        ];

        foreach ($categories as $categoryName) {
            Category::firstOrCreate(['name' => $categoryName]);
        }
    }
}
