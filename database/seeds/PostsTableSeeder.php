<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'author'     => 'Dima',
                'title'      => 'title1',
                'slug'       => 'title1',
                'message'    => 'message1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author'     => 'Dima',
                'title'      => 'title2',
                'slug'       => 'title2',
                'message'    => 'message2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author'     => 'Dima',
                'title'      => 'title3',
                'slug'       => 'title3',
                'message'    => 'message3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author'     => 'Dima',
                'title'      => 'title4',
                'slug'       => 'title4',
                'message'    => 'message4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
