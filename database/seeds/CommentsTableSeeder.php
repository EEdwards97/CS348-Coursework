<?php

use App\Comment;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $c = new Comment;
        $c -> user_id = 00000000;
        $c -> comment_content = "Comment Content";

        factory(App\Comment::class, 50)->create();
    }
}
