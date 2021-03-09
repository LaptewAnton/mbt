<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Администратор Администратович',
            'login' => 'qwe',
            'email' => 'admin@admin.ru',
            'password' => Hash::make('qwe'),
            'admin'=> 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Пользователь Пользовательвич',
            'login' => 'user',
            'email' => 'user@user.ru',
            'password' => Hash::make('user'),
        ]);
        DB::table('users')->insert([
            'name' => 'Такой-то Такойтович',
            'login' => 'user2',
            'email' => 'user2@user2.ru',
            'password' => Hash::make('user2'),
        ]);
    }
}
