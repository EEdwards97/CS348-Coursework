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
        //$timestamps = false;
        $post = new Post;
        $post -> id =1;
        $post -> user_id = 1;
        $post -> post_title = "Title";
        $post -> post_content = "Post Content";

        //factory(App\Post::class, 50)->create();

        $post->save();

    }
}
