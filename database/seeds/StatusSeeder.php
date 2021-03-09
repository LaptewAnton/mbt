<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    public function run()
    {
        DB::table('statuses')->insert([
            'name' => 'Новая',
        ]);
        DB::table('statuses')->insert([
            'name' => 'Решена',
        ]);
        DB::table('statuses')->insert([
            'name' => 'Отклонена',
        ]);
    }
}
