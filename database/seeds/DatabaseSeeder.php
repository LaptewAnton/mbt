<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            StatusSeeder::class, CategorySeeder::class,
            UsersSeeder::class, ApplicationSeeder::class,
        ]);
    }
}
