<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'title' => 'Hello World',
            'content' => 'This is my first article feel free to stay up to date by subscribing for my newsletter'
        ]);
        $post->save();

        $post = new \App\Post([
            'title' => 'How to create a database user in few minutes',
            'content' => 'In this tutorial we are going to look at how to create a Postgres user from the command line interface'
        ]);
        $post->save();
    }
}
