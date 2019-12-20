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
        //$timestamps = false;
        $comment = new Comment;
        $comment -> id = 1;
        $comment -> comment_content = "Comment Content";

        //factory(App\Comment::class, 50)->create();

        $comment->save();
    }
}
