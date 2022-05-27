<?php

use Illuminate\Database\Seeder;
use App\Category;
use Faker\Generator as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categoryName = ['Funny', 'Cringe', 'Sad', 'Happy', 'Corny'];
        for ($i=0; $i < count($categoryName); $i++) {
            $newCategory = new Category;
            $newCategory->name = $categoryName[$i];
            $newCategory->color = $faker->hexColor();
            $newCategory->save();
        }
    }
}
