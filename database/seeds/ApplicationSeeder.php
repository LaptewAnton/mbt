<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ApplicationSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Application::class, 10)->create();
//        DB::table('applications')->insert([
//            'title' => 'Заявка №1',
//            'category_id' => rand(1, 9),
//            'description' => Str::random('500'),
//            'photo_before' => 'example.png',
//            'user_id' => 1,
//            'created_at' => '2021-03-04 07:21:48'
//        ]);
//        DB::table('applications')->insert([
//            'title' => 'Заявка №2',
//            'category_id' => rand(1, 9),
//            'description' => Str::random('500'),
//            'photo_before' => 'example.png',
//            'user_id' => 2,
//            'created_at' => '2021-03-04 07:21:48'
//        ]);
//        DB::table('applications')->insert([
//            'title' => 'Заявка №3',
//            'category_id' => rand(1, 9),
//            'description' => Str::random('500'),
//            'photo_before' => 'example.png',
//            'user_id' => 3,
//            'created_at' => '2021-03-04 07:21:48'
//        ]);
//        DB::table('applications')->insert([
//            'title' => 'Заявка №4',
//            'category_id' => rand(1, 9),
//            'description' => Str::random('500'),
//            'photo_before' => 'example.png',
//            'user_id' => 2,
//            'created_at' => '2021-03-04 07:21:48'
//        ]);
//        DB::table('applications')->insert([
//            'title' => 'Заявка №5',
//            'category_id' => rand(1, 9),
//            'description' => Str::random('500'),
//            'photo_before' => 'example.png',
//            'user_id' => 1,
//            'created_at' => '2021-03-04 07:21:48'
//        ]);
//        DB::table('applications')->insert([
//            'title' => 'Заявка №6',
//            'category_id' => rand(1, 9),
//            'description' => Str::random('500'),
//            'photo_before' => 'example.png',
//            'user_id' => 3,
//            'created_at' => '2021-03-04 07:21:48'
//        ]);
//        DB::table('applications')->insert([
//            'title' => 'Заявка №7',
//            'category_id' => rand(1, 9),
//            'description' => Str::random('500'),
//            'photo_before' => 'example.png',
//            'user_id' => 2,
//            'created_at' => '2021-03-04 07:21:48'
//        ]);
//        DB::table('applications')->insert([
//            'title' => 'Заявка №8',
//            'category_id' => rand(1, 9),
//            'description' => Str::random('500'),
//            'photo_before' => 'example.png',
//            'user_id' => 1,
//            'created_at' => '2021-03-04 07:21:48'
//        ]);

    }
}
