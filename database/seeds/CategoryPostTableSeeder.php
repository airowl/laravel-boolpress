<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\Category;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $catagory_ids = Category::pluck('id')->toArray();
        $posts = Post::all();
        foreach ($posts as $post) {
            $post->categories()->sync($faker->randomElements($catagory_ids, 2));
        }
    }
}
