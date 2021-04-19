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
        $category = new Category();
        $category->id = 1;
        $category->name = 'Politica';
        $category->save();

        $category = new Category();
        $category->id = 2;
        $category->name = 'Economia';
        $category->save();
    }
}
