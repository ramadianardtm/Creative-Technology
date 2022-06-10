<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new Category();
        $cat->name = 'Grass';
        $cat->save();

        $cat = new Category();
        $cat->name = 'Cactus';
        $cat->save();

        $cat = new Category();
        $cat->name = 'Flower';
        $cat->save();

        $cat = new Category();
        $cat->name = 'Custom';
        $cat->save();
    }
}
