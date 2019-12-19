<?php

use App\Post;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $p = new Post;
        $p -> user_id = 1;
        $p -> post_title = "Title";
        $p -> post_content = "Post Content";

        factory(App\Post::class, 50)->create();

    }
}
