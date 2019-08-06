<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'name'       => 'Dima',
                'email'      => 'qweqwe123@gmail.com',
                'password'   => 'UqNuXDcPTjfeFjqrhksxlNK92Bhb6fqVgB05yPTJd42',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => Str::random(10),
                'email'      => Str::random(10) . '@gmail.com',
                'password'   => 'UqNuXDcPTjfeFjqrhksxlNK92Bhb6fqVgB05yPTJd42',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => Str::random(10),
                'email'      => Str::random(10) . '@gmail.com',
                'password'   => 'UqNuXDcPTjfeFjqrhksxlNK92Bhb6fqVgB05yPTJd42',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
