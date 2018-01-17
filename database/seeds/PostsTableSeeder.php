<?php

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
        $post = factory(PostApp\Post::class)->create([
            'user_id' => '2',
        ]);
    }
}
