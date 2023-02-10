<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Laptops',
        ]);

        Category::create([
            'name' => 'Desktops',
        ]);

        Category::create([
            'name' => 'Phones',
        ]);

        Category::create([
            'name' => 'Tablets',
        ]);

    }
}
