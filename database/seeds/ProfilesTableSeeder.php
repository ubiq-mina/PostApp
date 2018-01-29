<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostApp\User::all()->each(function ($item, $key) {
            $profile = factory(PostApp\Profile::class)->create([
                'user_id' => $item->id
            ]);
        });
    }
}
