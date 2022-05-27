<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user_ids = User::pluck('id')->toArray();
        for ($i=0; $i < 100; $i++) {

            $newPost = new Post();
            $newPost->user_id = $faker->randomElement($user_ids);
            $newPost->image = $faker->randomElement(
                [
                    'https://www.fumetto-online.it/ew/ew_albi/images/PLANET%20MANGA/JUJUTSU-KAISEN007.jpg',
                    'https://www.panini.it/media/catalog/product/cache/dcdcea88706ab1684584701c5b27598d/m/a/maher046_0.jpg',
                    'https://upload.wikimedia.org/wikipedia/it/4/4d/L%27attacco_dei_giganti_copertina.jpeg',
                    'https://images-na.ssl-images-amazon.com/images/I/81PxvdB+vZL.jpg'
                ]
            );
            $newPost->title = $faker->word();
            $newPost->description = $faker->paragraph();
            $newPost->save();

        }
    }
}
